<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class UserController extends Controller
{
    public function index(){
        $data = Book::all();
        return view('user.index', compact('data'));
    }
}
