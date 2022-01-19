@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ml-3 border-bottom">
        <h1 class="h2">Senarai Stok</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="table-responsive col-lg-12">
            <div class="row justify-content-between">
              <div class="col-md-3">
              <a href="/dashboard/stok/create" class="btn btn-primary mb-3">Tambah Stok</a>
              </div>
              <div class="col-md-4">
                <form action="/dashboard/stok" role="search">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search Item">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </span>
                    </div>
                </form>
              </div>
            </div>

            <table class="table table-striped table-hover table-sm">
              <!-- <caption>Menunjukkan {{ $stok->count() }} item dari  items</caption> -->
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Item</th>
                  <th>Jenis Item</th>
                  <th>Jenama Kereta</th>
                  <th>Jenis Kereta</th>
                  <th>Harga Beli</th>
                  <th>Harga Jual</th>
                  <th>Kedai</th>
                  <th>Lokasi Barang</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($stok as $stoks)
                <tr>
                  <td>{{ ($stok ->currentpage()-1) * $stok ->perpage() + $loop->index + 1 }}</td>
                  <td>{{ ucwords($stoks -> item) }}</td>
                  <td>{{ $stoks -> jenisitem}}</td>
                  <td>
                    @if($stoks->jenamakereta)
                      {{ ucwords($stoks -> jenamakereta) }}
                    @else
                    -
                    @endif</td>
                  <td>
                    @if($stoks->jeniskereta)
                      {{ ucwords($stoks -> jeniskereta) }}
                    @else
                    -
                    @endif</td>
                  <td>{{ $stoks -> hargabeli}}</td>
                  <td>
                    @if($stoks->hargajual)
                      {{ $stoks -> hargajual}}
                    @else
                    -
                    @endif</td>
                  <td>{{ $stoks -> kedai}}</td>
                  <td>
                    @if($stoks->lokasibarang)
                      {{ $stoks -> lokasibarang}}
                    @else
                    -
                    @endif</td>
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $stok->links() }}

            @if(!$stok->count())
              <div class="col-md-3 mb-5">
              Tiada dalam rekod.
              </div>
              <div>
              <a href="/dashboard/stok" class="btn btn-danger mb-3">Kembali</a>
              </div>
            @endif
          </div>
@endsection