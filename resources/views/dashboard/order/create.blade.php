@extends('dashboard.layouts.main')

@section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Order Baru</h1>
    </div>

    <div class='col-lg-12'>
        <form method="post" action="/dashboard/stok" class="mb-5" enctype="multipart/form-data">
        <!-- First Section -->
        <h4>Details Item</h4>
        @csrf
        <div class="row">
            <div class="col-md-4 mb-4">
                <label for="item" class="form-label required" required>Nama Item:</label>
                <input type="text" class="form-control @error('item') is-invalid @enderror" id="item" 
                name="item" required value="{{old('item')}}" placeholder="Contoh: Brake Pad">
                @error('item')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3 mb-4">
                    <label for="jenisitem" class="form-label required">Jenis Item:</label>
                    <select class="form-select @error('jenisitem') is-invalid @enderror" id="jenisitem" 
                    name="jenisitem" required value="{{old('jenisitem')}}">
                        <option selected>Pilih..</option>
                        
                        <option value="baru">Baru</option>
                        <option value="second">Second-hand</option>
                        <option value="general">General Item</option>
                    </select>
                @error('jenisitem')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-1 mb-4">
                <label for="kuantiti" class="form-label required">Kuantiti:</label>
                <input type="number" class="form-control @error('kuantiti') is-invalid @enderror" id="kuantiti" 
                name="kuantiti" required value="{{old('kuantiti')}}" step="1">
                @error('kuantiti')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <h6 class="mb-1">Isi Jika Berkenaan:</h6>
        <div class="row">
            <fieldset class=" col-md-7 mb-1">
                <legend class="col-form-label">Pilih Jenama Kereta:</legend>
                <div class="col-auto">
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="proton" name="jenamakereta" value="Proton" >
                            <label class="form-check-label" for="proton" >Proton</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="perodua" name="jenamakereta" value="Perodua">
                            <label class="form-check-label" for="perodua" >Perodua</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="toyota" name="jenamakereta" value="Toyota">
                            <label class="form-check-label" for="toyota" >Toyota</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="nissan" name="jenamakereta" value="Nissan">
                            <label class="form-check-label" for="nissan" >Nissan</label>
                    </div>
                    <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="other" name="jenamakereta" value="{{old('jenamakereta')}}" checked>
                            <label class="form-check-label mr-1" for="other" >Lain2</label>
                            <input type="text" id="inputother" onchange="changeradioother()"/>
                    </div>
                    @error('jenamakereta')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </fieldset>
            <div class="col-md-3 mb-2 ">
                <label for="jeniskereta" class="form-label">Jenis Kereta:</label>
                <input type="text" class="form-control @error('jeniskereta') is-invalid @enderror" id="jeniskereta" 
                name="jeniskereta" value="{{old('jeniskereta')}}" placeholder="Contoh: Wira">
                @error('jeniskereta')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div><hr>

        <!-- Second Section -->
        <h4>Harga Item</h4>
        <div class="row">
            <div class="col-md-3 mb-2">
                <label for="hargabeli" class="form-label required">Harga Beli (RM):</label>
                <input type="number" class="form-control @error('hargabeli') is-invalid @enderror" id="hargabeli" 
                name="hargabeli" required value="{{old('hargabeli')}}" step=".01" placeholder="0.00">
                @error('hargabeli')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3 mb-2">
                <label for="hargajual" class="form-label">Harga Jual (RM):</label>
                <input type="number" class="form-control @error('hargajual') is-invalid @enderror" id="hargajual" 
                name="hargajual"value="{{old('hargajual')}} " step=".01" placeholder="0.00">
                @error('hargajual')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 mb-2">
                <label for="kedai" class="form-label required">Kedai/Tempat Beli:</label>
                <input type="text" id="kedai" name="kedai" class="form-control " placeholder="Contoh: Shopee">
            </div>
            <div class="col-md-4">
                <label for="lokasibarang" class="form-label">Lokasi Barang:</label>
                <input type="text" id="lokasibarang" name="lokasibarang" class="form-control " placeholder="Contoh: Office">
            </div>
        </div><hr>

        <!-- Third Section -->
        <h4>Status Tarikh Item</h4>
        <div class="row mb-2">
            <div class="col-md-3">
                <label for="tarikhbeli" class="form-label required">Tarikh Beli:</label>
                <input type="date" class="form-control @error('tarikhbeli') is-invalid @enderror" id="tarikhbeli" 
                name="tarikhbeli" required value="{{old('tarikhbeli')}}">
                @error('tarikhbeli')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-3">
                <label for="tarikhjual" class="form-label">Tarikh Jual:</label>
                <input type="date" class="form-control" id="tarikhjual" 
                name="tarikhjual" value="{{old('tarikhjual')}}">
            </div>
        </div>
        <div class="col-md-7 mb-4">
            <label for="nota" class="form-label">Nota : (jika ada)</label>
            <input id="nota" type="hidden" name="nota" class="form-control">
            <trix-editor input="nota"></trix-editor>
        </div>
    
        <button type="submit" class="btn btn-primary">Tambah Order</button>
        <a href="/dashboard/order" class="btn btn-danger">Batal</a>
        </form>
    </div>
@endsection