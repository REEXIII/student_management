<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
public function run(): void
{
Student::create([
'student_number' => '2026001',
'name' => 'Juan Dela Cruz',
'course_id' => 1,
'year_level' => '1st Year',
]);

Student::create([
'student_number' => '2026002',
'name' => 'Maria Santos',
'course_id' => 1,
'year_level' => '2nd Year',
]);

Student::create([
'student_number' => '2026003',
'name' => 'Pedro Reyes',
'course_id' => 2,

'year_level' => '3rd Year',
]);
}
}
