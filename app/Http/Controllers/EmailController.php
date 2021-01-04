<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Mail;
use Client;
use Webklex\PHPIMAP\ClientManager;




class EmailController extends Controller
{
    //
    public function compose_email(Request $request){

        if($request->isMethod('post')){
            $details = [

                'title' => 'Mail from HDTuto.com',
        
                'body' => 'This is for testing email using smtp'
        
            ];
            \Mail::to('pandeyvivak25@hotmail.com')->send(new \App\Mail\AppMail($details));
        
           
        
            dd("Email is Sent.");
        }
        return view('admin.compose-email');
    }


    public function inbox(Request $request){

        $cm = new ClientManager($options = []);
        
       // or create a new instance manually
        $client = $cm->make([
            'host'          => 'imap.gmail.com',
            'port'          => 993,
            'encryption'    => 'ssl',
            'validate_cert' => true,
            'username'      => 'pandeyvivak12@gmail.com',
            'password'      => '12345678.a',
            'protocol'      => 'imap'
        ]);

       
        $client->connect();
        $inboxFolder = $client->getFolder('INBOX'); 
        $inboxMessages = $inboxFolder->messages()->all()->get();
        /*foreach($inboxMessages as $m){
            $name=$m->getFlags();
            echo "<pre>";
            print_r($names);
            echo "</pre>";
            
        }*/
        //echo "<pre>";
        //print_r($inboxMessages);
        //echo "</pre>";
        return view('admin.view-email')->with(compact('inboxMessages'));
        
    }

    
}
