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
        $cities = City::all();
        $student = Student::with('city')->where('id', $id)->first();

        return view('app.student.edit', compact('cities', 'student'));
    }

    public function update(Request $request){
        $attributes = $request->all();
        $student = Student::find($attributes['id']);
        $student->city_id = $request->city_id; 
        $student->update($attributes);
        return redirect()->route('app.student.list');
    }

    public function delete($id)
    {
        Student::findOrFail($id)->delete();
        return redirect()->route('app.student.list');

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
        $student->save();

        return redirect()->route('app.student.list');

        // return redirect('/client/search')->with('msg-success', 'Cliente cadastrado com sucesso!');;
    }

    public function addForm()
    {
        $cities = City::all();
        return view('app.student.add', compact('cities'));
    }
}
