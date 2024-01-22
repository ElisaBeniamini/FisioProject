<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage()
    {
        return view('homepage');
    }
    public function patologie()
    {
        return view('patologie');
    }
    public function fisioterapia()
    {
        return view('fisioterapia');
    }
    public function domicilio()
    {
        return view('domicilio');
    }
    public function contatti()
    {
        return view('contatti');
    }
}
