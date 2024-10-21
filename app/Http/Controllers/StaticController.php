<?php

namespace App\Http\Controllers;

use App\Mail\Appointment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StaticController extends Controller
{
    public function home2()
    {
        return view('web-site.layout.home2');
    }
    
    public function singleNews()
    {
        return view('web-site.layout.single-news');
    }

    public function contact()
    {
        return view('web-site.layout.contact');
    }
    public function SendAppointment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^\+?\d{10,15}$/',
            'email' => 'required|email',
            'service' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'service' => $request->input('service'),
            'phone' => $request->input('phone'),
        ];

        Mail::send(new Appointment($data));
        return redirect()->route('home')->with('success', 'Thank you, we will process your submission shortly');
    }
}
