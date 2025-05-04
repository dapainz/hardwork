@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-edit mr-2"></i>
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center 
        justify-content-xl-between bg-primary">
            <div class="mb-1 mr-2">
                <a href="{{ route('user') }}" class="btn btn-sm btn-dark">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('updateEdit', $user->id) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-xl-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Nama:
                        </label>
                        <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $user->nama }}">
                        @error('nama')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Email:
                        </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
                        @error('email')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-12 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Jabatan:
                        </label>
                        <select name="Jabatan" class="form-control @error('Jabatan') is-invalid @enderror">
                            <option selected disabled>--pilih jabatan--</option>
                            <option value="Admin" {{ $user->Jabatan == 'Admin' ? 'selected' : '' }}>Admin</option>
                            <option value="Client" {{ $user->Jabatan == 'Client' ? 'selected' : '' }}>Client</option>
                        </select>
                        @error('Jabatan')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Password:
                        </label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Konfirmasi Password:
                        </label>
                        <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror">
                        @error('password')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit mr-2"></i>
                        Edit
                    </button>
            </form>
            </div>
        </div>
    </div>

@endsection