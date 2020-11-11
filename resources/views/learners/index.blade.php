@extends ('base')


@section('content')
<br> 
<h1 style="text-align:center;">Learners</h1>

        <table class="table table-striped table-hover table-inverse shadow" style="background-color:rgb(236, 232, 232); "><br>
        <thead>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Level</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($learners as $learner)
            <tr>
                <td>{{ $learner->lname }}</td>
                <td>{{ $learner->fname }}</td>
                <td>{{ $learner->level }}</td>
                <td>{{ $learner->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br>
</div>

@stop
