<?php

namespace App\Services\SubjectService;

use App\Models\Subject;

class SubjectService
{

    public function store(array $subjectData)
    {
        return Subject::create($subjectData);
    }
}
