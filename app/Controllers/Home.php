<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
      // echo "Hello World";
      return view("Home/dashboard.php");
      //return view("templates/header.php");
      //return view("Home/navigations.php");
      //return view("templates/footer.php");
    }
}
