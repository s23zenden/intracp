<?php namespace App\Http\Controllers\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller {

	//index
    public function index(){
        return view('pages.home');
    }

    //services
    public function services(){
        return view('pages.services');
    }

    //solutions
    public function solutions(){
        return view('pages.solutions');
    }

    //markets
    public function markets(){
        return view('pages.markets');
    }

    //follow us
    public function followus(){
        return view('pages.followus');
    }

    //products
    public function products(){
        return view('pages.products');
    }
}
