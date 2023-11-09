<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function list(Request $request){
        $classrooms = Classroom::with('teacher')->paginate(15);
        // $classrooms = Classroom::with('city','courses')->paginate(15);
        dd($classrooms);
        return view('app.classroom.list', ['classrooms' => $classrooms]);
    }

    public function edit($id){
        $teachers = Teacher::all();
        $classroom = Classroom::with('teacher')->where('id', $id)->first();
        // $classroom = Classroom::find($id)->with('teacher');
        // dd($classroom);
        return view('app.classroom.edit', compact('classroom', 'teachers'));
    }

    public function update(Request $request){
        $attributes = $request->all();
        $classroom = Classroom::find($attributes['id']);
        $classroom->teacher_id = $request->teacher_id; // Ver se tem como tirar
        $classroom->update($attributes);
        return redirect()->route('app.classroom.list');
    }

    public function delete($id)
    {
        Classroom::findOrFail($id)->delete();
        return redirect()->route('app.classroom.list');

        // return redirect('/client/search')//->with('msg-danger', 'Cliente deletado com sucesso'); // Retorna pra tela anterior atualizando os registros

    }

    public function add(Request $request)
    {
        
        $classroom = new Classroom;

        $classroom->UUID = $request->UUID;
        $classroom->description = $request->description;
        $classroom->teacher_id = $request->teacher_id;
        $classroom->save();

        return redirect()->route('app.classroom.list');

        // return redirect('/client/search')->with('msg-success', 'Cliente cadastrado com sucesso!');;
    }

    public function addForm()
    {
        $teachers = Teacher::all();
        return view('app.classroom.add', compact('teachers'));
    }
}
