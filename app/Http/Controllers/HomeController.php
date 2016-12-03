<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index(){
        $page = ['page' => 'home'];
        return view('pages.home', $page);
    }
}