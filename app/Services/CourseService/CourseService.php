<?php

namespace App\Services\courseService;

use App\Models\Course;
use App\Models\StudentCourse;

class CourseService
{
    public function createStudentCourse(array $params, int $student_id)
    {
        $course = [
            'course_id' => $params['course'],
            'students_id' => $student_id,
        ];
        StudentCourse::create($course);
    }

    public function Store(array $course)
    {
        return Course::create($course);
        return true;
    }

    public function update($courseId, $courseData)
    {
        $course = Course::find($courseId);
        $course = $course->update($courseData);
        return $course;
    }


}
