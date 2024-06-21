<?php

namespace App\Http\Controllers\fe;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Review;
// use App\Models\Slot;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Support\Facades\Mail;


class HomeCon extends Controller
{
    public function sndmail()
    {
        // $data=['name'=>"hies grdt",'data'=>"vhfd hdyc hfyfhg"];
        // $user['to']='hbt9712@gmail.com';
        // Mail::send('mail',$data,function($msg) use ($user){
        //     $msg->to($user['to']);
        //     $msg->subject('hii how are you');
        // });
        // echo"successful";
        // return redirect('/card');
    }
    public function index()
    {
        return view('fe.index');
    }
    public function faq()
    {
        return view('fe.faq');
    }

    public function about()
    {
        $blg=Blog::all();
        $data=compact('blg');
        return view('fe.about')->with($data);
    }
    public function blog($id)
    {
        if(session()->get('h_id')!="")
        {
            $b=Blog::find($id);
            $data=compact('b');
            return view('fe.blog')->with($data);
        }
        else
        {
            return redirect('/login');
        }


    }

    public function services()
    {
        $r=Review::all();
        $data=compact('r');
        return view('fe.services')->with($data);
    }

    public function service($id)
    {
        $data=compact('id');
        return view('fe.service')->with($data);
    }

    public function doctors()
    {
        $doc=Doctor::all();
        $data=compact('doc');
        return view('fe.doctors')->with($data);
    }

    public function booking()
    {
        if(session()->get('h_id')!='')
        {
            return view('fe.booking');
        }
        else
        {
            return redirect('/login');
        }

    }


    public function help()
    {
        if(session()->get('h_id')!='')
        {
            return view('fe.help');
        }
        else
        {
            return redirect('/login');
        }
    }

    public function login()
    {
        if(session()->get('h_id')!="")
        {
            return redirect('/');
        }
        return view('fe.login');
    }


    public function logout()
    {
        session()->forget('h_id');
        return redirect('/');
    }

    public function check(Request $request)
    {
        $request->validate(
            [
                'h_id'=>'required',
                'password'=>'required'  //'required|min:10'
            ]
        );
        $id=$request['h_id'];
        $p=Patient::find($id);

        if(is_null($p))
        {
            //echo "hello";
            return redirect('/login');
        }

        if( $p->password==$request['password'])
        {

            session(['h_id' => $id,'url' => $p->photo,'name' =>$p->name." ".$p->l_name]);
            echo session()->get('h_id');
            return redirect('/booking');
        }
        else
        {
            return redirect('/login');
        }
    }



    public function card()
    {
        if(session()->get('h_id')=="")
        {
            return redirect('/');
        }
        $p=Patient::find(session()->get('h_id'));
        if(!is_null($p))
        {
            $data=compact('p');
            return view('fe.h_card')->with($data);

        }
        return redirect('/');
    }
    public function print()
    {
        // $hi="uyfy fyg dgft";
        // $data=compact('hi');
        // // $data=array('hi'=>"yrytdtret");
        // $pdf = PDF::loadView('fe.card',$data);
        // return $pdf->download('salfydhiy.pdf');
        // $hi="tdytdydtyd";
        // $by="gtfyt";
        // $data=compact('hi','by');

        // include public_path().'\fe\fpdf\fpdf.php';

        // $pdf =new FPDF();
        // $pdf->AddPage();
        // $pdf->SetFont('Arial','B','16');
        // $pdf->Cell(40,10,"hii hello");
        // $pdf->Output();
        //return view('fe.h_card');

        // require __DIR__ ."/vendor/autoload.php";
        //$dompdf= new dodompdf;
    }
}




