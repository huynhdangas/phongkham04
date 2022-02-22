<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    //them doctor
    public function add_doctor_view() {

        return view('admin.add-doctor');
    }
    //inser doctor
    public function insert_doctor(Request $request) {
        $doctor = new doctor;

        $image = $request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;

        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->speciality = $request->speciality;
        $doctor->room = $request->room;
        $doctor->save();
        return redirect()->back()->with('message', 'Thêm bác sĩ thành công!!!');
    }

    
}
