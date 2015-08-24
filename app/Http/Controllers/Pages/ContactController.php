<?php namespace App\Http\Controllers\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ContactController extends Controller {

	//index
    public function index(){
        return view('pages.contact');
    }
    //handle contact form
    public function getContactUsForm(){
        //get all the form data
        $data = Input::all();

        //validation rules
        $rules = array(
            'name' => 'required|alpha',
            'email' => 'required|email',
            'subject' => 'required|aplha',
            'message' => 'required|min:25'
        );

        //validate data
        $validator = Validator::make($data, $rules);

        //if everything is correct then run passes
        if($validator->passes()){
            //send email using lavarel send function
            Mail::send('emails.email', $data, function($message) use ($data){
               //email from field
               $message->from($data['email'], $data['name']);
               //email to fields
               $message->to('info@intracp.com','Info')->cc('s23zenden@gmail.com')->subject($data['subject']);
            });

            return View::make('pages.contact');
        }else{
            //return contact form with errors
            return Redirect::to('pages.contact')->withErrors($validator);
        }
    }
}
