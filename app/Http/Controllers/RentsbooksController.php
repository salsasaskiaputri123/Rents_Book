<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class RentsbooksController extends Controller
{
    public function book(){
        $book = Book::all();

        return view('dashboard.book', compact('book'));
    }

    public function add(Request $request){
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'sinopsis' => 'required',
            'kategori' => 'required',
            'image' => 'required',
        ]);
        $input = $request->all();
         if($image = $request->file('image')) {
             $destinationPath = 'image/';
             $coverImage = date('YmdHis').'.'. $image->getCLientOriginalExtension();
             $image->move($destinationPath, $coverImage);
             $input['image'] = "$coverImage";
         }

         Book::create($input);

     return redirect('/book')->with('success', 'Berhasil membuat !');
     }

       
}
