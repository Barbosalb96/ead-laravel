<?php

namespace App\Services\SubjectService;

use App\Models\Course;
use App\Models\Subject;

class SubjectService
{
    public function getSubjectCourse(int $course)
    {
        return Course::with(['Subject' => function ($query) {
            $query->orderBy('module_id', 'asc');
        }])->findOrFail($course);
    }

    public function store(array $subjectData)
    {
        return Subject::create($subjectData);
    }
}
