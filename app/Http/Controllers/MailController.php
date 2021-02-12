<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail\TestMail;
use Mail;
class MailController extends Controller
{
    public function sendmail(){
    	$detail=[
    		'title'=>'Mail from Amazon',
    		'body'=>'this is notification for your product you has been bought',
    	];
    	Mail::to("0306171389@caothang.edu.vn")->send(new TestMail($detail));
    	return "Email sent";
    }
}
