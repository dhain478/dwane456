<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset ('css/style.css')}}">
    <script src="{{asset ('js/bootstrap.js')}}"></script>
    <title>My Site</title>
</head>
<body style="background-color: rgb(247, 244, 140); font-family:Century Gothic;">
<style>

.topnav {
  overflow: hidden;
  background-color: rgb(83, 86, 88);
  
}

.topnav a {
  color: #f2f2f2;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  float: right;
}

.topnav a:hover {
  background-color:   rgb(131, 152, 114);
  color: black;
}

.topnav a.active {
  background-color: rgb(155, 143, 129);
  color: white;
}
</style>
<div class="topnav">
<a href="{{url('/courses')}}">Courses</a>
  <a href="{{url('/learners')}}">Learner</a>
  <a href="{{url('/instructors')}}">Instructor</a>
  <a href="{{url('/')}}">Home</a>
</div>

<div class="container">
@yield('content')
</div>

</body>
</html>