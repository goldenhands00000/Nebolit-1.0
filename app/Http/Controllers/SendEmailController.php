<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function send(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'surname' => 'required',
            'patronymic' => 'required',
            'select' => 'required',
            'phone' => 'required',
            'date' => 'required',
            ]);
        $data = array(
            'name'      =>  $request->name,
            'surname'      =>  $request->surname,
            'patronymic'      =>  $request->patronymic,
            'select'      =>  $request->select,
            'phone'      =>  $request->phone,
            'date'   =>   $request->date
        );

        Mail::to('artemcernov79@gmail.com')->send(new SendMail($data));
        return back()->with('success', 'Ваша заявка принята на рассмотрение');

    }





}
