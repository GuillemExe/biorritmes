<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use \Datetime;


class CalculBio extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = [
            'Primer nombre',
            'Segundo nombre',
            'Tercer nombre'
        ];

        return view('bio.bioIndex', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('bio.bioForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $nombre = $request->input('name');
            $dataNeixement = new Datetime($request->input('birthdate'));
            $sysdate = new Datetime(date('d/m/Y'));

            $diff = $dataNeixement->diff($sysdate);
            $dies = $diff->days;

            if ($dataNeixement > $sysdate) {
                return view('index',['nom'=>'Index per tonto']);
            }

            return view('bio.bioResult',['nomUsuari'=>$nombre, 'dataNeixement'=>$dataNacimiento, 'dies'=>$dies, 
            'progresFis'=>(($dies % 23) / 23) * 100, 'progresEmo'=>(($dies % 28) / 28) * 100, 'progresInt'=>(($dies % 33) / 33) * 100]);

        } catch (\Exception $e) {
            
            return view('bio.bioError');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
