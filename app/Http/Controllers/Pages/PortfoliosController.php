<?php namespace App\Http\Controllers\Pages;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PortfoliosController extends Controller {

	//index function
    public function index(){
        return view('pages.portfolios');
    }

}
