<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

<title>Add Student</title>
</head>
<body>

<h1>Add Student</h1>

@if($errors->any())

<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

@endif

<form action="{{ route('students.store') }}" method="POST">

@csrf

<label>Student Number</label>
<br>

<input
type="text"
name="student_number"
value="{{ old('student_number') }}"
>

<br><br>

<label>Name</label>
<br>

<input
type="text"
name="name"
value="{{ old('name') }}"
>

<br><br>

<label>Course</label>
<br>

<select name="course_id">

<option value="">
Select Course
</option>

@foreach($courses as $course)

<option value="{{ $course->id }}">
{{ $course->course_code }}
-
{{ $course->course_name }}
</option>

@endforeach

</select>

<br><br>

<label>Year Level</label>
<br>

<select name="year_level">

<option value="">Select Year Level</option>
<option value="1st Year">1st Year</option>
<option value="2nd Year">2nd Year</option>
<option value="3rd Year">3rd Year</option>
<option value="4th Year">4th Year</option>

</select>

<br><br>

<button type="submit">
Save Student
</button>

</form>

<br>

<a href="{{ route('students.index') }}">
Back
</a>

</body>
</html>
