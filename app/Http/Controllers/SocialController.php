<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Social;

class SocialController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
   }

   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       $socials = Social::all();
       return view('layouts.admin.social', compact('socials'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.admin.socialCreate');
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */

   public function store(Request $request)
   {
       $request->validate([
        'icon' =>'required',
        
        'text' =>'required',
           
         
               ]);

              

          $social = Social::create([
            'icon' => $request->input('icon'),
            
            'text' => $request->input('text'),
               
    
               // 'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('social')
           ->with('status', 'Changes successfully update');
       
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
       //
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
       $social = Social::find($id);
       return view('layouts.admin.socialkEdit', compact('social'));
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {

       $request->validate([
       
        'icon' =>'required',
       
        'text' =>'required',
            ]);
   
           
           
       $social = Social::find($id);
       $social->update([
        
        'icon' => $request->input('icon'),
        
        'text' => $request->input('text'),
      
           // 'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('social');
       // ->with('status', 'Informacion Modificada Satisfactoriamente');
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
       $social = Social::destroy($id);
      
       
       return redirect()
       ->route('social')
       ->with('status', 'Successfully deleted');
   }
}
