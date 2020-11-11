@extends('base')

@section('content')

<div class="container"><br>
    <h1 style="text-align:center;">Courses</h1>
    <table class="table table-striped table-hover table-inverse shadow" style="background-color:rgb(236, 232, 232); "><br>
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Start</th>
                <th>End</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{ $course->name }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->start }}</td>
                <td>{{ $course->end }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <br>
</div>

@stop