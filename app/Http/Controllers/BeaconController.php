<?php

namespace App\Http\Controllers;
use App\Models\Beacon;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class BeaconController extends Controller
{
    public function list(Request $request){
        $beacons = Beacon::with('teacher')->paginate(15);
        // $beacons = Beacon::with('city','courses')->paginate(15);

        return view('app.beacon.list', ['beacons' => $beacons]);
    }

    public function edit($id){
        $teachers = Teacher::all();
        $beacon = Beacon::with('teacher')->where('id', $id)->first();
        // $beacon = Beacon::find($id)->with('teacher');
        // dd($beacon);
        return view('app.beacon.edit', compact('beacon', 'teachers'));
    }

    public function update(Request $request){
        $attributes = $request->all();
        $beacon = Beacon::find($attributes['id']);
        $beacon->teacher_id = $request->teacher_id; // Ver se tem como tirar
        $beacon->update($attributes);
        session()->flash('message', 'Beacon atualizado com sucesso.');
        return redirect()->route('app.beacon.list');
    }

    public function delete($id)
    {
        Beacon::findOrFail($id)->delete();
        session()->flash('message', 'Beacon deletado com sucesso.');
        return redirect()->route('app.beacon.list');
    }

    public function add(Request $request)
    {

        $beacon = new Beacon;
        $beacon->UUID = $request->UUID;
        $beacon->description = $request->description;
        $beacon->teacher_id = $request->teacher_id;
        $beacon->save();
        session()->flash('message', 'Beacon adicionado com sucesso.');

        return redirect()->route('app.beacon.list');
    }

    public function addForm()
    {
        $teachers = Teacher::all();
        $UUID = Uuid::uuid4()->toString();
        return view('app.beacon.add', compact('teachers', 'UUID'));
    }
    }
