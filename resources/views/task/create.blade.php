@extends('layouts.app')
@includeIf('partials.navbar')
@section('content')
    <div class="container p-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center card-title">Add New Tasks</h4>
                    </div>
                    <div class="card-body">
                       <form action="{{ route('tasks.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror">
                        </div>
                       <div>
                           <button type="submit" class="btn btn-primary w-100">Submit</button>
                       </div>
                       </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


