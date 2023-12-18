<?php

namespace App\Http\Controllers;

use App\Models\SchoolSubject;
use Illuminate\Http\Request;

class SchoolSubjectController extends Controller
{
    public function list(Request $request){
        try{

            $school_subjects = SchoolSubject::paginate(15);
            // $school_subjects = SchoolSubject::with('city','school_subjects')->paginate(15);
    
            return view('app.school_subject.list', ['school_subjects' => $school_subjects]);
        }catch(\Exception $e){
            return redirect()->route('app.home');
        }
    }

    public function edit($id){
        $school_subject = SchoolSubject::where('id', $id)->first();

        return view('app.school_subject.edit', compact('school_subject'));
    }

    public function update(Request $request){
        $attributes = $request->all();
        $school_subject = SchoolSubject::find($attributes['id']);
        $school_subject->update($attributes);
        return redirect()->route('app.school_subject.list');
    }

    public function delete($id)
    {
        SchoolSubject::findOrFail($id)->delete();
        return redirect()->route('app.school_subject.list');

        // return redirect('/client/search')//->with('msg-danger', 'Cliente deletado com sucesso'); // Retorna pra tela anterior atualizando os registros

    }

    public function add(Request $request)
    {
        
        $school_subject = new SchoolSubject;

        $school_subject->workload = $request->workload;
        $school_subject->name = $request->name;
        $school_subject->save();

        return redirect()->route('app.school_subject.list');

        // return redirect('/client/search')->with('msg-success', 'Cliente cadastrado com sucesso!');;
    }

    public function addForm()
    {
        // $teachers = Teacher::all();
        return view('app.school_subject.add');
    }
}
