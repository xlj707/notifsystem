<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(){
        $users = User::where('id', '!=', auth()->id())->get(); 
        return view('messages.create', compact('users'));
    }

    public function store( Request $request){
        

        $data = $request->validate([
            'subject'       =>  'required', 
            'body'          =>  'required', 
            'to_user_id'    =>  'required|exists:users,id'
        ]);

        $data['from_user_id'] = auth()->id(); 

        //return $request->all();
        //return $data;
        
        $message = Message::create( $data );

        session()->flash('flash.banner', 'Message sent successfully!');
        // session()->flash('flash.banner.fancy', 'Message sent successfully!');

        return redirect()->route('messages.create');
    }

    
}
