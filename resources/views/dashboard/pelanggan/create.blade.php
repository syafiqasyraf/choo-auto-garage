@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pelanggan Baru</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/pelanggan" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6 mb-1">
                <label for="name" class="form-label required">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                name="name" required value="{{old('name')}}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-1">
                <label for="notel" class="form-label required">No Telefon</label>
                <input type="text" class="form-control @error('notel') is-invalid @enderror" id="notel" 
                name="notel" required value="{{old('notel')}}">
                @error('notel')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="mb-4">
            <label for="address" class="form-label required">Alamat</label>
            <input type="text" id="address" name="address" class="form-control @error('order') is-invalid @enderror">
            @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <!-- <div class="mb-4">
            <label for="catatan" class="form-label">Catatan</label>
            <input id="catatan" type="hidden" name="catatan" class="form-control @error('order') is-invalid @enderror">
            <trix-editor input="catatan"></trix-editor>
            @error('catatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> -->
    
        <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
        <a href="/dashboard/pelanggan" class="btn btn-danger">Batal</a>
        </form>
    </div>
@endsection