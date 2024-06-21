<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BookApp;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\PendingUpdate;
use App\Models\Report;
use App\Models\Blog;
use App\Models\Data;
use App\Models\Hospital;
use App\Models\LogData;
use App\Models\NewsUpdate;
use App\Models\User;
use DateTime;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


// use PDF;

class AdminCon extends Controller
{

    public function login(Request $request)
    {
        $request->validate(
            ['email'=>'required|email'],
            ['pass'=>'required|min:5']
        );


        if( User::where([['email','=',$request['email']],['password','=',$request['pass']]])->first())
        {
            $admin=User::where([['email','=',$request['email']],['password','=',$request['pass']]])->get();
            foreach($admin as $a)
            {
                // $name='bjv';
                session()->put('id',$a->id);
                session()->put('role','Visionary');
                session()->put('name',$a->name);
                session()->put('url',$a->photo);

            }
        }

        else if(Doctor::where([['email','=',$request['email']],['password','=',$request['pass']]])->first())
        {

            $doctor=Doctor::where([['email','=',$request['email']],['password','=',$request['pass']]])->get();
            // print_r($doctor);
            foreach($doctor as $d)
            {
                if(!LogData::where([['doctor_id','=',$d->doctor_id]])->first())
                {
                    $ld=new LogData();
                    $ld->doctor_id=$d->doctor_id;
                    $ld->status="Online";
                    $ld->save();
                    echo "h1";
                }
                else{
                    $ld=LogData::where([['doctor_id','=',$d->doctor_id]])->get();
                    $ld->toQuery()->update([
                        'status' => "Online"
                    ]);
                    // $ld->save();

                }
                session()->put('id',$d->doctor_id);
                // $name='bjv';
                session()->put('role',$d->department);
                session()->put('name',$d->name);
                session()->put('url',$d->photo);
                echo "h2";


            }

        }

        else{
            session()->flash('error','Incorrect Id or Password');
        }

        $news=NewsUpdate::where([['date','=',Date('Y-m-d')]])->first();
        if(!$news)
        {
            $n= new NewsUpdate();
            $n->date=Date('Y-m-d');
            $n->save();
        }

        return redirect('/official');
    }

    public function index()
    {
        // $users = User::all();

        // foreach ($users as $user) {
        //     if (Auth::check()) {
        //         // User is logged in

        //         echo $user->doctor_id."  Active<br>";
        //     } else {
        //         // User is not logged in
        //         echo $user->doctor_id."  Inactive<br>";
        //     }

        //     // $user->save();
        // }
        // die;



        if(session()->get('id')!="")
        {
            // $now =new DateTime('today');
            // echo $now->format('Y-m-d');die;
            $news=NewsUpdate::where([['date','=',date('Y-m-d')],['contant','<>','']])->first();
            // $news=NewsUpdate::where('date','=',date('Y-m-d'))->where('contant','<>','')->first();
            if($news!="")
            {
                session()->put('news','true');
                $news=NewsUpdate::where([['date','=',date('Y-m-d')],['contant','<>','']])->get();
            }
            else{
                $news=new NewsUpdate();
            }


            // $doc=Doctor::all();
            // foreach($doc as $d)
            // {
            //     $online[]=$d->email;

            // }

            $online=DB::table('log_data')->leftJoin('doctors','doctors.doctor_id','=','log_data.doctor_id')->get(['doctors.doctor_id', 'doctors.photo', 'doctors.name', 'doctors.email', 'doctors.department', 'log_data.status']);
            // echo "<pre>";
            // print_r($dd);
            //  die;


            $doctor=count(Doctor::all());
            $patient=count(Patient::all());
            $data=compact('news','doctor','patient','online');
            // $hospital=compact

            return view('admin.index')->with($data);
        }
        else
        {
            return view('admin.login');
        }
    }

    public function logout(){
        if(LogData::where([['doctor_id', '=' , session()->get('id')]])->first()){
        $ld=LogData::where([['doctor_id','=', session()->get('id')]])->get();
        $ld->toQuery()->update([
            'status' => "Offline",
        ]);//update and save any data

        // $ld->status="Offline";
        // $ld->save();
        }
        session()->forget('id');
        session()->forget('name');
        session()->forget('role');
        session()->forget('url');

        return redirect('/official');
    }


    public function dlist()
    {
        $doc = Doctor::all();
        $data=compact('doc');
        return view('admin.doctorslist')->with($data);
    }

