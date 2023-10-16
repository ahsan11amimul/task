@extends('layouts.app')
@includeIf('partials.navbar')
@section('content')
<div class="container p-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center card-title">Deatail Task</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="form-group mb-3">
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="{{ $task->title??old('title') }}" class="form-control @error('title') is-invalid @enderror">
                        </div>
                        <div class="form-group mb-3">
                            <label for="description">Description</label>
                            <input type="text" name="description" value="{{ $task->description??old('description') }}" id="description" class="form-control @error('description') is-invalid @enderror">
                        </div>
                        <div class="form-group mb-3">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Select Status</option>
                                <option value="pending" {{ $task->status=='pending'?'selected':'' }}>Pending</option>
                                <option value="completed" {{ $task->status=='completed'?'selected':'' }}>Completed</option>
                            </select>
                        </div>
                    <button type="submit" class="btn btn-danger w-100">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection