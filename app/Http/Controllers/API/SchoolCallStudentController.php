<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Beacon;
use App\Models\SchoolCall;
use App\Models\Student;
use App\Models\Teacher;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SchoolCallStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $id = $request->input('id');
        $cpf = $request->input('cpf');

        $beacon = Beacon::with('teacher', 'teacher.schoolCalls', 'teacher.schoolSubjects')
            ->where('UUID', $id)
            ->first();

        if (!$beacon) {
            return response()->json(['error' => 'Beacon not found'], 404);
        }

        $teacher = $beacon->teacher;

        $student = Student::with('schoolSubjects')
            ->where('cpf', $cpf)
            ->first();

        if (!$student) {
            return response()->json(['error' => 'Student not found'], 404);
        }

        $schoolCall = SchoolCall::with('teacher', 'classroom', 'schoolSubject', 'students')
            ->where('teacher_id', $teacher->id)
            ->where('status', 'pending')
            ->where('date', Carbon::now()->format('Y-m-d'))
            ->first();

        if (!$schoolCall) {
            return response()->json(['error' => 'School call not found'], 404);
        }

        $arrayStudents = $schoolCall->students->pluck('id')->toArray();
        $result = array_merge($arrayStudents, [$student->id]);
        $schoolCall->students()->sync($result);

        return response()->json(['message' => 'Chamada atualizada com sucesso.'], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
