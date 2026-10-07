<!DOCTYPE html>
<html>
<head>
<title>Courses</title>
</head>
<body>

<h1>Course Management</h1>

@if(session('success'))
<p>{{ session('success') }}</p>
@endif

<a href="{{ route('courses.create') }}">
Add Course

</a>

<br><br>

<table border="1" cellpadding="10">

<tr>
<th>Course Code</th>
<th>Course Name</th>
<th>Actions</th>
</tr>

@foreach($courses as $course)

<tr>

<td>{{ $course->course_code }}</td>

<td>{{ $course->course_name }}</td>

<td>

<a href="{{ route('courses.show', $course) }}">
View
</a>

<a href="{{ route('courses.edit', $course) }}">
Edit
</a>

<form
action="{{ route('courses.destroy', $course) }}"
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
