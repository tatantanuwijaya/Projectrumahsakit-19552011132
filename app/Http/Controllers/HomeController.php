<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Doctor; 

use App\Models\Bill; 

use App\Models\Appointment;

use App\Models\Artikel;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=="0")
            {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            }
            else
            {
                return view('admin.home');
            }
        }else{
            return redirect()->back();
        }
    }
    public function index(){
        if(Auth::id()){
            return redirect('home');
        }
        else
        {
            $doctor = doctor::all();
            return view('user.home', compact('doctor'));
        }
    }

    public function appointment(Request $request)
    {
        $data = new appointment;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->phone=$request->number;

        $data->date=$request->date;

        $data->message=$request->message;

        $data->doctor=$request->doctor;

        $data->status='Sedang dalam proses';

        if(Auth::id())
        {
            $data->user_id=Auth::user()->id;
        }

        $data->save();
        
        return redirect()->back()->with('message', 'Permintaan berhasil, kami akan menghubungi anda segera.');
    }

    public function myappointment()
    {
        if(Auth::id())
        {
            $userid=Auth::user()->id;

            $appoint=appointment::where('user_id',$userid)->get();
            
            return view('user.my_appointment', compact('appoint'));
        }
        else
        {
            return redirect()->back();
        }
    }
    public function cancel_appointment($id)
    {
        $data=appointment::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function articlepage()
    {
        $data=artikel::all();
        return view('user.artikellist',compact('data'));
    }

    public function doctorpage()
    {
        $doctor = doctor::all();
        return view('user.doctorlist', compact('doctor'));
    }
    public function aboutpage()
    {
        return view('user.about');
    }

    public function mybill()
    {
        $bill=bill::all();
        return view('user.my_bill', compact('bill'));
    }
}
