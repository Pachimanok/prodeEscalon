<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\prediccion;


class prediccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->name;
        $predicciones = db::table('prediccions')->where('usuario','=',$user)->get();
        
        $partidos = db::table('partidos')->join('prediccions','prediccions.partidoId','=','partidos.id')->get();
        dd($partidos);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->name;
        $jugador = db::table('jugadores')->where('usuario','=',$user)->get();
        $partidos = db::table('partidos')->get();
        

        return view('formularios.cargarPrediccion')->with('partidos',$partidos)->with('jugador',$jugador);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user()->name;

        foreach($request->get('goles_local') as $idgl=>$cantidad){ /* Sacamos ID del Partido y Goles que puso el Usuario */

            $q = DB::table('partidos')->where('id','=', $idgl)->get(); /* con el ID sacamos los datos que nos interesan del Partido */
            $pid = $q[0]->id;
            $gl = $cantidad;

            $qe = DB::table('prediccions')->where('partidoId','=', $pid)->get(); /* revisamos si existe prediccion */
            $existe = $qe[0];

            if($existe != null){ /* si ya tiene una prediccion cambiamos el ganador */

                if($existe->golesLocal > $existe->golesVisita ){

                    $ganador = 'L';

                }elseif($existe->golesLocal < $existe->golesVisita){

                    $ganador = 'V';

                }else{

                    $ganador = 'E';
                }
                
                DB::table('prediccions')->where('partidoID','=', $pid)->update([
              
                    'golesLocal' => $gl,
                    'ganador' => $ganador
    
                ]);

            }else{ /* sino cargamos los resultados */

                $prediccion = new prediccion();
                $prediccion->usuario = $user;
                $prediccion->partidoId= $pid;
                $prediccion->golesLocal = $cantidad;
                $prediccion->save();
            }
        }

        foreach($request->get('goles_visita') as $idgv=>$cant_visita){ /* Sacamos ID del Partido y Goles que puso el Usuario */

            $gv = $cant_visita;

            DB::table('prediccions')->where('partidoID','=', $pid)->update([
              
                'golesVisita' => $gv,
                
                ]);
            
            $q2= DB::table('prediccions')->where('partidoId','=', $pid)->get();
            $existe = $q2[0];


            if($existe->golesLocal > $existe->golesVisita ){

                $ganador = 'L';

            }elseif($existe->golesLocal < $existe->golesVisita){

                $ganador = 'V';

            }else{

                $ganador = 'E';
            }

            DB::table('prediccions')->where('partidoID','=', $pid)->update([
              
            'ganador' => $ganador ]);
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
