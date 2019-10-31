<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	 
	 
	     // public function __construct()
    // {
        // $this->middleware('age');


    // }
    public function __invoke(Request $request)
    {
		$uri = $request->all();

		return $uri;
    }
}
