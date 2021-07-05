@extends('layouts.app')

@section('content')

<h1 class="text-center my-4">{{$todo -> name}}</h1>
        
    <div class="row justify-content-center">
        <div class="col-lg-9">

            <div class="card">

                <div class="card-header bg-primary text-white">
                    Details
                </div>
    
                <div class="card-body">
                    <ul class="list-group">
                        
                        <li class="list-group-item">
                            {{$todo -> description}}
                        </li>
                        
                    </ul>
                    <a href="/todos" class="btn btn-secondary btn-sm float-right mx-2 mt-2">Back</a>
                    <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-sm float-right mt-2">Edit</a>
                    <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm mx-2 float-right mt-2">Delete</a>

                    {{-- <a href="/todos" class="btn btn-info float-right mt-4">Back</a> --}}
                </div>
    
            </div>

        </div>
    </div>

@endsection
