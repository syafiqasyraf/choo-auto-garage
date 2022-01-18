@extends('layouts.main')

@section('container')
<div class="row ">
    <div class="col-lg-5">
        
        <main class="form-registration">
         <h1 class="h3 mb-3 font-weight-normal">Register</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="name" id="name" class="form-control rounded-top 
                    @error('name') is-invalid @enderror" placeholder="Name" required value="{{old('name')}}">
                    <label for="name" class="sr-only">Name</label>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-floating">
                    <input type="text" name="username" id="username" class="form-control 
                    @error('username') is-invalid @enderror" placeholder="Username" required value="{{old('username')}}">
                     <label for="username" class="sr-only">Username</label>
                    @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="email" name="email" id="Email" class="form-control
                    @error('email') is-invalid @enderror" placeholder="Email address" required value="{{old('email')}}">
                    <label for="Email" class="sr-only">Email</label>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-floating">
                    <input type="password" name="password" id="Password" class="form-control rounded-bottom
                    @error('password') is-invalid @enderror" placeholder="Password" required>
                    <label for="Password" class="sr-only">Password</label>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Submit</button>

                <small class="d-block text-center mt-3">
                Sudah daftar?<a href="/login"> Log In</a>
                </small> 
            </form>
        </main>
    </div>
    <p class="text-center mt-5 mb-3 text-muted">&copy; Choo Auto Garage 2021</p>
</div>



@endsection