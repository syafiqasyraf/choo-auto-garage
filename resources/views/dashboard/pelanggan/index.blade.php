@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Senarai Pelanggan</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/pelanggan/create" class="btn btn-primary mb-3">Tambah Pelanggan</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Customer</th>
                  <th>No Telefon</th>
                  <th>Alamat</th>
                  <th>Order</th>
                  <th>Catatan</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pelanggan as $pelanggan)
                <tr>
                  <td>{{ $loop -> iteration}}</td>
                  <td>{{ $pelanggan -> name}}</td>
                  <td>{{ $pelanggan -> notel}}</td>
                  <td>{{ $pelanggan -> address}}</td>
                  <td></td>
                  <!-- <td>
                  {{ $pelanggan->orders}}</td> -->
                  <td>
                      <a href="/dashboard/pelanggan/{{ $pelanggan->id }}" class="badge bg-info text-dark">
                        <span data-feather="eye"></span> ORDER</a>

                        <a href="/dashboard/pelanggan/{{ $pelanggan->id }}/edit" class="badge bg-warning text-dark">
                        <span data-feather="edit"></span> EDIT</a>

                        <form action="/dashboard/pelanggan/{{$pelanggan->id}}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0 text-dark" onclick="return confirm('Anda pasti?')">
                          <span data-feather="x-circle"></span> PADAM</button>
                        </form>
                        
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
@endsection