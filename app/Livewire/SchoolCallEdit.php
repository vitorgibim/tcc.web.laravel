<?php

namespace App\Livewire;
use App\Models\Classroom;
use App\Models\SchoolCall;
use App\Models\SchoolSubject;
use App\Models\Student;
use App\Models\Teacher;
use Livewire\Component;
use Carbon\Carbon;

class SchoolCallEdit extends Component
{

    public $id;
    public $name, $date, $teacher_id,$classroom_id, $school_subject_id, $status,$school_call, $student_school_call;
    public $teachers, $classrooms, $school_subjects, $students;
    public $student_id, $student_id_has = [];

    public function mount($id){
        $this->id = $id;
    }

    public function render()
    {
        $this->teachers = Teacher::all();
        $this->classrooms = Classroom::all();
        $this->school_subjects = SchoolSubject::all();
        $this->students = Student::all();
        $this->school_call = SchoolCall::with('teacher','classroom','schoolSubject','students')->where('id', $this->id)->first();
        
        if($this->school_call) {
            $this->date = $this->school_call->date;
            $this->status = $this->school_call->status;
            $this->school_subject_id = $this->school_call->school_subject_id;
            $this->teacher_id = $this->school_call->teacher_id;
            $this->classroom_id = $this->school_call->classroom_id;
        }else{
            session()->flash('message', 'Não foi possível carregar a chamada.');
            return redirect()->route('app.school_call.list');
        }

        return view('livewire.school-call-edit', ['school_call'=>$this->school_call, 'teachers'=>$this->teachers, 'school_subjects'=> $this->school_subjects,'classrooms'=>$this->classrooms,'school_subjects'=>$this->school_subjects, 'students'=>$this->students]);
        
    }

    public function update()
    {
        // $this->validate();

        $attributes = $this->all();
        $school_call = SchoolCall::find($attributes['id']);
        $school_call->teacher_id = $this->teacher_id;
        $school_call->school_subject_id = $this->school_subject_id;
        $school_call->classroom_id = $this->classroom_id;
        $school_call->update($attributes);
        $arrayStudents = $school_call->students->pluck('id')->toArray();
        $result = array_merge($arrayStudents, $this->student_id);

        // O método sync sincroniza os IDs dos alunos associados ao chamado escolar. O método sync faz o trabalho de adicionar, atualizar e remover os registros na tabela pivot student_school_call para garantir que ela reflita corretamente os alunos associados ao chamado escolar.
        $school_call->students()->sync($result);
        
        // $this->reset();
        session()->flash('message', 'Chamada atualizada com sucesso.');
        return redirect()->route('app.school_call.list');
    } 

    public function edit($id){
        $this->teachers = Teacher::all();
        $this->classrooms = Classroom::all();
        $this->school_subjects = SchoolSubject::all();
        $school_call = SchoolCall::with('teacher','classroom','schoolSubject','students')->where('id', $id)->first();
        return view('app.school_call.edit', compact('school_call', 'teachers','classrooms','school_subjects'));
    }

    public function addStudentSchoolCall(){
        $this->student_school_call++;
    }
}
