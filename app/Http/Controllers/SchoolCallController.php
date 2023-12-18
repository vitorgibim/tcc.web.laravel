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
    public function list(){
        try{
            $school_calls = SchoolCall::with('teacher','classroom','schoolSubject','students')->paginate(15);
            return view('app.school_call.list', ['school_calls' => $school_calls]);

        }catch(\Exception $e){
            return redirect()->route('app.home');
        }
    }

    public function edit($id){
        return view('app.school_call.edit', ['id'=>$id]);
    }

    public function delete($id)
    {
        SchoolCall::findOrFail($id)->delete();
        session()->flash('message', 'Chamada deletada com sucesso.');
        return redirect()->route('app.school_call.list');

    }

    public function addForm()
    {
        return view('app.school_call.add');
    }
}
