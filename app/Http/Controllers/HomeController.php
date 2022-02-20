<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect() {
        if(Auth::id()) {
            if(Auth::user()->usertype =='0') {
                $doctor = doctor::all();

                return view('user.home', compact('doctor'));
            }elseif(Auth::user()->usertype =='1') {
                return view('admin.home');
            }else {
                return view('doctor.home');
            }
        }else{
            return redirect()->back();
        }
    }

    public function index() {
        if(Auth::id()) {
            return redirect('home');

        }else {
            $doctor = doctor::all();
    
            return view('user.home', compact('doctor'));

        }
    }

    public function appointment(Request $request) {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->doctor = $request->doctor;
        $data->phone = $request->phone;
        $data->status = 'In Progress';
        $data->message = $request->message;;

        if(Auth::id()) {
            $data->user_id = Auth::user()->id;

        }

        $data->save();

        return redirect()->back()->with('message', 'Dat lich thanh cong. Bac si se som lien he voi ban.');

    }

    public function myappointment() {
        if(Auth::id()) {
            $user_id = Auth::user()->id;
            $appoint = appointment::where('user_id', $user_id)->get();
            return view('user.my-appointment', compact('appoint'));
        }else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id) {
        $data = appointment::find($id);
        $data->delete();

        return redirect()->back()->with('message', 'Huy lich thanh cong!!!');
    }
}
