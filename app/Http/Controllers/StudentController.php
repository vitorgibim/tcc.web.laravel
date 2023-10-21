<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\City;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function list(Request $request){
        $students = Student::paginate(15);

        foreach ($students as $key => $student) {
            $cities[$key] = City::where("id", $students[$key]->city_id)->first();
        }

        return view('app.student.list', ['students' => $students, 'cities' => $cities]);
    }

    public function edit($id){
        $student = Student::find($id);
        return view('app.student.edit', ['student' => $student]);
    }

    public function update(Request $request){
        $attributes = $request->all();
        $student = Student::find($attributes['id']);
        $student->update($attributes);
        return redirect()->route('app.student.list');
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->route('app.student.list');

        // return redirect('/client/search')//->with('msg-danger', 'Cliente deletado com sucesso'); // Retorna pra tela anterior atualizando os registros

    }

    public function add(Request $request)
    {

        $student = new Student;

        $student->name = $request->name;
        $student->ra = $request->ra;
        $student->cpf = $request->cpf;
        $student->email = $request->email;
        $student->address = $request->address;
        $student->address_number = $request->address_number;
        $student->neighborhood = $request->neighborhood;
        $student->city_id = $request->city_id;
        $student->course_id = $request->course_id;
        $student->save();

        return redirect()->route('app.student.list');

        // return redirect('/client/search')->with('msg-success', 'Cliente cadastrado com sucesso!');;
    }
}
