@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Senarai Admin</h1>
    </div>

    @if(session()->has('success'))
      <div class="alert alert-success" role="alert">
        {{ session('success') }}
      </div>
    @endif

    <div class="table-responsive col-lg-10">
        <a href="/dashboard/users/create" class="btn btn-primary mb-3">Tambah Admin</a>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Admin</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Password</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $loop -> iteration}}</td>
                  <td>{{ $user -> name}}</td>
                  <td>{{ $user -> username}}</td>
                  <td>{{ $user -> email}}</td>
                  <td>
                      <a href="/dashboard/users/{{ $user->id }}" class="badge bg-info text-dark">
                        <span data-feather="eye"></span> View</a>

                        <a href="/dashboard/users/{{ $user->id }}/edit" class="badge bg-warning text-dark">
                        <span data-feather="edit"></span> Edit</a>

                        <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
                          @method('delete')
                          @csrf
                          <button class="badge bg-danger border-0 text-dark" onclick="return confirm('Anda pasti?')">
                          <span data-feather="x-circle"></span> Delete</button>
                        </form>
                        
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
@endsection