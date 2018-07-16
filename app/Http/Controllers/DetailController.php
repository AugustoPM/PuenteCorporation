<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detail;
class DetailController extends Controller
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
       $details = Detail::all();
       return view('layouts.admin.detail', compact('details'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.admin.detail');
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
           
           'title' =>'required',
           'num' =>'required',
           'icon' =>'required',
           
         
               ]);

              

          $detail = Detail::create([
               
               'title' => $request->input('title'),
               'num' => $request->input('num'),
               'icon' => $request->input('icon'),
              
    
               // 'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('detail')
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
       $detail = Detail::find($id);
       return view('layouts.admin.detailsEdit', compact('detail'));
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
        'title' =>'required',
        'num' =>'required',
        'icon' =>'required',
            ]);
   
           
           
       $detail = Detail::find($id);
       $detail->update([
        'title' => $request->input('title'),
        'num' => $request->input('num'),
        'icon' => $request->input('icon'),
      
           // 'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('detail');
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
       $detail = Detail::destroy($id);
      
       
       return redirect()
       ->route('detail')
       ->with('status', 'Successfully deleted');
   }
}
