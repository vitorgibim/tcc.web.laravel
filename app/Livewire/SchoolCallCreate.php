<?php

namespace App\Livewire;
use App\Models\Classroom;
use App\Models\SchoolCall;
use App\Models\SchoolSubject;
use App\Models\Student;
use App\Models\Teacher;
use Livewire\Component;

class SchoolCallCreate extends Component
{
    public $name, $date, $teacher_id,$classroom_id, $school_subject_id, $status,$school_call, $student_school_call;
    public $teachers, $classrooms, $school_subjects, $students;
    public $student_id = [];

    protected $rules = [
        'date' => 'required|date',
        'teacher_id' => 'required',
        'classroom_id' => 'required',
        'school_subject_id' => 'required',
        'status' => 'required',
        'student_id'=>'required'
    ];

    public function updated($propertyName) //on the fly validation
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        $this->teachers = Teacher::all();
        $this->classrooms = Classroom::all();
        $this->school_subjects = SchoolSubject::all();
        $this->students = Student::all();
        return view('livewire.school-call-create', ['teachers'=>$this->teachers, 'school_subjects'=> $this->school_subjects,'classrooms'=>$this->classrooms,'school_subjects'=>$this->school_subjects, 'students'=>$this->students]);
    }

    public function create()
    {
        $this->validate();

        $school_call = new SchoolCall;
        $school_call->date = $this->date;
        $school_call->status = $this->status;
        $school_call->school_subject_id = $this->school_subject_id;
        $school_call->teacher_id = $this->teacher_id;
        $school_call->classroom_id = $this->classroom_id;
        $school_call->save();

        // O método sync sincroniza os IDs dos alunos associados ao chamado escolar. O método sync faz o trabalho de adicionar, atualizar e remover os registros na tabela pivot student_school_call para garantir que ela reflita corretamente os alunos associados ao chamado escolar.
        $school_call->students()->sync($this->student_id);

        $this->reset();
        sort($this->student_id);
        session()->flash('message', 'Chamada criada com sucesso.');
    }

    public function addStudentSchoolCall(){
        $this->student_school_call++;
    }
}
