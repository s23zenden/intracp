<?php namespace App\Http\Controllers\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AboutController extends Controller {

	//index method
    public function index(){
        return view('pages.about');
    }

}
