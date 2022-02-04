<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(Request $request){

    $arrtibutes=request()->validate(['body'=>'required|max:255']);
    
    Tweet::create([
        'user_id'=> auth()->id(),
        'body'=>$arrtibutes['body'],

    ]);
    return redirect('/home'); 
}
 
}
