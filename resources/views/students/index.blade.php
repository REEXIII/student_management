<!DOCTYPE html>
<html>
<head>
<title>Student Management</title>
</head>
<body>

<h1>Student Management System</h1>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<a href="{{ route('students.create') }}">
Add Student
</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
<th>Student Number</th>
<th>Name</th>
<th>Course</th>
<th>Year Level</th>

<th>Action</th>
</tr>

@foreach($students as $student)

<tr>
<td>{{ $student->student_number }}</td>

<td>{{ $student->name }}</td>

<td>{{ $student->course->course_code }}</td>

<td>{{ $student->year_level }}</td>

<td>
<a href="{{ route('students.show', $student) }}">
View
</a>

<a href="{{ route('students.edit', $student) }}">
Edit
</a>

<form
action="{{ route('students.destroy', $student) }}"
method="POST"
style="display:inline;"
>

@csrf
@method('DELETE')

<button type="submit">
Delete
</button>

</form>
</td>
</tr>

@endforeach

</table>

</body>
</html>
