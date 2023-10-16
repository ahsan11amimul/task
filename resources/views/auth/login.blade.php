@extends('layouts.app')
@include('partials.navbar')
@section('content')
<div class="container p-5">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Login</h4>
                </div>
                <div class="card-body">
                    @if (SESSION('error'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Whoops! {{session('error')}}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif
                   
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="{{old('email')}}" class="form-control  @error('email') is-invalid @enderror">
                        </div>
                        <div class="form-group mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control  @error('password') is-invalid @enderror">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary w-100">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection