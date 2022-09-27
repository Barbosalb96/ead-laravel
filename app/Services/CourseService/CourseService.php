<?php

namespace App\Services\CourseService;

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

    public function alterCourseStatus(int $courser_id)
    {
        try {
            $courser = Course::findOrFail($courser_id);

            if (!empty($courser) && $courser->status == 0) {
                $courser->update(['status' => 1]);
                return $courser;
            }

            if (!empty($courser) && $courser->status == 1) {
                $courser->update(['status' => 0]);
                return $courser;
            }

            return false;
        } catch (\Throwable $e) {
            return $e->getMessage();
        }
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
