<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\PendingUpdate;
use Illuminate\Support\Facades\Mail;
use App\Models\Blog;
use App\Models\BookApp;
use App\Models\Review;
use App\Models\Slot;
use Illuminate\Http\Request;
use DateTime;
use Nette\Utils\Random;

class PatientCon extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function booking(Request $request)
     {
        // if($request['changee']=="")
        // {
        //     echo $request['changee'];
        //     return redirect('/booking');
        // }
        if(session()->get('h_id')=="")
        {
            return redirect('/');
        }
        $request->validate(
                [
                    'name'=>'required',
                    'no'=>'required',
                    'email'=>'required|email',
                    'changee'=>'required|min:2',
                    'dt'=>'required|date'

                ]
             );
             $bool=Slot::where([['date','=',$request['dt']]])->first();
                if(!$bool)
                {
                        $s= new Slot();
                        $s->date=$request['dt'];
                        $s->save();
                }

            //  $s=Slot::where([['date','=',$request['dt']]])->first();
            //  if($s)
            //  {
                $slt=Slot::where([['date','=',$request['dt']]])->get();
                foreach($slt as $s)
                {
                    $request['s1']=$s->s1;
                    $request['s2']=$s->s2;
                }
            //  }
            //  else
            //  {
            //     echo 'not available';
            //  }

        return view('fe.bkslot')->with('request', $request);

    }
    public function chkslot(Request $request)
    {
          //$slot=Slot::where([['date','=',$request['dt']]])->first();
          if(session()->get('h_id')=="")
          {
              return redirect('/');
          }

          $ap =BookApp::where([['health_id','=', session()->get('h_id')],['status','=','']])->first();
          if (!$ap)
          {

          $app = new BookApp();
          $app->name=$request['name'];
          $app->health_id=session()->get('h_id');
          $app->no=$request['no'];
          $app->email=$request['email'];
          $app->disease=$request['disease'];
          $app->app_date=$request['dt'];

          $bool=Slot::where([['date','=',$request['dt']]])->first();
          if(!$bool)
          {
                $s= new Slot();
                $s->date=$request['dt'];
                $s->save();
          }
              $slot=Slot::where([['date','=',$request['dt']]])->get();
            foreach($slot as $s)
            {
              if($request['time']=="1")
              {
                  if($s->s1>0)
                  {
                        $s->s1-=1;
                        $data=['name'=>$request['name'],'no'=>$request['no'],'time'=>"8:00 am to 1:00 pm",'plan'=>$request['disease'],'date'=>$request['dt']];
                        $user['to']=$request['email'];
                        Mail::send('mail',$data,function($msg) use ($user){
                            $msg->to($user['to']);
                            $msg->subject('Appointment');
                        });
                        $app->time="8:00 am to 1:00 pm";
                        $app->save();
                        $s->save();
                        session()->flash('error','successfully Booked');
                        return redirect('/booking');
                  }
                  else
                  {
                      session()->flash('error','sorry slot not available !');
                      return redirect('/booking');
                  }


              }
              elseif($request['time']=="2")
              {
                  if($s->s2>0)
                  {
                        $s->s2-=1;
                        $data=['name'=>$request['name'],'no'=>$request['no'],'time'=>"3:00 pm to 8:00 pm",'plan'=>$request['changee'],'date'=>$request['dt']];
                        $user['to']=$request['email'];
                        Mail::send('mail',$data,function($msg) use ($user){
                            $msg->to($user['to']);
                            $msg->subject('Appointment');
                        });
                        $app->time="3:00 pm to 8:00 pm";
                        $app->save();
                        $s->save();

                        session()->flash('error','successfully Booked');
                        return redirect('/booking');
                  }
                  else
                  {
                      session()->flash('error','Sorry slot not available !');
                      return redirect('/booking');
                  }

              }
              else
              {
                  session()->flash('error','slot not available');
                  return redirect('/booking');
              }
            }

      }
      else{
        session()->flash('error','already booked');
        return redirect('/booking');
      }
    }
    public function index()
    {
        // echo"higuygytfu";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function cal_age($dt)
    {
        $dob = new DateTime($dt);
        $today   = new DateTime('today');
        return $dob->diff($today)->y;
    }
    public function cal_year($dt)
    {
        $dt= new DateTime($dt);
        return $dt->format("Y");
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        if(session()->get('h_id')=="")
        {
            return redirect('/');
        }
        $pu= PendingUpdate::where('health_id',session()->get('h_id'))->get();
        echo "<pre>";
        // print_r($pu);
        echo"</pre>";
        // echo session()->get('h_id');
        $data=compact('pu');
        return view('fe.profile')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(session()->get('h_id')=="")
        {
            return redirect('/');
        }
        $pu=new PendingUpdate();
        $pu->field="all";
        $pu->health_id=session()->get('h_id');


            $request->validate([
                'fname'=>'required',
                'mname'=>'required',
                'lname'=>'required',
                'photo'=>'required',
                'proof'=>'required',
                'dob'=>'required|date']);

            $pu->name=$request['fname'];
            $pu->mname=$request['mname'];
            $pu->lname=$request['lname'];
            $pu->proof=$request['proof'];
            $pu->photo=$request['photo'];
            $pu->dob=$request['dob'];
            $pu->save();

        return redirect('/');

    }
    public function pass()
    {
        if(session()->get('h_id')=="")
        {
            return redirect('/');
        }
        return view('fe.pass');
    }
    public function password(Request $request)
    {
        if(session()->get('h_id')=="")
        {
            return redirect('/');
        }
        $request->validate(
            [
                'password'=>'required',
                'pass'=>'required|same:password'
            ]
        );
        $p=Patient::find(session()->get('h_id'));
        // print_r($pat);
        // die;

            if($p->password==$request['opass'])
            {
                $p->password=$request['pass'];
                $p->save();
                session()->flash('error', 'changed successfully');
                return redirect('/change_pass');

            }
            else
            {
                session()->flash('error', 'old password is wrong');
                return redirect('/change_pass');
            }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function forget()
    {
        if(session()->get('h_id')=="")
        {
            return redirect('/');
        }
        $pass=rand('11111111','999999999999');
        $pat=Patient::find(session()->get('h_id'));
        $data=['name'=>"your password is ",'data'=>$pass];
        // foreach($pat as $p)
        // {
            $user['to']=$pat->email;
        // }
        Mail::send('fe.forgetpassmail',$data,function($msg) use ($user){
            $msg->to($user['to']);
            $msg->subject('Password');
        });
        echo"successful";
        return redirect('/change_pass');
    }
}
