<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Hospital;
use App\Models\NewsUpdate;
use App\Models\Report;
use App\Models\tmp;
use Illuminate\Support\Facades\Mail;
use App\Models\PendingUpdate;
use DateTime;
use Illuminate\Support\Facades\File;


class OpCon extends Controller
{
    public function uploadsdata(Request $request)
    {
        $request->validate(
            [
                'h_id'=>'required',
                'photo'=>'file|mimes:png,jpg,jpeg|max:1024'
            ]
        );
        if(Patient::find($request['h_id']))
        {
            $data = new Data();
            $filename=time().".".$request->file('photo')->getClientOriginalExtension();
            $data->health_id=$request['h_id'];
            $data->data=$filename;
            $data->save();
            echo $request->file('photo')->storeAs('public/uploads/data/'.$request['h_id'],$filename);
            return redirect('official/data/view');
        }
        else{
            session()->flash('error', 'id not found');
            return redirect('official/data/add');
        }
    }
    public function cal_age($dt)
    {
        $dob = new DateTime($dt);
        $today   = new DateTime('today');
        return $dob->diff($today)->y;
    }
    public function cal_year($dt)
    {
        $dt= new DateTime($dt);
        return $dt->format("y");
    }
    public function add_patient(Request $request)
    {
            // echo "<script>alert('".session()->get('otp')."</script>";
            // die;
            session()->flash('go_add','true');
        session()->flash('email',$request['email']);


                $request->validate(
                    [
                        'First_Name'=>'required',
                        'Middle_Name'=>'required',
                        'Last_Name'=>'required',
                        'gender'=>'required',
                        'Address'=>'required',
                        'City'=>'required',
                        'Number'=>'required',
                        'Date_of_Birth'=>'required|date',
                        'photo'=>'required',
                        'email'=>'required|email',
                        'password'=>'required',
                        'pass'=>'required|same:password'
                    ]
                );
                //|unique:patients

                $idd=tmp::all();
                $patient= new Patient();
                $id='';
                foreach($idd as $i)
                {
                    $patient->health_id= $this->cal_year($request['dob']).$i->h_id;
                    $id=$this->cal_year($request['dob']).$i->h_id;
                    // $patient->img_url=$request['photo'];

                    $i->h_id+=rand(1,3);
                    $i->save();

                }
                    $filename=$id.".".($request->file('photo')->getClientOriginalExtension());
                    $patient->photo=$filename;
                    echo $request->file('photo')->storeAs('public/uploads/patients/',$filename);

                $patient->name=$request['First_Name'];
                $patient->m_name=$request['Middle_Name'];
                $patient->l_name=$request['Last_Name'];
                $patient->gender=$request['gender'];
                $patient->number=$request['Number'];
                $patient->email=$request['email'];
                $patient->password=$request['password'];
                $patient->address=$request['Address'];
                $patient->city=$request['City'];
                $patient->dob=$request['Date_of_Birth'];
                $patient->age=$this->cal_age($request['dob']);
                $patient->bg=$request['bg'];
                $patient->long_disease=$request['ld'];
                $patient->save();
                return redirect('official/patients/list');



    }
    public function add_doc(Request $request)
    {
        session()->flash('go_add','true');
        session()->flash('email',$request['email']);


                $request->validate(
                    [
                        'name'=>'required|regex:/^[a-z .A-Z]+$/',
                        'gender'=>'required',
                        'address'=>'required',
                        'number'=>'required|regex:/[0-9]{10}/',
                        'Date_of_Birth'=>'required|date',
                        'email'=>'required|email',
                        'department' =>' required',
                        'education' =>' required',
                        'about' =>' required',
                        'since' =>' required|regex:/[0-9]/',
                        'ho_id' =>' required|regex:/[0-9]/',
                        'password'=>'required',
                        'pass'=>'required|same:password'
                    ]
                );
                //|unique:doctors

                $doctor= new Doctor();

                $doctor->name=$request['name'];
                $doctor->gender=$request['gender'];
                $doctor->number=$request['number'];
                $doctor->email=$request['email'];
                $doctor->password=$request['password'];
                $doctor->address=$request['address'];
                $doctor->dob=$request['Date_of_Birth'];
                $doctor->hospital_id=$request['ho_id'];
                // $doctor->age=$this->cal_age($request['Date_of_Birth']);
                $doctor->about=$request['about'];
                $doctor->department=$request['department'];
                $doctor->education=$request['education'];
                $doctor->since=$request['since'];
                $doctor->save();
                return redirect('official/doctors/list');


    }

    public function delete_doc($id)
    {
        $delete = Doctor::find($id);
        if (!is_null($delete))
        {
            $delete->delete();
        }
        return redirect('/official/doctors/dlist');

    }

    public function delete_pat($id)
    {
        $delete = Patient::find($id);
        if (!is_null($delete))
        {
            $delete->delete();
        }
        return redirect('/official/patients/list');
    }


