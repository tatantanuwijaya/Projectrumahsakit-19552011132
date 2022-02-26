<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;

use App\Models\Appointment;

use App\Models\Artikel;

use App\Models\Bill;

use App\Exports\AppointmentExport;

use MaatWebsite\Excel\Facades\Excel;

use App\Notifications\SendEmailNotification;

use Notification;

class AdminController extends Controller
{
    public function tambahview()
    {
        return view('admin.tambah_dokter');
    }

    public function upload(Request $request)
    {
        $doctor=new doctor;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('doctorimage',$imagename);

        $doctor->image=$imagename;

        $doctor->name=$request->name;

        $doctor->phone=$request->number;

        $doctor->room=$request->room;

        $doctor->speciality=$request->speciality;

        $doctor->price=$request->price;

        $doctor->save();

        return redirect()->back()->with('message','Data dokter baru berhasil ditambahkan');
    }

    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='Disetujui';
        $data->save();
        return redirect()->back();
    }
    public function canceled($id)
    {
        $data=appointment::find($id);
        $data->status='Ditolak';
        $data->save();
        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = doctor::all();
        return view('admin.showdoctor', compact('data'));
    }

    public function deletedoctor($id)
    {
        $data = doctor::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function updatedoctor($id)
    {
        $data = doctor::find($id);

        return view('admin.update_doctor', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);

        $doctor->name=$request->name;

        $doctor->phone=$request->number;
        
        $doctor->room=$request->room;

        $doctor->speciality=$request->speciality;

        $doctor->price=$request->price;
        
        $image=$request->file;
        
        if($image)
        
        {
        
            $imagename=time().'.'.$image->getClientOriginalExtension();
        
            $request->file->move('doctorimage',$imagename);
        
            $doctor->image=$imagename;
        }

        $doctor->save();
        return redirect()->back()->with('message', 'Data dokter berhasil diperbarui');
    }

    public function addartikelview()
    {
        return view('admin.add_artikel');
    }

    public function uploadartikel(Request $request)
    {
        $artikel = new artikel;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('artikelimage', $imagename);

        $artikel->image=$imagename;

        $artikel->title=$request->title;

        $artikel->writer=$request->writer;

        $artikel->date=$request->date;

        $artikel->description=$request->description;

        $artikel->save();

        return redirect()->back();
    }

    public function artikelshow()
    {
        $data=artikel::all();

        return view('admin.artikelshow', compact('data'));
    }

    public function artikeldelete($id)
    {
        $data=artikel::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updateartikel($id)
    {
        $data=artikel::find($id);
        return view('admin.update_artikel', compact('data'));
    }

    public function editartikel(Request $request, $id)
    {
        $artikel= artikel::find($id);

        $artikel->title=$request->title;
        
        $artikel->writer=$request->writer;

        $artikel->description=$request->description;

        $artikel->title=$request->title;

        $image=$request->file;
        
        if($image)
        {
            $imagename=time().'.'.$image->getClientOriginalExtension();

            $request->file->move('artikelimage', $imagename);

            $artikel->image=$imagename;
        }

        

        $artikel->save();

        return redirect()->back();

    }

    // public function appointmentexport(){
    //     $data=appointment::all();
    //     return Excel::download(new AppointmentExport, 'daftar perjanjian.xlsx');
    // }

    public function emailview($id)
    {
        $data=appointment::find($id);
        return view('admin.email_view', compact('data'));
    }
    public function sendemail(Request $request,$id)
    {
        $data=appointment::find($id);

        $details=[
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'closing' => $request->closing,
        ];

        Notification::send($data, new SendEmailNotification($details));
        return redirect()->back()->with('message','Email berhasil dikirim');
    }

    public function bill()
    {
        $appoint=appointment::all();
        $doctor=doctor::all();
        return view('admin.add_bill_view', compact('appoint','doctor'));
        
    }

    public function uploadbill(Request $request)
    {
        $bill=new bill;

        $bill->name=$request->name;
        $bill->doctor=$request->doctor;
        $bill->date=$request->date;
        $bill->time=$request->time;
        $bill->bill=$request->bill;
        $bill->lastdate=$request->lastdate;
        $bill->status=$request->status;
        $bill->save();
        return redirect()->back()->with('message','Tambah tagihan berhasil ditambahkan, tagihan akan ditampilkan kepada semua pengguna');
    }

    public function billshow()
    {
        $data=bill::all();
        return view('admin.showbill',compact('data'));
    }
    public function deletebill($id)
    {
        $data=bill::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updatebill($id)
    {
        $data = bill::find($id);

        return view('admin.update_bill', compact('data'));
    }
    public function editbill(Request $request, $id)
    {
        $bill = bill::find($id);

        $bill->name=$request->name;
        $bill->doctor=$request->doctor;
        $bill->date=$request->date;
        $bill->time=$request->time;
        $bill->bill=$request->bill;
        $bill->lastdate=$request->lastdate;
        $bill->status=$request->status;
        $bill->save();
        return redirect()->back()->with('message', 'Data tagihan telah berhasil diperbarui');
    }
}
