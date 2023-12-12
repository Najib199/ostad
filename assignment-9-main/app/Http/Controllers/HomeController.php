<?php

namespace App\Http\Controllers;

class HomeController extends Controller {
    //home function for home route
    public function home() {
        return view('app');
    }

    //about function for about route
    public function about() {
        return view('pages.about');
    }

    //project function for projects route
    public function projects() {
        return view('pages.projects');
    }

    //contact function for contact route
    public function contact() {
        return view('pages.contact');
    }

}
