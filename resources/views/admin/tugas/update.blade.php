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
                <a href="{{ route('tugas') }}" class="btn btn-sm btn-dark">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('tugasUpdate', $tugas->id) }}" method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col-12 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Nama:
                        </label>
                        <input type="text" value="{{ $tugas->user->nama }}" class="form-control" disabled>
                            @error('user_id')
                            <small class="text-danger">
                                {{ $message }}
                            </small>
                            @enderror
                    </div>
                    <div class="col-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Tugas:
                        </label>
                        <textarea name="tugas" rows="5" class="form-control" @error('tugas') is-invalid @enderror>{{$tugas->tugas}}</textarea>
                        @error('tugas')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Tanggal mulai:
                        </label>
                        <input type="date" name="mulai" rows="5" class="form-control" value="{{ $tugas->mulai }}">
                        @error('mulai')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                    <div class="col-xl-6 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Tanggal selesai:
                        </label>
                        <input type="date" name="selesai" rows="5" class="form-control" value="{{ $tugas->selesai }}">
                        @error('selesai')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="fas fa-edit mr-2"></i>
                        Update
                    </button>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection