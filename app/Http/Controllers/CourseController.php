<?php

namespace App\Http\Controllers;

use App\Models\Course;


use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function list(Request $request){
        $courses = Course::paginate(15);
        // $courses = Course::with('city','courses')->paginate(15);

        return view('app.course.list', ['courses' => $courses]);
    }

    public function edit($id){
        $course = Course::where('id', $id)->first();

        return view('app.course.edit', compact('course'));
    }

    public function update(Request $request){
        $attributes = $request->all();
        $course = Course::find($attributes['id']);
        $course->update($attributes);
        return redirect()->route('app.course.list');
    }

    public function delete($id)
    {
        Course::findOrFail($id)->delete();
        return redirect()->route('app.course.list');

        // return redirect('/client/search')//->with('msg-danger', 'Cliente deletado com sucesso'); // Retorna pra tela anterior atualizando os registros

    }

    public function add(Request $request)
    {
        
        $course = new Course;

        $course->UUID = $request->UUID;
        $course->description = $request->description;
        $course->teacher_id = $request->teacher_id;
        $course->save();

        return redirect()->route('app.course.list');

        // return redirect('/client/search')->with('msg-success', 'Cliente cadastrado com sucesso!');;
    }

    public function addForm()
    {
        // $teachers = Teacher::all();
        return view('app.course.add');
    }
}
