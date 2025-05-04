<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\tugas;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data = array(
            "title"     => "Dashboard",
            "menuDs"    => "active",
            'jumlahUser'=> User::count(),
            'jumlahAdmin'=> User::where('Jabatan','Admin')->count(),
            'jumlahClient'=> User::where('Jabatan', 'Client')->count(),
            'jumlahOnline'=> User::where('is_status',true)->count(),
        );
        return view('dashboard',$data);
    }
}
