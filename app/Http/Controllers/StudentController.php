<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $student=Student::all();
        // dd($student);
        return view('student.index', [
            'student' => $student
        ] );
    }
    public function create()
    {
        return view('student.create');
    }
    public function store(studentRequest $request)
    {
        Student::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'is_added'=>0

        ]);

        $request->session()->flash('alert--success','Registered Successfully!' );
        return redirect()->route('student.index');
    }
    public function delete(Request $request)
{
    $student = Student::find($request->student_id);
    if (!$student) {
        request()->session()->flash('error', 'Unable to locate');
        return to_route('student.index')->withErrors([
            'error' => 'Unable to locate'
        ]);
}
  $student->delete();
  $request->session()->flash('alert-info', 'Student deleted successfully!');
  return to_route('student.index');
}

}
