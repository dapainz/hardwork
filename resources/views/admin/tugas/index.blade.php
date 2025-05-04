@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-tasks mr-2"></i>
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center 
        justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="{{ route('tugasCreate') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Data
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hovered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-dark text-white">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tugas</th>
                            <th>Mulai</th>
                            <th>Selesai</th>
                            <th>
                                <i class="fas fa-cog"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($tugas as $item)
                            <tr class="text-center">
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->user->nama}}</td>
                                <td>{{$item->tugas}}</td>
                                <td>
                                    <span class="badge badge-info">{{$item->mulai}}</span>
                                </td>
                                <td>
                                    <span class="badge badge-info">{{$item->selesai}}</span>
                                </td>
                                <td>
                                    <a href="{{ route('tugasEdit', $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    @include('admin/tugas/modal')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection