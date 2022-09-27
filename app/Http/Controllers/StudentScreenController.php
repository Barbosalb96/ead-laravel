<?php

namespace App\Http\Controllers;

use App\Services\StudentsService\StudentsService;
use Illuminate\Http\Request;

class StudentScreenController extends Controller
{
    public function index(int $studentID)
    {
        $data = (new StudentsService())->infoStudent($studentID);
        return view('pages.StudentScreen.index', ['info' => $data]);

    }
}
