

<div class="informacao-pagina" style="margin-top: 7%">
    <div class="row g-3 needs-validation justify-content-center mt-5" style="width: 75%; margin-left: 10%;">
        <form class="row g-3" wire:submit.prevent="create" method="post">
            @csrf

            <div>
                @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
            </div>
            <div class="col-md-12">
                <label for="validationCustom01"  class="form-label">Data</label>
                <input type="date" name="date" wire:model.live="date" value="{{ old('date') }}" class="form-control" id="validationCustom01" placeholder="YYYY-mm-dd" required>
               
                <div class="error-message">
                    @error('date')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom05"  class="form-label">Status</label>
                {{-- <input type="text" name="status" wire:model.live="status" value="{{ old('status') }}" class="form-control " placeholder="pending"  id="validationCustom05"> --}}
                <select wire:model.live="status" class="form-select" name="status">
                    <option value="">Selecione um status</option>
                    <option value="pending">Pendente</option>
                    <option value="finished">Concluída</option>
                </select>

                <div class="error-message">
                    @error('status')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom01"  class="form-label">Professor</label>
                <select wire:model="teacher_id" class="form-select" name="teacher">
                    <option value="">Selecione o Professor</option>
                    @if (!is_null($teachers) && (is_array($teachers) || is_object($teachers)))
                    @foreach ($teachers as $teacher)
                        <option {{ old('teacher') == $teacher->id ? 'selected' : '' }} value="{{ $teacher->id }}"> {{$teacher->name }}</option>
                    @endforeach
                    @else
                        <option value="0"> {{"Nenhum Professor Disponível"}}</option>
                    @endif
                </select>
                <div class="error-message">
                    @error('teacher_id')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label class="call_form">Disciplina</label>
                <select wire:model.live="school_subject_id" id="school_subject" name="school_subject_id" class="nice-select">
                    <option value="">Selecione a Disciplina</option>
                    @if (!is_null($school_subjects) && (is_array($school_subjects) || is_object($school_subjects)))
                    @foreach ($school_subjects as $school_subject)
                        <option {{ old('school_subject') == $school_subject->id ? 'selected' : '' }} value="{{ $school_subject->id }}"> {{$school_subject->name }}</option>
                    @endforeach
                    @else
                        <option value="0"> {{"Nenhuma Disciplina Disponível"}}</option>
                    @endif
                </select>
                <div class="error-message">
                    @error('school_subject_id')
                        {{$message}}
                    @enderror
                </div>
            </div>

            <div class="col-md-6">
                <label class="call_form">Selecione a Sala</label>
                <select   wire:model.live="classroom_id" id="classroom" name="classroom_id" class="nice-select">
                    <option value="">Selecione a Disciplina</option>
                    @if (!is_null($classrooms) && (is_array($classrooms) || is_object($classrooms)))
                    @foreach ($classrooms as $classroom)
                        <option {{ old('classroom') == $classroom->id ? 'selected' : '' }} value="{{ $classroom->id }}"> {{$classroom->number }}</option>
                    @endforeach
                    @else
                        <option value="0"> {{"Nenhuma Disciplina Disponível"}}</option>
                    @endif
                </select>

                <div class="error-message">
                    @error('classroom_id')
                        {{$message}}
                    @enderror
                </div>
            </div>

            {{-- Alunos --}}
            <div class="form-group col-md-6">

                <button class="btn btn-primary col-md-6 mt-2 d-flex " wire:click="addStudentSchoolCall"
                type="button">Clique para adicionar um Aluno</button>

            </div>
            @if ($student_school_call)
                @for ($i = 0; $i < $student_school_call; $i++)
                    
                    <div class="col-md-6">
                        <label for="validationCustom05">Aluno - {{ $i + 1 }}</label>
                        <select   wire:model.live="student_id.{{$i}}" id="student_id_{{$i}}" name="student_id_{{$i}}" class="nice-select">
                            <option >Selecione o Aluno</option>
                            @if (!is_null($students) && (is_array($students) || is_object($students)))
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}"> {{$student->name }}</option>
                                {{-- <option {{ old('student') == $student->id ? 'selected' : '' }} value="{{ $student->id }}"> {{$student->name }}</option> --}}
                            @endforeach
                            @else
                                <option value="0"> {{"Nenhum Aluno Disponível"}}</option>
                            @endif
                        </select>
        

                        <div class="error-message">
                            @error('student_id')
                                {{$message}}
                            @enderror
                        </div>
                    </div>


                @endfor
            @endif
            {{-- /-/-/-/ --}}
            <div class="container">
                <div class="col-md-4 d-flex justify-content-center" style="margin-left: 32%">
                    <button class="mt-3 btn btn-primary" name="btnCadastrar" type="submit">Cadastrar Chamada Escolar</button>
                </div>
            </div>
        </form>
    </div>
</div>