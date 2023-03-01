<?php
namespace Escola\Controllers;

use Controller;

class HomeController
{
    public function index()
    {
        Controller::view('home');
    }
}