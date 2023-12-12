<?php

namespace App\Livewire;
use App\Models\Classroom;
use App\Models\SchoolCall;
use App\Models\SchoolSubject;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Beacon;
use Livewire\Component;
use Carbon\Carbon;

class SchoolCallStudent extends Component
{

    public $data=[],$id,$cpf,$teacher;
    public $name, $date, $teacher_id,$classroom_id, $school_subject_id, $status,$school_call, $student_school_call;
    public $teachers, $classrooms, $school_subjects, $students;
    public $student_id = [], $student_id_has = [], $beacon, $student;

    public function mount($data){
        $this->id = $data['id'];
        $this->cpf = $data['cpf'];
    }

    public function render()
    {
        $this->beacon = Beacon::with('teacher','teacher.schoolCalls','teacher.schoolSubjects')->where('UUID', $this->id)->first();
        $this->teacher = $this->beacon->teacher;
        $this->student = Student::with('schoolSubjects')->where('cpf', $this->cpf)->first();
        $this->school_call = SchoolCall::with('teacher','classroom','schoolSubject','students')
            ->where('teacher_id', $this->teacher->id)
            ->where('date', Carbon::now()->format('Y-m-d'))
            ->where('status', 'pending')
            ->first();
        if ($this->school_call && $this->student && $this->beacon) {
            $arrayStudents = $this->school_call->students->pluck('id')->toArray();
            $result = array_merge($arrayStudents, [$this->student->id]);
            $this->school_call->students()->sync($result);
            session()->flash('message', 'Chamada atualizada com sucesso.');
            return view('livewire.school-call-create');

            return redirect()->route('livewire.school-call-editd');
            // dd($this->school_call);
        }else{
            dd("n rolou");
        }
    
        
    }
}
