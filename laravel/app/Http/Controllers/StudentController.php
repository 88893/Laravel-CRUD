<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        return view('studentindex', compact ('students')); 
        
    }
    public function showcreateform(){
        return view('studentcreate');
    }
    public function createStudent(Request $request){
   
        $incomingFields = $request->validate([
            'name' => 'required', 
            'surname' => 'required', 
            'adress' => 'required', 
            'class' => 'required',
            'ICE_number' => 'required'
        ]);
        Student::create($incomingFields);
  
        return redirect('/students');
    }
    public function deleteStudent(Student $student)
    {
            $student->delete();
        return redirect('/students');

     
    }
    public function showEditStudent(Student $student)
    {
  
        return view('studentedit', ['student' => $student]);
    }
    
    public function editStudent(Student $student, Request $request)
    {

        $incomingFields = $request->validate([
            'name' => 'required', 
            'surname' => 'required', 
            'adress' => 'required', 
            'class' => 'required',
            'ICE_number' => 'required'
        ]);

        
        $student->update($incomingFields);

        return redirect('/students');
    }
 
}

