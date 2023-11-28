<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\SchoolCall;
use App\Models\SchoolSubject;
use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;

class SchoolCallController extends Controller
{
    public function list(Request $request){
        $school_calls = SchoolCall::with('teacher','classroom','schoolSubject','students')->paginate(15);
        // $school_calls = SchoolCall::with('city','courses')->paginate(15);
        // dd($school_calls);
        return view('app.school_call.list', ['school_calls' => $school_calls]);
    }

    public function edit($id){
        $teachers = Teacher::all();
        $classrooms = Classroom::all();
        $school_subjects = SchoolSubject::all();
        $school_call = SchoolCall::with('teacher','classroom','schoolSubject','students')->where('id', $id)->first();

        // dd($school_call);
        return view('app.school_call.edit', compact('school_call', 'teachers','classrooms','school_subjects'));

    }

    public function update(Request $request){
        $attributes = $request->all();
        $school_call = SchoolCall::find($attributes['id']);
        $school_call->teacher_id = $request->teacher_id; // Ver se tem como tirar
        $school_call->school_subject_id = $request->school_subject_id; // Ver se tem como tirar
        $school_call->classroom_id = $request->classroom_id; // Ver se tem como tirar
        $school_call->update($attributes);
        return redirect()->route('app.school_call.list');
    }

    public function delete($id)
    {
        SchoolCall::findOrFail($id)->delete();
        return redirect()->route('app.school_call.list');

        // return redirect('/client/search')//->with('msg-danger', 'Cliente deletado com sucesso'); // Retorna pra tela anterior atualizando os registros

    }

    public function add(Request $request)
    {
        // INSERT INTO `school_calls`(`date`, `school_subject_id`, `teacher_id`, `classroom_id`, `status`) VALUES ('2023-11-09 03:18:31','1','2','2','Pending')
        // INSERT INTO `student_school_call`(`student_id`, `school_call_id`) VALUES ('2','1');
        $school_call = new SchoolCall;

        $school_call->date = $request->date;
        $school_call->status = $request->status;
        $school_call->school_subject_id = $request->school_subject_id;
        $school_call->teacher_id = $request->teacher_id;
        $school_call->classroom_id = $request->classroom_id;

        $school_call->save();

        return redirect()->route('app.school_call.list');

        // return redirect('/client/search')->with('msg-success', 'Cliente cadastrado com sucesso!');;
    } 

    public function addForm()
    {
        $teachers = Teacher::all();
        $classrooms = Classroom::all();
        $school_subjects = SchoolSubject::all();
        $students = Student::all();
        return view('app.school_call.add', compact('teachers','classrooms','school_subjects', 'students'));
    }
}
