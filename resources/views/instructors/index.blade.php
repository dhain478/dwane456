@extends('base')

@section('content')

<div class="container"><br>
    <h1 style="text-align:center;">Instructors</h1>
    <table class="table table-striped table-hover table-inverse shadow" style="background-color:rgb(236, 232, 232); "><br>
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Expertise</th>
                <th>Rating</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructors as $instructor)
            <tr>
                <td>{{ $instructor->lname }}</td>
                <td>{{ $instructor->fname }}</td>
                <td>{{ $instructor->aoe }}</td>
                <td>{{ $instructor->rating }}</td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <br>
</div>
@stop