@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ml-3 border-bottom">
        <h1 class="h2">Senarai Order</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="table-responsive col-lg-12">
            <div class="row justify-content-between">
              <div class="col-md-3">
              <a href="/dashboard/order/create" class="btn btn-primary mb-3">Tambah Order</a>
              </div>
              <div class="col-md-4">
                <form action="/dashboard/order" role="search">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Cari Order">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </span>
                    </div>
                </form>
              </div>
            </div>

            <table class="table table-striped table-hover table-sm">
              <!-- <caption>Menunjukkan {{ $orders->count() }} item dari  items</caption> -->
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Order</th>
                  <th>Kereta</th>
                  <th>No Plat</th>
                  <th>Nama Pelanggan</th>
                  <!-- <th>Complain</th>
                  <th>Masalah</th>
                  <th>Tindakan</th> -->
                  <th>Status</th>
                  <!-- <th>Tarikh Hantar</th>
                  <th>Tarikh Siap</th> -->
                  <th>Catatan</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($orders as $order)
                <tr>
                  <td>{{ ($orders ->currentpage()-1) * $orders ->perpage() + $loop->index + 1 }}</td>
                  <td>{{ ucwords($order -> order) }}</td>
                  <td>{{ $order -> kereta}}</td>
                  <td>{{ $order -> platkereta}}</td>
                  <td>{{ $order -> pelanggan->name}}</td>
                  <!-- <td>{{ $order -> complain}}</td>
                  <td>{{ $order -> masalah}}</td>
                  <td>{{ $order -> tindakan}}</td> -->
                  <td>
                    @if ($order->status == 0)
                      <p class="text-danger">Tengah bikin</p>
                    @else
                    <p class="text-success">Siap dah!!</p>
                    @endif</td>
                  <!-- <td>{{ $order -> created_at}}</td>
                  <td>{{ $order -> tarikhsiap}}</td> -->
                  <td>{{ $order -> catatan}}</td>
                
                </tr>
                @endforeach
              </tbody>
            </table>
            {{ $orders->links() }}

            @if(!$orders->count())
              <div class="col-md-3 mb-5">
              Tiada dalam rekod.
              </div>
              <div>
              <a href="/dashboard/order" class="btn btn-danger mb-3">Kembali</a>
              </div>
            @endif
          </div>
@endsection