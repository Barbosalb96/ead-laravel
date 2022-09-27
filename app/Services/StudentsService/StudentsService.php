<?php

namespace App\Services\StudentsService;

use App\Http\Helpers\FormatDataStudent;
use App\Http\Helpers\FomatMetaData;
use App\Models\Student;
use App\Services\AddressService\AddressService;
use App\Services\CourseService\CourseService;
use Illuminate\Support\Facades\Log;

class StudentsService
{
    public function studentsRecent()
    {
        return Student::with(['Course', 'MetaData'])
                 ->tenRecent();
    }


    public function statusStudent($id)
    {
        try {
            $student = Student::where('id', $id)->first();

            if (!empty($student) && $student->status == 0) {
                $student->update(['status' => 1]);
                return $student;
            }

            if (!empty($student) && $student->status == 1) {
                $student->update(['status' => 0]);
                return $student;
            }

            return false;
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

            $student = Student::create(FormatDataStudent::formatDataStudentHelper($studentData));

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

