<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
use App\Story;
use App\Product;
use App\Team;
use App\Work;
use App\Social;
use App\Detail;
use App\Footer;
use App\Mail\Formulario;
use Illuminate\Support\Facades\Mail;


class FrontController extends Controller
{
    //
    public function header()
    {
      $header = Header::all();
      $stories = Story::all();
      $products = Product::all();
      $teams = Team::all();
      $works = Work::all();
      $socials = Social::all();
      $details = Detail::all();
      $footers = Footer::all();
      
        
      
     return view('welcome', compact('header','teams','stories','products','works','socials','details','footers'));
  }
    public function form(Request $request)
    {
     /* header('Content-type: application/json');
        $status = array(
            'type'=>'success',
            'message'=>'Thank you for contact us. As early as possible  we will contact you '
        );
    
        $name       = @trim(stripslashes($request->input('name')));
        $email      = @trim(stripslashes($request->input('email')));
        $company    = @trim(stripslashes($request->input('company')));
        $msg    = @trim(stripslashes($request->input('msg')));
        $why    = @trim(stripslashes($request->input('why')));
        $image    = @trim(stripslashes($request->file('image')));
    
        $email_from = 'emailsend.puentecorporation@gmail.com';
        $email_to = 'emailsend.puentecorporation@gmail.com';//replace with your email
    
        $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'company: ' . $company . "\n\n" . 'Message: ' . $msg . $why . 'File: ' . $image;
    
        $success = @mail($email_to, $body, 'From: <'.$email_from.'>');
       
        // echo json_encode($status);
        // die;
        return redirect()->route('send')
   ->with('status','Mensaje creado satisfactoriamente');


      $name = $request->input("name");
    $email = $request->input("email");
    $company = $request->input("company");
    $msg = $request->input("msg");
    $why = $request->input("why");
    $image = $request->file("image");
    return view('mails.formulario', compact('name','email','company','msg','why','image'));*/
  }


  public function contacto(Request $request){
   /* $name = $request->input("name");
    $email = $request->input("email");
    $company = $request->input("company");
    $msg = $request->input("msg");
    $why = $request->input("why");
    $image = $request->file("image");
    return view('mails.formulario', compact('name','email','company','msg','why','image'));*/

    Mail::send(['view'=>'mails.formulario'],['name','Puente Corp'], function($message){
        $message->to('emailsend.puentecorporation@gmail.com','Receptor ')->subject('test');
        $message->from('emailsend.puentecorporation@gmail.com','Partnership Request');
    });
    
  }
}
