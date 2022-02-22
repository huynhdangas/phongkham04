<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Appointment;


class DoctorController extends Controller
{
    public function show_appointment() {
        $data_appoint = appointment::all();
        return view('doctor.show-appointment', compact('data_appoint'));
    }

    public function approved($id) {
        $data = appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id) {
        $data = appointment::find($id);
        $data->status = 'Canceled';
        $data->save();
        return redirect()->back();
    }
}
