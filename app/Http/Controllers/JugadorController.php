<?php

namespace App\Http\Controllers;

use App\Models\jugadore;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('home');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $jugador = new jugadore();
        $jugador->nombre = $request->get('nombre');
        $jugador->apellido = $request->get('apellido');
        $jugador->celular = $request->get('celular');
        $jugador->email = $request->get('email');
        $jugador->estado = 'en inscripcion';
        $jugador->save(); 

        
        $jug = jugadore::latest('id')->get();
        
        return view('tipo')->with('jugador',$jug);




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

       $participacion = jugadore::find($id);
       $participacion->participacion_ronda = $request->get('porronda');
       $participacion->participacion_fecha = $request->get('porfecha');
       $participacion->save();

       if($request->get('porronda') == 'on'){

            $ronda = '250';
            $inscripcion = 'por Ronda';


       }else{

           $ronda = '0';
       }

       if($request->get('porfecha') == 'on'){

            $fecha= '500';
            $inscripcion = 'por Fecha';


            if($request->get('porronda') == 'on'){

            $inscripcion = 'Ambas';

            }

        }else{

            $fecha = '0';
        }
        $total = $ronda + $fecha;
        $jugador = db::table('jugadores')->where('id','=',$id)->get();
        
        

        return view('inscripcionok')->with('total',$total)->with('inscripcion',$inscripcion)->with('jugador',$jugador);


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
