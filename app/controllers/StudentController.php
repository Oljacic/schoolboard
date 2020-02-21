<?php

class StudentController extends BaseController {

    public function index($id)
    {
        $student = Student::where('id', $id)->first();

        $student = $student->toJson(JSON_PRETTY_PRINT);

        $this->view('student/index', $student);
    }
}