<?php

namespace App\Http\Controllers;
use App\Models\Beacon;
use Illuminate\Http\Request;

class BeaconController extends Controller
{
    public function list(Request $request){
        $beacons = Beacon::with('teacher')->paginate(15);
        // $beacons = Beacon::with('city','courses')->paginate(15);

        return view('app.beacon.list', ['beacons' => $beacons]);
    }

    public function edit($id){
        $beacon = Beacon::find($id);
        return view('app.beacon.edit', ['beacon' => $beacon]);
    }

    public function update(Request $request){
        $attributes = $request->all();
        $beacon = Beacon::find($attributes['id']);
        $beacon->update($attributes);
        return redirect()->route('app.beacon.list');
    }

    public function delete($id)
    {
        Beacon::findOrFail($id)->delete();
        return redirect()->route('app.beacon.list');

        // return redirect('/client/search')//->with('msg-danger', 'Cliente deletado com sucesso'); // Retorna pra tela anterior atualizando os registros

    }

    public function add(Request $request)
    {

        $beacon = new Beacon;

        $beacon->name = $request->name;
        $beacon->cpf = $request->cpf;
        $beacon->email = $request->email;
        $beacon->address = $request->address;
        $beacon->address_number = $request->address_number;
        $beacon->neighborhood = $request->neighborhood;
        $beacon->city_id = $request->city_id;
        $beacon->save();

        return redirect()->route('app.beacon.list');

        // return redirect('/client/search')->with('msg-success', 'Cliente cadastrado com sucesso!');;
    }
}
