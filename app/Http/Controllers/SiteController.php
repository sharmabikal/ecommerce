<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Contact;
use App\Models\User;


class SiteController extends Controller
{
    function index()
    {
    	return view('front.index');
    }


    function contact()
    {
    	return view('contact');
    }

	function postContact( Request $request ){

		Contact::create( $request->all() );
		return redirect()->back()->with('message','Form successfully submitted');
	}

    function register()
    {
       return view('register');

    }
  
  function postRegister( Request $request )
  {
    User::create( $request->all());
    return redirect()->back()->with('message','succesfully registered');
  }

 
}
