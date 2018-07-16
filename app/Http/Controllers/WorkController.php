<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
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
       $works = Work::all();
       return view('layouts.admin.work', compact('works'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.admin.workCreate');
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
        'title' =>'required',
        'text' =>'required',
           
         
               ]);

              

          $work = Work::create([
            'icon' => $request->input('icon'),
            'title' => $request->input('title'),
            'text' => $request->input('text'),
               
    
               // 'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('work')
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
       $work = Work::find($id);
       return view('layouts.admin.workEdit', compact('work'));
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
        'title' =>'required',
        'text' =>'required',
            ]);
   
           
           
       $work = Work::find($id);
       $work->update([
        
        'icon' => $request->input('icon'),
        'title' => $request->input('title'),
        'text' => $request->input('text'),
      
           // 'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('work');
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
       $work = Work::destroy($id);
      
       
       return redirect()
       ->route('work')
       ->with('status', 'Successfully deleted');
   }
}
