<?php



class HomeController extends BaseController {

    public function index()
    {
        $student = Student::all();

        $this->view('home/index', $student);
    }

}