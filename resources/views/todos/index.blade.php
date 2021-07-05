@extends('layouts.app')

@section('content')

<h1 class="text-center my-5">Welcome to the Todos PAGES</h1>
    
        
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <div class="card">

                <div class="card-header bg-primary text-white">
                    Todos
                </div>
    
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($todos as $todo)
                            <li class="list-group-item">
                                {{$todo -> name}}
                                <a class="btn btn-primary btn-sm float-right" href="/todos/{{$todo->id}}">Apercu<a>
                                @if (!$todo->completed)
                                    <a class="btn btn-warning btn-sm float-right mr-2 text-white" href="/todos/{{$todo->id}}/completed">Complete<a>
                                @else
                                    <span class="badge badge-success float-right mr-2 mt-2">completed</span>
                                @endif
                            
                            </li>
                        @endforeach
                    </ul>
                </div>
    
            </div>

        </div>
    </div>

@endsection
