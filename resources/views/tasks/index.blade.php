@extends('layouts.master')

    @section('content')
    {{-- <button [routerLink]="['/tasks/create']">Create</button> --}}
    <h2><a href="/tasks/create" ><i>Create_Blog</i></a></h2>
   
    <hr class="border-info">
    <div class="col-sm-8 blog-main">
            
        @foreach ($tasks as $task)
        
            <a href="/tasks/{{$task->id}}">
                {{$task->title}}
            </a>

            <p class="blog-post-meta">{{ $task->created_at->toFormattedDateString()}}</p>

            {{ $task->description }}

            <hr class="border-info" >

        @endforeach
    
        </div>
    @endsection
