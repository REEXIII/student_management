<!DOCTYPE html>
<html>
<head>
<title>Edit Course</title>
</head>
<body>

<h1>Edit Course</h1>

@if($errors->any())

<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach

</ul>

@endif

<form
action="{{ route('courses.update', $course) }}"
method="POST"
>

@csrf
@method('PUT')

<label>Course Code</label>
<br>

<input
type="text"
name="course_code"
value="{{ $course->course_code }}"
>

<br><br>

<label>Course Name</label>
<br>

<input
type="text"
name="course_name"
value="{{ $course->course_name }}"
>

<br><br>

<button type="submit">

Update Course
</button>

</form>

<br>

<a href="{{ route('courses.index') }}">
Cancel
</a>

</body>
</html>
