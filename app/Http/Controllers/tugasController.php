<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class tugasController extends Controller
{
    public function index(){
        $user = Auth::user();

        if($user->Jabatan=='Admin'){
            $data = array(
                'title'     => 'Data Tugas',
                'menuAdminTugas' => 'active',
                'tugas'          => tugas::with('user')->get(),
            );
            return view('admin/tugas/index', $data);
        } else{
            $data = array(
                'title'             => 'Data Tugas',
                'menuClientTugas'   => 'active',
                'tugas'             => tugas::with('user')->where('user_id', $user->id)->first(),
            );
            return view('Client.tugas.index', $data);
        }

        
    }

    public function create(){
        $data = array(
            'title'         => 'Tambah data Tugas',
            'menuAdminTugas' => 'active',
            'user'          => User::where('Jabatan','Client')
            ->where('is_status', false)->get(),
        );
        return view('admin/tugas/create', $data);
    }

    public function store(Request $request){
        $request->validate([
            'user_id'  => 'required',
            'tugas'  => 'required',
            'mulai'  => 'required',
            'selesai'  => 'required',
        ],[
            'user_id.required' => 'nama tidak boleh kosong',
            'tugas.required' => 'tugas tidak boleh kosong',
            'mulai.required' => 'tanggal tidak boleh kosong',
            'selesai.required' => 'tanggal tidak boleh kosong',            
        ]);  
        
        $user = User::findOrFail($request->user_id);
        $tugas = new Tugas;
        $tugas->user_id     = $request->user_id;
        $tugas->tugas       = $request->tugas;
        $tugas->mulai       = $request->mulai;
        $tugas->selesai       = $request->selesai;   
        $tugas->save();
        $user->is_status = true;
        $user->save();

        return redirect()->route('tugas')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id){
        $data = array(
            'title'         => 'Edit data',
            'menuAdminTugas' => 'active',
            'tugas'         => Tugas::with('user')->findOrFail($id),
        );
        return view('admin/tugas/update', $data);
    }

    public function update(Request $request, $id){
        $request->validate([
            'tugas'  => 'required',
            'mulai'  => 'required',
            'selesai'  => 'required',
        ],[
            'tugas.required' => 'tugas tidak boleh kosong',
            'mulai.required' => 'tanggal tidak boleh kosong',
            'selesai.required' => 'tanggal tidak boleh kosong',            
        ]);  
        
        $tugas = Tugas::findOrFail($id);
        $tugas->tugas       = $request->tugas;
        $tugas->mulai       = $request->mulai;
        $tugas->selesai       = $request->selesai;   
        $tugas->save();

        return redirect()->route('tugas')->with('success', 'Data berhasil diupdate');
    }
    
    public function destroy($id){
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();
        $user = User::where('id', $tugas->user_id)->first();
        $user->is_status = false;
        $user->save();
        return redirect()->route('tugas')->with('success', 'Data berhasil dihapus');
    }

}
