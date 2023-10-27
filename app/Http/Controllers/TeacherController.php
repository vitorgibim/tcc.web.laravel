<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use App\Models\City;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function list(Request $request){
        // $teachers = Teacher::paginate(15);

        $teachers = Teacher::with('city','courses')->paginate(15);
        // dd($clients);
        // foreach ($teachers as $key => $teacher) {
        //     $cities[$key] = City::where("id", $teachers[$key]->city_id)->first();
        // }

        return view('app.teacher.list', ['teachers' => $teachers]);
    }

    public function edit($id){
        $teacher = Teacher::find($id);
        return view('app.teacher.edit', ['teacher' => $teacher]);
    }

    public function update(Request $request){
        $attributes = $request->all();
        $teacher = Teacher::find($attributes['id']);
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
}
