@extends('layouts.app')
@includeIf('partials.navbar')
@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center card-title">Task List</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td scope="col">{{ $task->id }}</td>
                                        <td scope="col">{{ $task->title }}</td>
                                        <td scope="col">{{ $task->description }}</td>
                                        <td scope="col">{{ $task->status }}</td>
                                        <td scope="col">
                                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
                                            <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Show</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection