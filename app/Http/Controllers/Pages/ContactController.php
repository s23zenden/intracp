<?php namespace App\Http\Controllers\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactController extends Controller {

	//index
    public function index(){
        return view('pages.contact');
    }

}
