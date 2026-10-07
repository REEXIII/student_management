<!DOCTYPE html>
<html>
<head>

<title>Edit Student</title>
</head>
<body>

<h1>Edit Student</h1>

@if($errors->any())

<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>

@endif

<form
action="{{ route('students.update', $student) }}"
method="POST"
>

@csrf
@method('PUT')

<label>Student Number</label>
<br>

<input
type="text"
name="student_number"
value="{{ old('student_number', $student->student_number) }}"
>

<br><br>

<label>Name</label>
<br>

<input
type="text"
name="name"
value="{{ old('name', $student->name) }}"
>

<br><br>

<label>Course</label>
<br>

<select name="course_id">

@foreach($courses as $course)

<option
value="{{ $course->id }}"
{{ $student->course_id == $course->id ? 'selected' : '' }}
>
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

<option
value="1st Year"
{{ $student->year_level == '1st Year' ? 'selected' : '' }}
>
1st Year
</option>

<option
value="2nd Year"
{{ $student->year_level == '2nd Year' ? 'selected' : '' }}
>
2nd Year
</option>

<option
value="3rd Year"
{{ $student->year_level == '3rd Year' ? 'selected' : '' }}
>
3rd Year
</option>

<option
value="4th Year"
{{ $student->year_level == '4th Year' ? 'selected' : '' }}
>
4th Year
</option>

</select>

<br><br>

<button type="submit">
Update Student
</button>

</form>

<br>

<a href="{{ route('students.index') }}">
Cancel
</a>

</body>
</html>