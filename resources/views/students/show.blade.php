<!DOCTYPE html>
<html>
<head>
<title>Student Details</title>
</head>
<body>

<h1>Student Details</h1>

<p>
<strong>Student Number:</strong>
{{ $student->student_number }}
</p>

<p>
<strong>Name:</strong>
{{ $student->name }}
</p>

<p>

<strong>Course:</strong>
{{ $student->course->course_code }}
</p>

<p>
<strong>Course Name:</strong>
{{ $student->course->course_name }}
</p>

<p>
<strong>Year Level:</strong>
{{ $student->year_level }}
</p>

<a href="{{ route('students.edit', $student) }}">
Edit
</a>

<br><br>

<a href="{{ route('students.index') }}">
Back
</a>

</body>
</html>