    public function update_doc($id,Request $request)
    {

        // $id = $request['doc_id'];
        $update_doc = Doctor::find($id);
        if(!is_null($update_doc))
        {
        if ($request->hasfile('photo'))
        {
                $image = $update_doc->photo;
                // echo $image;
                if($image!="")
                {
                    File::delete(public_path('/uploads/doctors/'.$image));
                }

                $filename=$id.".".$request->file('photo')->getClientOriginalExtension();
                $update_doc->photo=$filename;
                $request->file('photo')->storeAs('public/uploads/doctors/',$filename);

                // $file->move('uploads/employee_photos' , $filename);
                // $update_details->emp_photo = $filename;
        }
        else if ($request->hasfile('img'))
        {
                $image = $update_doc->photo;
                // echo $image;
                if($image!="")
                {
                    File::delete(public_path('/uploads/doctors/'.$image));
                }

                $filename=$id.".".$request->file('img')->getClientOriginalExtension();
                $update_doc->photo=$filename;
                $request->file('img')->storeAs('public/uploads/doctors/',$filename);
        }
        else
        {
            $update_doc->photo = $request['img'];
        }
        // $update_doc->photo = $photo;
        $update_doc->name = $request['name'];
        $update_doc->email = $request['email'];
        $update_doc->address = $request['address'];
        $update_doc->number = $request['number'];
        $update_doc->hospital_id = $request['ho_id'];
        $update_doc->department = $request['department'];
        $update_doc->education = $request['education'];
        $update_doc->about = $request['about'];
        $update_doc->gender = $request['gender'];
        $update_doc->dob = $request['Date_of_Birth'];

        $update_doc->save();
        return redirect('/official/doctors/list');
    }
    else
    {
        return redirect('/official/doctors/list');
    }
    }

    public function update_patient(Request $request)
    {
        $id = $request['h_id'];
        $update = Patient::find($id);
        if(!is_null($update))
        {
            if ($request->hasfile('photo'))
            {
                $image = $update->photo;
                // echo $image;
                File::delete(public_path('/uploads/patients/'.$image));

                $filename=$id.".".$request->file('photo')->getClientOriginalExtension();
                $update->photo=$filename;
                $request->file('photo')->storeAs('public/uploads/patients/',$filename);

                // $file->move('uploads/employee_photos' , $filename);
                // $update_details->emp_photo = $filename;
            }
            else if ($request->hasfile('img'))
            {
                    $image = $update->photo;
                    // echo $image;
                    File::delete(public_path('/uploads/patients/'.$image));

                    $filename=$id.".".$request->file('img')->getClientOriginalExtension();
                    $update->photo=$filename;
                    $request->file('img')->storeAs('public/uploads/patients/',$filename);
            }
            else
            {
                $update->photo = $request['img'];
            }


            $update->name = $request['First_Name'];
            $update->m_name = $request['Middle_Name'];
            $update->l_name = $request['Last_Name'];
            $update->email = $request['email'];
            $update->address = $request['Address'];
            $update->city = $request['City'];
            $update->number = $request['Number'];
            // $update->hospital_id = $request['ho_id'];
            $update->gender = $request['gender'];
            $update->dob = $request['Date_of_Birth'];
            $update->bg = $request['bg'];
            $update->age = $this->cal_age($request['dob']);
            $update->save();
            return redirect('/official/patients/list');
        }
        else
        {
            return redirect('/official/patients/list');
        }
    }

    public function addreport(Request $request)
    {
        $request->validate(
                [

                    'hospital_id'=>'required',
                    'hospital'=>'required',
                    'doctor'=>'required',
                    'chk_date'=>'required',
                    'chk_time'=>'required',
                    'notes'=>'required'

                ]
            );

            $report=new Report();
            $filename=time().".".$request->file('photo')->getClientOriginalExtension();
            $report->notes_img=$filename;
            echo $request->file('photo')->storeAs('public/uploads/reports/',$filename);

        $report->health_id=$request['health_id'];
        $report->hospital_id=$request['hospital_id'];
        $report->hospital_name=$request['hospital'];
        $report->doctor=$request['doctor'];
        $report->check_date=$request['chk_date'];
        $report->chk_time=$request['chk_time'];
        $report->notes=$request['notes'];
        $report->save();
        return redirect('/official/report');

    }

    public function delete_report($id)
    {
        $delete = Report::find($id);
        if (!is_null($delete))
        {
            $delete->delete();
        }
        return redirect('/official/report');
    }

    public function addblog(Request $request)
    {
        $request->validate(
                [
                    'by'=>'required',
                    'date'=>'required|date',
                    'title'=>'required',
                    'description'=>'required'
                ]
            );

            $blog=new Blog();
            $filename=time().".".$request->file('photo')->getClientOriginalExtension();
            $blog->photo=$filename;
            echo $request->file('photo')->storeAs('public/uploads/blogs/',$filename);

        $blog->by=$request['by'];
        $blog->date=$request['date'];
        $blog->title=$request['title'];
        $blog->description=$request['description'];
        $blog->save();
        return redirect('/official/blogs/list');

    }

