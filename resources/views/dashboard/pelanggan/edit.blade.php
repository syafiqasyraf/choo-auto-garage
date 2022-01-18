@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Data Pelanggan</h1>
    </div>

    <div class='col-lg-8'>
        <form method="post" action="/dashboard/pelanggan/{{ $pelanggan->id }}" class="mb-5" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" 
                name="name" required value="{{ old('name', $pelanggan->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="notel" class="form-label">No Telefon</label>
                <input type="text" class="form-control @error('notel') is-invalid @enderror" id="notel" 
                name="notel" required value="{{ old('notel', $pelanggan->notel) }}">
                @error('notel')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="order" class="form-label">Order</label>
                <input type="text" class="form-control @error('order') is-invalid @enderror" id="order" 
                name="order" required value="{{ old('order', $pelanggan->order) }}">
                @error('order')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-1">
                <label for="address" class="form-label">Alamat</label>
                <input type="text" id="address" name="address" class="form-control @error('order') is-invalid @enderror"
                required value="{{ old('address', $pelanggan->address) }}">
                @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label for="image" class="form-label">Gambar</label>
                <input type="hidden" name='oldImage' value="{{ $pelanggan->image }}">
                
                @if ($pelanggan->image)
                <div style="max-height: 350px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $pelanggan->image) }}" alt="Gambar {{ $pelanggan->name }}"
                    class="img-fluid col-sm-3 d-block mb-3">
                </div>
                @else
                <br><Strong>Tiada gambar.</Strong>
                @endif

                <input class="form-control @error('image') is-invalid @enderror mt-2" type="file" id="image"
                name="image" >
                @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <!-- <div class="mb-1">
                <label for="catatan" class="form-label">Catatan</label>
                <input id="catatan" type="hidden" name="catatan" class="form-control @error('order') is-invalid @enderror">
                <trix-editor input="catatan" value="{{ old('catatan', $pelanggan->catatan) }}"></trix-editor>
                @error('catatan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> -->
            
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="/dashboard/pelanggan" class="btn btn-danger">Batal</a>

        </form>
    </div>
@endsection