<!DOCTYPE html>
<html>
<head>
<title>Add Course</title>
</head>
<body>

<h1>Add Course</h1>

@if($errors->any())

<ul>
@foreach($errors->all() as $error)

<li>{{ $error }}</li>
@endforeach
</ul>

@endif

<form action="{{ route('courses.store') }}" method="POST">

@csrf

<label>Course Code</label>
<br>

<input type="text" name="course_code">

<br><br>

<label>Course Name</label>
<br>

<input type="text" name="course_name">

<br><br>

<button type="submit">
Save Course
</button>

</form>

<br>

<a href="{{ route('courses.index') }}">
Back
</a>

</body>
</html>