    public function addhospital(Request $request)
    {
        $request->validate(
            [
                'name'=>'required',
                'address'=>'required',
                'no'=>'required',
                'email'=>'required|email',
                'department'=>'required',
                'room'=>'required'
            ]
        );
        $hospital=new Hospital();
        $hospital->name=$request['name'];
        $hospital->address=$request['address'];
        $hospital->number=$request['no'];
        $hospital->email=$request['email'];
        $hospital->department=$request['department'];
        $hospital->room=$request['room'];
        $hospital->save();
        return redirect('/official/hospital');
    }
    public function up_hospital($id,Request $request)
    {
        $update = Hospital::find($id);
        $request->validate(
            [
                'name'=>'required',
                'address'=>'required',
                'no'=>'required',
                'email'=>'required|email',
                'department'=>'required',
                'room'=>'required'
            ]
        );

        $update->name=$request['name'];
        $update->address=$request['address'];
        $update->number=$request['no'];
        $update->email=$request['email'];
        $update->department=$request['department'];
        $update->room=$request['room'];
        $update->doctors=$request['doctors'];
        $update->save();
        return redirect('/official/hospital');

    }
    public function delete_hospital($id)
    {
        $delete = Hospital::find($id);
        if (!is_null($delete))
        {
            $delete->delete();
        }
        return redirect('/official/hospital');
    }
    public function edit_profile($id,Request $request)
    {

        if(!is_null(User::find($id)))
        {
            $update = User::find($id);
        }
        else if(!is_null(Doctor::find($id)))
        {
            $update = Doctor::find($id);
        }
        else
        {
            return redirect('/official');

        }
        $request->validate(
            [
                'name' => 'required',
                'about' => 'required',
                'email' => 'required',
                'education' => 'required',
                'number' => 'required'
            ]
        );

        if(!is_null(Doctor::find($id)))
        {
            $request->validate(
                [
                    'department' => 'required',
                    'address' => 'required'
                ]
            );
            $update->department = $request['department'];
            $update->address = $request['address'];
        }
        $update->name = $request['name'];
        $update->about = $request['about'];
        $update->email = $request['email'];
        $update->education = $request['education'];
        $update->number = $request['number'];
        $update->save();
        session()->put('name',$update->name);
        return redirect('/official');


    }
    public function up_blog($id,Request $request)
    {
        $update = Blog::find($id);
        $request->validate(
            [
                'title'=>'required',
                'description'=>'required'
            ]
        );

        if(!is_null($update))
        {
            if ($request->hasfile('photo'))
            {
                $image = $update->photo;
                File::delete(public_path('/uploads/blogs/'.$image));

                $filename=$id.".".$request->file('photo')->getClientOriginalExtension();
                $update->photo=$filename;
                $request->file('photo')->storeAs('public/uploads/blogs/',$filename);


            }
            else if ($request->hasfile('img'))
            {
                    $image = $update->photo;
                    File::delete(public_path('/uploads/blogs/'.$image));

                    $filename=$id.".".$request->file('img')->getClientOriginalExtension();
                    $update->photo=$filename;
                    $request->file('img')->storeAs('public/uploads/blogs/',$filename);
            }
            else
            {
                $update->photo = $request['img'];
            }


        $update->title=$request['title'];
        $update->description=$request['description'];

        $update->save();
        return redirect('/official/blogs/list');
    }

    }
    public function delete_blog($id)
    {
        $delete = Blog::find($id);
        if (!is_null($delete))
        {
            $delete->delete();
        }
        return redirect('/official/blogs/list');
    }
    public function addnews(Request $request)
    {
        $request->validate(
            [
                'title'=>'required',
                'photo'=>'required|mimes:png,jpg,jpeg',
                'des'=>'required',

            ]
        );
        $news=new NewsUpdate();
        $news->title=$request['title'];
        $news->contant=$request['des'];
        $news->date=Date('Y-m-d');

        if ($request->hasfile('photo'))
        {
            $image = $news->photo;
            File::delete(public_path('/uploads/blogs/'.$image));

            $filename=time().".".$request->file('photo')->getClientOriginalExtension();
            $news->photo=$filename;
            $request->file('photo')->storeAs('public/uploads/news/',$filename);

        }

        $news->save();
        return redirect('/official');
    }

    public function pending_update($id)
    {
        $update = PendingUpdate::find($id);
        $data=compact('update');
        return view('admin.check_update')->with($data);
    }
    public function confirm_update($id)
    {
        $up = PendingUpdate::find($id);
        if(session()->get('st')=="confirm")
        {
            $update = Patient::find($up->health_id);
            if(!is_null($update))
            {
            $update->name= $up->name;
            $update->dob=$up->dob;
            $update->photo= $up->photo;
            $up->status= 'confirm';
            $update->save();
            $up->save();
            // $file->move('uploads/employee_photos' , $filename);

            return redirect('/official/patients/pending_update');
            }
        }
        else if(session()->get('st')=="reject")
        {
            // $update = Patient::find($up->health_id);
            if(!is_null($up))
            {
                $up->status= 'reject';
                $up->save();

                return redirect('/official/patients/pending_update');

            }

        }
        else
        {
            return redirect('/official/patients/pending_update');
        }
    }
}
