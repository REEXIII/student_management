<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
public function run(): void
{
Course::create([
'course_code' => 'BSIT',
'course_name' => 'Bachelor of Science in Information Technology',
]);

Course::create([
'course_code' => 'BSBA',
'course_name' => 'Bachelor of Science in Business Administration',
]);

Course::create([
'course_code' => 'BSTM',
'course_name' => 'Bachelor of Science in Tourism Management',
]);
}
}
