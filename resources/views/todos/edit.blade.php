@extends('layouts.app')

@section('content')

<div class="container mt-4">
    <h1 class="">Update Todo</h1>
    <div class="row mt-4">
        <div class="col-lg-6">

            <div class="card card-default">
                <div class="card-header bg-primary text-white">Update your Task</div>
                <div class="card-body">

                    <form action="/todos/{{$todo->id}}/update-todos" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{$todo->name}}" placeholder="Create a new Todo">
                            <textarea name="description" cols="5" rows="5" class="form-control mt-3" placeholder="Description">{{$todo->description}}</textarea>
                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                            <a href="/todos/{{$todo->id}}" class="btn btn-secondary mt-3">Back</a>
                        </div>
                    </form>

                </div>
            </div>
            
        </div>

        <div class="col-lg-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $error)
                            <li class="list-group-item mt-2">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

    </div>
</div>

@endsection