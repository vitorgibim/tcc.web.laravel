

<div class="informacao-pagina" style="margin-top: 7%">
    <div class="row g-3 needs-validation justify-content-center mt-5" style="width: 75%; margin-left: 10%;">
        <form class="row g-3" wire:submit.prevent="update" method="put">
            @csrf
            <div class="col-md-12">
                <label for="validationCustom01"  class="form-label">Data</label>
                <input type="date" name="date" wire:model="date" value="{{ old('date') }}" class="form-control" id="validationCustom01" placeholder="YYYY-mm-dd" required>
               
                <div class="error-message">
                    @error('date')
                        {{$message}}
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <label for="validationCustom05"  class="form-label">Status</label>
                <select wire:model="status" class="form-select" name="status">
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
                <select wire:model="school_subject_id" id="school_subject" name="school_subject_id" class="nice-select">
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
                <select   wire:model="classroom_id" id="classroom" name="classroom_id" class="nice-select">
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
            {{--Alunos já existentes --}}
            @if ($school_call)
                
            @if ($school_call->students)
            <div class="col-md-6">
                
                <ul>
                            @foreach ($school_call->students as $student)
                            <li style="list-style-type: none">
                                {{-- <button wire:click="removeStudent({{ $student->name }})">
                                  Remover
                                </button> --}}
                                {{ $student->name }}
                              </li> 

                            {{-- <button wire:click="removeStudent({{ $student }})" wire:without-refresh>
                            Remover  
                            </button> --}}
                            {{-- <li wire:model = "student_id_has.{{$student->id}}">{{$student->name }}</li>  --}}
                            @endforeach
                          </ul>

                        {{-- <label for="validationCustom05">Aluno - {{ $loop->index+1 }}</label>
                        <select   wire:model="student_id_has.{{$student->id}}" id="student_id{{$student->id}}" name="student_id{{$student->id}}" class="nice-select">
                            <option value="{{ $student->id }}"> {{$student->name }}</option>
                            <option >Remover o Aluno</option>
                               
                        </select> --}}
                    </div>
                {{-- @endforeach --}}
            @endif
            @endif
            <br>
            {{-- //-/-/-/-/ --}}
            {{-- Alunos --}}
            <div class="form-group col-md-6">

                <button class="btn btn-primary col-md-6 mt-2 d-flex " wire:click="addStudentSchoolCall"
                type="button">Clique para adicionar um Aluno</button>


            </div>
            @if ($student_school_call)
                @for ($i = 0; $i < $student_school_call; $i++)
                    
                    <div class="col-md-6">
                        <label for="validationCustom05">Aluno - {{ $i + 1 }}</label>
                        <select   wire:model="student_id.{{$i}}" id="student_id_{{$i}}" name="student_id_{{$i}}" class="nice-select">
                            <option >Selecione o Aluno</option>
                            @if (!is_null($students) && (is_array($students) || is_object($students)))
                            @foreach ($students as $student)
                                <option value="{{ $student->id }}"> {{$student->name }}</option>
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
                    <button class="mt-3 btn btn-primary" name="btnCadastrar" type="submit">Atualizar Chamada Escolar</button>
                </div>
            </div>
        </form>
    </div>
</div>