    public function dverify()
    {
        $title="Doctor";
        $url=url('/official/doctors/verify');
        $val="Get OTP";
        $data= compact('url','val','title');
        return view('admin.verify')->with($data);
    }
    public function dotp(Request $request)
    {
        $request->validate(
            ['email'=>'required|email']
        );
        $otp=rand(1111,9999);
        session()->forget('otp');
        // session(['otp' => $otp]);
        //echo $otp;
        session()->put('otp',$otp);
        session()->flash('showotp','true');
        $data=['otp'=>$otp];

        $user['to']=$request['email'];
        if(Mail::send('admin.otp',$data,function($msg) use ($user){
            $msg->to($user['to']);
            $msg->subject('OTP');
        }))
        {
            session()->flash('error','invalid email');
            redirect('/official/doctors/verify');
        }
        $title="Doctor";
        $url=url('/official/doctors/con_otp');
        $val="Submit";
        session()->flash('email',$request['email']);
        $data=compact('url','val','title');
        return view('admin.verify')->with($data);
    }
    public function dcon_otp(Request $request){
        session()->flash('email',$request['email']);
        if(session()->get('otp')==$request['otp'])
        {
            session()->flash('go_add','true');
            return redirect('official/doctors/add');
        }
        else
        {
            session()->flash('error','invalid otp');
            session()->flash('showotp','true');
            $title="Doctor";
            $url=url('/official/doctors/con_otp');
            $val="Submit";
            $data=compact('url','val','title');
            return view('admin.verify')->with($data);
        }
    }

    public function add_doc()
    {

        if(session()->has('go_add'))
        {
            $d = new Doctor();
            $url=url('/official/doctors/add');
            $title="Add Doctor";
            $data = compact('d','url','title');
            return view('admin.adddoc')->with($data);
        }
        else
        {
            return redirect('/official/doctors/verify');
        }
    }
    public function verify()
    {
        $title="Patient";
        $url=url('/official/patients/verify');
        $val="Get OTP";
        $data= compact('url','val','title');
        return view('admin.verify')->with($data);
    }
    public function otp(Request $request)
    {
        $request->validate(
            ['email'=>'required|email']
        );
        $otp=rand(1111,9999);
        session()->forget('otp');
        // session(['otp' => $otp]);
        //echo $otp;
        session()->put('otp',$otp);
        session()->flash('showotp','true');
        $data=['otp'=>$otp];

        $user['to']=$request['email'];
        if(Mail::send('admin.otp',$data,function($msg) use ($user){
            $msg->to($user['to']);
            $msg->subject('OTP');
        }))
        {
            session()->flash('error','invalid email');
            redirect('/official/patient/verify');
        }
        $title="Patient";
        $url=url('/official/patients/con_otp');
        $val="Submit";
        session()->flash('email',$request['email']);
        $data=compact('url','val','title');
        return view('admin.verify')->with($data);
    }
    public function con_otp(Request $request){
        session()->flash('email',$request['email']);
        if(session()->get('otp')==$request['otp'])
        {
            session()->flash('go_add','true');
            return redirect('official/patients/add');
        }
        else
        {
            session()->flash('error','invalid otp');
            session()->flash('showotp','true');
            $title="Patient";
            $url=url('/official/patients/con_otp');
            $val="Submit";
            $data=compact('url','val','title');
            return view('admin.verify')->with($data);
        }
    }

    public function update_doc($id)
    {
        $d = Doctor::find($id);
        if (!is_null($d))
        {

            $url=url('/official/doctors/update'). "/". $id;
            $title="Update Doctors";
            $data=compact('url','title','d');
            return view('admin.adddoc')->with($data);
        }
        else
        {
            session()->flash('error', 'Doctor Not Found');
            return redirect('/official/doctors/list');
        }
    }

    public function add_pat()
    {
        if(session()->has('go_add'))
        {
            $p = new Patient();
            $url=url('/official/patients/add');
            $title="Add Patient";
            $data=compact('p','url','title');
            return view('admin.addpat')->with($data);
        }
        else
        {
            return redirect('/official/patients/verify');

        }
    }


    public function update_patient($id)
    {
        $p = Patient::find($id);
        if (!is_null($p))
        {

            $url=url('/official/patients/update'). "/". $id;
            $title="Update Patients";
            $data=compact('url','title','p');
            return view('admin.addpat')->with($data);
        }
        else
        {
            session()->flash('error', 'Patient Not Found');
            return redirect('/official/patients/list');
        }

    }

