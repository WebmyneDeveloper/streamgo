<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;


use App\Reportbuilder\Reportbuilder;



class MakeController extends HomeController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
		parent::__construct();
        $this->middleware('auth.control_panel');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
       
	  

     $parameters = [
                'type' => 'all'
                
              ];
     
	 $ordernew = new Reportbuilder('users');
    $order = $ordernew->build('users')->get($parameters);
         dd($order);  
	 
	  
    }

   

}
