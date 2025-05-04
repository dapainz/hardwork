@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-tasks mr-2"></i>
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center 
        justify-content-xl-between bg-warning">
            <div class="mb-1 mr-2">
                
            </div>
        </div>
        <div class="card-body">
            @if (auth()->user()->is_status == true)
            <div class="row">
                <div class="col-6">
                    Nama
                </div>
                <div class="col-6">
                    : {{ $tugas->user->nama }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Email
                </div>
                <div class="col-6">
                    : {{ $tugas->user->email }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Tugas
                </div>
                <div class="col-6">
                    : {{ $tugas->tugas }}
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Tanggal mulai
                </div>
                <div class="col-6">
                    :
                    <span class="badge badge-info">{{ $tugas->mulai }}</span>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    Tanggal selesai
                </div>
                <div class="col-6">
                    :
                    <span class="badge badge-info">{{ $tugas->selesai }}</span>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-6">
                    Status
                </div>
                <div class="col-6">
                    :
                    <span class="badge badge-danger">Belum ditugaskan</span>
                </div>
            </div>
            @endif
            
        </div>
    </div>

@endsection