    // public function addpatient()
    // {
    //     // return view('admin.addpat');
    // }
    public function pending_update()
    {
        $pending_update = PendingUpdate::where([['status','=','pending']])->get();
        $data=compact('pending_update');
        return view('admin.pending_update')->with($data);
    }
    public function all_update()
    {
        $pending_update = PendingUpdate::all();
        $data=compact('pending_update');
        return view('admin.pending_update')->with($data);
    }
    public function plist()
    {
        $pat = Patient::all();
        $data=compact('pat');
        return view('admin.patientslist')->with($data);
    }
    public function app()
    {
        $app = BookApp::where([['status','=','pending']])->get();
        $data=compact('app');
        return view('admin.appointments')->with($data);
    }
    public function approve($id)
    {
        $app = BookApp::find($id);
        $app->status="Approved";
        $app->save();
        return $this->app();
    }
    public function applist()
    {
        $app = BookApp::where([['status','<>','pending']])->get();
        $data=compact('app');
        return view('admin.appointmentslist')->with($data);
    }
    public function report()
    {
        $report = Report::all();
        $data=compact('report');
        return view('admin.report')->with($data);
    }
    public function addreport()
    {
        return view('admin.addreport');
    }

    public function charts()
    {
        return view('admin.charts');
    }

    public function adddata()
    {
        return view('admin.adddata');
    }

    public function viewdataall()
    {
        $da = Data::select('health_id')->distinct()->get();
        $data=compact('da');
        return view('admin.viewdata')->with($data);
    }
    public function chkdata(Request $request)
    {
        $request->validate(
            ['query'=>'required']
        );
        $q=$request['query'];
        if($q=="")
        {
            return redirect('/official/data/view');
        }
        else if(!Data::where([['health_id','LIKE',"%$q%"]])->first())
        {
            session()->flash('error','Data Not Found');
            return redirect('/official/data/view');
        }
        $da = Data::where([['health_id','LIKE',"%$q%"]])->select('health_id')->distinct()->get();
        $data=compact('da');
        // return view('admin.viewdata')->with($data);
        session()->flash('da',Data::where([['health_id','LIKE',"%$q%"]])->select('health_id')->distinct()->get());
        return redirect('/official/data/view');
    }
    public function viewdata($id)
    {
        $data = Data::where([['health_id','=',$id]])->get();
        $data= compact('data');
        return view('admin.viewdataphoto')->with($data);

    }

    public function hospital()
    {
        $hospital = Hospital::find(1);
        $hospital->doctors=count(Doctor::all());
        $hospital->save();
        $hospital = Hospital::all();
        $data= compact('hospital');
        return view('admin.hospital')->with($data);
    }
    public function addhospital()
    {
        $hospital = new Hospital();
        $title="Add Hospital";
        $url=url('official/hospital/add');
        $data= compact('hospital','title','url');
        return view('admin.addhospital')->with($data);
    }
    public function up_hospital($id)
    {
        $hospital = Hospital::find($id);
        $title="Update Hospital Data";
        $url=url('official/hospital/update')."/".$id;
        $data= compact('hospital','title','url');
        return view('admin.addhospital')->with($data);
    }
    public function blist()
    {
        $blog = Blog::all();
        $data=compact('blog');
        return view('admin.blogslist')->with($data);
    }
    public function addblog()
    {
        $b = new Blog();
        $url=url('official/blogs/add');
        $title="Add Blog";
        $data= compact('b','url','title');
        return view('admin.addblog')->with($data);
    }
    public function up_blog($id)
    {
        $b= Blog::find($id);
        $title="Update Blog";
        $url=url('official/blogs/update')."/".$id;
        $data= compact('b','title','url');
        return view('admin.addblog')->with($data);
    }

    public function about()
    {
        return view('admin.about');
    }
    public function profile()
    {
        if(session()->get('role')=="Visionary")
        {
            $user=User::find(session()->get('id'));
        }
        else{
            $user=Doctor::find(session()->get('id'));
        }
        $data = compact('user');
        return view('admin.profile')->with($data);
    }

    public function _forget()
    {
        return view('admin.foget');
    }

    public function forget(Request $request)
    {

        $pass=rand('11111111','999999999999');
        if(!is_null(Doctor::where([['email','=',$request['email']]])->first()))
        {
            // $pat=Doctor::find(session()->get('id'));
            $user['to']=$request['email'];
        }
        else  if(!is_null(User::where([['email','=',$request['email']]])->get()))
        {
            // $pat=User::find(session()->get('id'));
            $user['to']=$request['email'];

        }
        else
        {
            session()->flash('error', 'email not found');
            return redirect('/official');

        }
        $data=['name'=>"your password is ",'data'=>$pass];



        Mail::send('fe.forgetpassmail',$data,function($msg) use ($user){
            $msg->to($user['to']);
            $msg->subject('Password');
        });
        echo"successful";
        return redirect('/official');
    }



    // echo $request->file('photo')->storeAs('public/uploads/data/'.$request['h_id'],$filename);

}
