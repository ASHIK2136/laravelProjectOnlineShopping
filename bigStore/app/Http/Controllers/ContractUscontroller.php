<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Mail;
use Message;

class ContractUscontroller extends Controller {

    public function getContactInfo() {
        return view('frontEnd.contact.contactUs');
    }

    public function postContactInfo(Request $request) {
        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodymessage' => $request->message
        );
        Mail::send('frontEnd.contact.emails', $data, function($message) use($data) {

            $message->from($data['email']);
            $message->to('ashiksur@gmail.com');
            $message->subject($data['subject']);
        });
    }

}
