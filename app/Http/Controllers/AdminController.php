<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class AdminController extends Controller
{
    public function indexUsers(){
        $data = User::get();

        return view('dashboard.user', compact('data'));
    }

    // public function destroy($id){
    //     User::where('id', $id)->delete();
    //     return redirect()->back();
    // }

    public function deleteUser(Request $request, $id)
    {
        Book::where('id', $id)->delete();
        User::where('id', $id)->delete();
        return redirect()->back()->with('danger', 'Berhasil menghapus !');
    }
    public function editUser($id){
        $user = User::where('id', $id)->first();
        return view('dashboard.edit-user', compact('user'));
    }
    public function updateUser(Request $request, $id){
        $request->validate([
            'name' =>'required',
            'email' =>'required',
            'no_hp' =>'required',
            'address' =>'required',
        ]);

        $user = User::where('id', $id)->first();

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
        ]);
        return redirect(route('users'))->with('success', 'Berhasil edit data user');
    }

    public function logout()
    {
        auth()->logout();
        Session()->flush();

        return redirect('/')->with('dangerlog', 'Berhasil logout');
    }


    

}
