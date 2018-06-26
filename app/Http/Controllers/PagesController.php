<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class PagesController extends Controller
{
    public function home()
    {
    // 	$messages =[
    // 	[
    // 		'id' =>1,
    // 		'content' => 'Primer Mensaje',
    // 		'image'=>'http://lorempixel.com/600/338?1',
    // 	],
    // 	[
    // 		'id' =>2,
    // 		'content' => 'segundo Mensaje',
    // 		'image'=>'http://lorempixel.com/600/338?2',
    // 	],
    // 	[
    // 		'id' =>3,
    // 		'content' => 'Tercer Mensaje',
    // 		'image'=>'http://lorempixel.com/600/338?3',
    // 	],
    // 	[
    // 		'id' =>4,
  		//   	'content' => 'Ultimo Mensaje',
    // 		'image'=>'http://lorempixel.com/600/338?4',
    // 	],
    // ];

    	$messages = Message::latest()->paginate(10);

    return view('welcome',['messages'=> $messages,

    ]);

	}


}
