<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Header;
class HeaderController extends Controller
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
       $headers = Header::all();
       return view('layouts.admin.header', compact('headers'));
   
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('layouts.admin.header');
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
           'image-file' => 'image|mimes:png,jpg,jpeg,bmp,svg',
           'title1' =>'required',
           'title2' =>'required',
           'title3' =>'required',
           'subtitle1' =>'required',
           'subtitle2' =>'required',
           'subtitle3' =>'required',
           'desc' =>'required',
         
               ]);

               $file_name = 'Logopc4.png';
               if($request->file('image-file')) {
               $img = $request->file('image-file');
               $file_ext = $img->getClientOriginalExtension();
               $file_name = "Logo.".$file_ext;
               Storage::disk('imagesPC')->put(
                   $file_name,
                   file_get_contents($img->getRealPath())
               );
               }

          $header = Header::create([
               'logo' => $file_name,
               'title1' => $request->input('descripcion'),
               'title2' => $request->input('descripcion'),
               'title3' => $request->input('descripcion'),
               'subtitle1' => $request->input('descripcion'),
               'subtitle2' => $request->input('descripcion'),
               'subtitle3' => $request->input('descripcion'),
               'desc' => $request->input('descripcion'),
               
    
               // 'status' => $request->input('status'),
               
           ]);
   
           return redirect()
           ->route('header')
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
       $header = Header::find($id);
       return view('layouts.admin.headerEdit', compact('header'));
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
        'image-file' => 'image|mimes:png,jpg,jpeg,bmp,svg',
        'title1' =>'required',
        'title2' =>'required',
        'title3' =>'required',
        'subtitle1' =>'required',
        'subtitle2' =>'required',
        'subtitle3' =>'required',
        'desc' =>'required',
            ]);
   
            $file_name = 'Logopc4.png';
               if($request->file('image-file')) {
               $img = $request->file('image-file');
               $file_ext = $img->getClientOriginalExtension();
               $file_name ="Logo.".$file_ext;
               Storage::disk('imagesPC')->put(
                   $file_name,
                   file_get_contents($img->getRealPath())
               );
               }
           
       $header = Header::find($id);
       $header->update([
        'logo' => $file_name,
        'title1' => $request->input('title1'),
        'title2' => $request->input('title2'),
        'title3' => $request->input('title3'),
        'subtitle1' => $request->input('subtitle1'),
        'subtitle2' => $request->input('subtitle2'),
        'subtitle3' => $request->input('subtitle3'),
        'desc' => $request->input('descripcion'),
      
           // 'status' => $request->input('status'),
           
       ]);

       return redirect()
       ->route('header');
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
       $header = Header::destroy($id);
      
       
       return redirect()
       ->route('header')
       ->with('status', 'Successfully deleted');
   }
}
