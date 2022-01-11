<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\SendEmailUser;
use Illuminate\Http\Request;

class SendEmailController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();
        // return new SendEmailUser($request->all());
        dispatch(new SendEmailJob($data));
        return "success";
    }
}
