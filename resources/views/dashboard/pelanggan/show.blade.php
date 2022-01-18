@extends('dashboard.layouts.main')

@section('container')
<h3 class="mt-4 mb-4">Order oleh: {{ $pelanggan -> name }}</h3>

@if ($pelanggan->image)
  <div style="max-height: 350px; overflow:hidden;">
    <img src="{{ asset('storage/' . $pelanggan->image) }}" alt="{{ $pelanggan->order }}"
      class="img-fluid col-sm-3">
  </div>
@else
  <Strong>Tiada gambar.</Strong>
@endif

<div class="table-responsive col-lg-10 mt-3">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>No</th>
        <th>Order No</th>
        <th>Details</th>
        <th>Tarikh</th>
        <th>Catatan</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pelanggan as $pelanggan)
      <tr>
        <td>{{ $loop -> iteration}}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<a href="/dashboard/pelanggan" class="btn btn-success"><span data-feather="arrow-left"></span>Back</a>
@endsection