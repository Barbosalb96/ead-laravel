<?php

namespace App\Services\StudentsService;

use App\Http\Helpers\FormatDataStudent;
use App\Http\Helpers\FomatMetaData;
use App\Models\Student;
use App\Services\AddressService\AddressService;
use App\Services\courseService\CourseService;
use Illuminate\Support\Facades\Log;

class StudentsService
{
    public function studentsRecent()
    {
        return Student::with(['Course', 'MetaData'])
            ->tenRecent();
    }


    public function statusAluno($id)
    {
        try {
            $student = Student::where('id', $id)->first();

            if (isset($student) && $student->status == 'Desativado') {
                $student->update(['status' => 1]);
                return $student;
            }

            $student->update(['status' => 0]);

        } catch (\Throwable $e) {
            return $e->getMessage();
        }

    }

    public static function findStudent(int $student)
    {
        return Student::with(['address', 'Course', "MetaData"])
            ->where('students.id', $student)->first();
    }

    public function store(array $studentData): bool
    {

        try {

            $student = Student::create(FormatDataStudent::formatDataAlunoHelper($studentData));

            (new CourseService())->createStudentCourse($studentData, $student->id);

            foreach (FomatMetaData::formatMetaDataHelper($studentData) as $key => $meta) {
                $student->MetaData()->create([
                    'key' => $key,
                    'value' => $meta
                ]);
            }

            AddressService::createAddress($studentData, $student->id);
            return true;

        } catch (\Throwable $e) {
            Log::debug($e->getMessage());
            return false;
        }
    }


}

