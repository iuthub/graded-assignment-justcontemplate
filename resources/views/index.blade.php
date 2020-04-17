@extends('layout')
@section('content')


    <form action="{{url('task')}}" method="POST">
        {!! csrf_field() !!}
        <div id="myDIV" class="header">
            <h2>My To Do List</h2>
            <input type="text" name="name" placeholder="Title...">
            <button type="submit" class="addBtn">Add</button>
        </div>
    </form>


    <!-- Block of tasks -->
    <ul id="myUL">
        @foreach($tasks as $task)
        <li>
            <div class="task">
                {{$task->name}}
            </div>
            <div class="action">
                <a href=""><i class="fa fa-edit"></i></a>
            </div>
            <div class="action">
                <a href="{{URL::route('delete-task',$task->id)}}"><i class="fa fa-trash-alt"></i></a>
            </div>
        </li>
        @endforeach
    </ul>



    @endsection
