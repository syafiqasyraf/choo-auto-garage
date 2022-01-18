@extends('layouts/main')

@section('container')

    <h1 class="mt-4 mb-4">Senarai Pelanggan</h1>

    
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="/pelanggan">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" name="search">
                        <div class="input-group-append">
                        <button class="btn btn-danger" type="submit" >Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">No Tel</th>
                <th scope="col">Invois</th>
                </tr>
            </thead>

            @foreach ($pelanggan as $pelanggan)
            <tbody>
                
                    <!-- <tr scope="row">1</th> -->
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pelanggan -> name }}</td>
                    <td>{{ $pelanggan -> notel }}</td>
                    <td></td>
                    </tr>
            </tbody>
            @endforeach
        </table>

@endsection