@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-user mr-2"></i>
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center 
        justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="{{ route('tambahUser') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Data
                </a>
            </div>
            {{-- <div>
                <a href="#" class="btn btn-sm btn-success">
                    <i class="fas fa-file-excel mr-2"></i>
                    Excel
                </a>
                <a href="#" class="btn btn-sm btn-danger">
                    <i class="fas fa-file-excel mr-2"></i>
                    PDF
                </a>
            </div> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hovered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-dark text-white">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>
                                <i class="fas fa-cog"></i>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($user as $item)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td>{{$item->nama}}</td>
                                <td>
                                    <span class="badge badge-info">{{$item->email}}</span>
                                </td>
                                <td>
                                    @if ($item->Jabatan == 'Admin')
                                    <span class="badge badge-warning">{{$item->Jabatan}}</span>
                                    @else
                                    <span class="badge badge-dark">{{$item->Jabatan}}</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($item->is_status == '1')
                                    <span class="badge badge-success">Online</span>
                                    @else
                                    <span class="badge badge-secondary">Offline</span></span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('updateUser', $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    @include('admin/user/modal')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection