<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $data = array(
            'title'     => 'Data user',
            'menuAdminUser' => 'active',
            'user'          => User::orderBy('Jabatan')->get()
        );
        return view('admin/user/index', $data);
    }
    public function buat(){
        $data = array(
            'title'         => 'Tambah data user',
            'menuAdminUser' => 'active',
        );
        return view('admin/user/buat', $data);
    }
    public function store(Request $request){
        $request->validate([
            'nama'  => 'required',
            'email' => 'required|unique:users,email',
            'Jabatan' => 'required',
            'password' => 'required|confirmed|min:8',
        ],[
            'nama.required' => 'nama tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
            'email.unique'  => 'email sudah ada',
            'Jabatan.required' => 'pilih salah satu',
            'password.required' => 'password tidak boleh kosong',
            'password.confirmed' => 'password tidak sama',
            'password.min'  => 'minimal 8 karakter'
        ]);  
        
        $user = new User;
        $user->nama     = $request->nama;
        $user->email     = $request->email;
        $user->Jabatan     = $request->Jabatan;
        $user->password     = Hash::make($request->password);
        $user->is_status     = false;
        $user->save();

        return redirect()->route('user')->with('success', 'Data berhasil ditambahkan');
    }
    public function update($id){
        $data = array(
            'title'         => 'Edit data user',
            'menuAdminUser' => 'active',
            'user'          => User::findOrFail($id),
        );
        return view('admin/user/update', $data);
    }
    public function edit(Request $request, $id){
        $request->validate([
            'nama'  => 'required',
            'email' => 'required|unique:users,email,'.$id,
            'Jabatan' => 'required',
            'password' => 'nullable|confirmed|min:8',
        ],[
            'nama.required' => 'nama tidak boleh kosong',
            'email.required' => 'email tidak boleh kosong',
            'email.unique'  => 'email sudah ada',
            'Jabatan.required' => 'pilih salah satu',
            'password.required' => 'password tidak boleh kosong',
            'password.confirmed' => 'password tidak sama',
            'password.min'  => 'minimal 8 karakter'
        ]);  
        
        $user = User::with('tugas')->findOrFail($id);
        $user->nama     = $request->nama;
        $user->email     = $request->email;
        $user->Jabatan     = $request->Jabatan;
        if($request->Jabatan=="Admin"){
            $user->is_status = false;
            $user->tugas()->delete();
        }
        if ($request->filled('password')) {
            $user->password     = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('user')->with('success', 'Data berhasil diedit');
    }

    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('user')->with('success', 'Data berhasil dihapus');
    }
}
