<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\ContactUsRequest;
use App\Http\Controllers\Controller;
use App\Mail\ContactUs;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactUsRequest $request)
    {
        Mail::send(new ContactUs($request));
        return response()->json(['message' => 'sucessful'], 200);
    }
}
