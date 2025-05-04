@extends('layouts.app')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">
        <i class="fas fa-plus mr-2"></i>
        {{$title}}
    </h1>

    <div class="card">
        <div class="card-header d-flex flex-wrap justify-content-center 
        justify-content-xl-between">
            <div class="mb-1 mr-2">
                <a href="{{ route('tugas') }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-arrow-left mr-2"></i>
                    Kembali
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('tugasStore') }}" method="post">
                @csrf
                <div class="row mb-2">
                    <div class="col-12 mb-2">
                        <label class="form-label">
                            <span class="text-danger">*</span>
                            Nama:
                        </label>
                        <select name="user_id" class="form-control @error('user_id') is-invalid @enderror">
                            <option selected disabled>--pilih nama--</option>
                            @foreach ($user as $item)
                            <option value="{{ $item->id }}">{{$item->nama}}</option>
                            @endforeach
                        </select>
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
                        <textarea name="tugas" rows="5" class="form-control"></textarea>
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
                        <input type="date" name="mulai" rows="5" class="form-control">
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
                        <input type="date" name="selesai" rows="5" class="form-control">
                        @error('selesai')
                        <small class="text-danger">
                            {{ $message }}
                        </small>
                        @enderror
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-sm btn-primary">
                        <i class="fas fa-save mr-2"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection