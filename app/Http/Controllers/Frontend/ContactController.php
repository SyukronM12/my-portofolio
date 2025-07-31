<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function send(ContactRequest $request)
    {
        $data = $request->validated();

        Mail::raw($data['message'], function ($msg) use ($data) {
            $msg->to('admin@myportfolio.com')
                ->subject('Pesan dari: ' . $data['name'])
                ->replyTo($data['email']);
        });

        return redirect()->route('contact.index')
            ->with('success', 'Pesan berhasil dikirim!');
    }
}
