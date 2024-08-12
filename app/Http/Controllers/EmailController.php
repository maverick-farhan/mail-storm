<?php
//Send Email Controller to send emails to the customers
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\stormail;
class EmailController extends Controller
{
    public function sendMail(){
        $toEmail = 'mdfarhanofficial@protonmail.com';
        $message = "Hello, Welcome to Mail Storm";
        $subject = "We can build your Dynamic Newsletter in minutes";
        Mail::to($toEmail)->send(new stormail($message,$subject));
    }    

}
