<!DOCTYPE html>
<html>
<head>
<title>Course Details</title>
</head>
<body>

<h1>Course Details</h1>

<p>
<strong>Course Code:</strong>
{{ $course->course_code }}
</p>

<p>
<strong>Course Name:</strong>
{{ $course->course_name }}
</p>

<h3>Students</h3>

<ul>

@foreach($course->students as $student)

<li>
{{ $student->student_number }}
-
{{ $student->name }}

</li>

@endforeach

</ul>

<a href="{{ route('courses.edit', $course) }}">
Edit
</a>

<br><br>

<a href="{{ route('courses.index') }}">
Back
</a>

</body>
</html>
