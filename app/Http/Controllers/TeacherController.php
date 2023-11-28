<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\City;
use App\Models\Course;
use App\Models\SchoolSubject;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list(Request $request){
        // $teachers = Teacher::paginate(15);

        $teachers = Teacher::with('city','schoolSubjects')->paginate(15);

        return view('app.teacher.list', ['teachers' => $teachers]);
    }

    public function edit($id){
        $cities = City::all();
        $schoolSubjects = SchoolSubject::all();
        $teacher = Teacher::with('city','schoolSubjects')->where('id', $id)->first();

        return view('app.teacher.edit', compact('cities', 'teacher','schoolSubjects'));
    }

    public function update(Request $request){
        $attributes = $request->all();
        $teacher = Teacher::find($attributes['id']);
        $teacher->city_id = $request->city_id; // Ver se tem como tirar
        // $teacher->schoolSubjects->school_subject_id = $request->school_subject_id; // Ver se tem como tirar

        $teacher->update($attributes);
        return redirect()->route('app.teacher.list');
    }

    public function delete($id)
    {
        Teacher::findOrFail($id)->delete();
        return redirect()->route('app.teacher.list');

        // return redirect('/client/search')//->with('msg-danger', 'Cliente deletado com sucesso'); // Retorna pra tela anterior atualizando os registros

    }

    public function add(Request $request)
    {

        $teacher = new Teacher;

        $teacher->name = $request->name;
        $teacher->cpf = $request->cpf;
        $teacher->email = $request->email;
        $teacher->address = $request->address;
        $teacher->address_number = $request->address_number;
        $teacher->neighborhood = $request->neighborhood;
        $teacher->city_id = $request->city_id;
        $teacher->save();

        return redirect()->route('app.teacher.list');

        // return redirect('/client/search')->with('msg-success', 'Cliente cadastrado com sucesso!');;
    }

    public function addForm()
    {
        $cities = City::all();
        $schoolSubjects = SchoolSubject::all();
        return view('app.teacher.add', compact('cities', 'schoolSubjects'));
    }
}
