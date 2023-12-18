<?php

namespace App\Http\Controllers;
use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function list(Request $request){

        try{
            $classrooms = Classroom::paginate(15);
            // $classrooms = Classroom::with('teacher')->paginate(15);
            // $classrooms = Classroom::with('city','courses')->paginate(15);
            // dd($classrooms);
            return view('app.classroom.list', ['classrooms' => $classrooms]);

        }catch(\Exception $e){
            return redirect()->route('app.home');
        }
    }

    public function edit($id){
        // $t0eachers = Teacher::all();
        $classroom = Classroom::find($id)->first();
        // $classroom = Classroom::with('teacher')->where('id', $id)->first();
        // $classroom = Classroom::find($id)->with('teacher');
        // dd($classroom);
        return view('app.classroom.edit', compact('classroom'));
    }

    public function update(Request $request){
        $attributes = $request->all();
        $classroom = Classroom::find($attributes['id']);
        // $classroom->teacher_id = $request->teacher_id; // Ver se tem como tirar
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

        $classroom->number = $request->number;
        $classroom->description = $request->description;
        $classroom->save();

        return redirect()->route('app.classroom.list');

        // return redirect('/client/search')->with('msg-success', 'Cliente cadastrado com sucesso!');;
    }

    public function addForm()
    {
        // $teachers = Teacher::all();
        // return view('app.classroom.add', compact('teachers'));
        return view('app.classroom.add');
    }
}
