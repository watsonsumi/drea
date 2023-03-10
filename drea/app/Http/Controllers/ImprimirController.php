<?php

namespace App\Http\Controllers;

use App\Models\Planilla;
use Illuminate\Http\Request;
// use App\Http\Controllers\DB;
use DB;
use PDF;
class ImprimirController extends Controller
{
   
    public function index(Request $request){ 
        $planilla = Planilla::find($request->id);
        //Mediante carbon añadimos a la variable today el dia actual
        // $today = Carbon::now()->format('d/m/Y');
        //añadimos el nombre de la vista, en este caso "ejemplo" y la variable "today" que enviaremos a la vista.
       
        dd($planilla);
        return response()->json($planilla);
        $pdf = \PDF::loadView('drea.imprimir');
        //el metodo download descargará la vista en formato pdf, en el metodo download escribimos el nombre del archivo (ejemplo.pdf)
        return $pdf->download('ejemplo.pdf');
        
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        return view('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Planilla  $planilla
     * @return \Illuminate\Http\Response
     */
    public function show(Planilla $planilla)
    {
        //
    }

    
    public function edit($id)
    {
        $planilla = Planilla::find($id);
        $leagues = DB::table('haberes_descuentos')
        ->join('docente', 'docente.DNI', '=', 'haberes_descuentos.DOCENTE_DNI')
        ->where('docente.DNI', $planilla->DOCENTE_DNI)
        ->first();
        // dd($leagues);

        return response()->json($leagues);
        // dd($planilla);
        $pdf = \PDF::loadView('drea.imprimir');
        //el metodo download descargará la vista en formato pdf, en el metodo download escribimos el nombre del archivo (ejemplo.pdf)
        return $pdf->download('ejemplo.pdf');
    }

    
    public function update(Request $request, Planilla $planilla)
    {
        //
    }

    public function destroy($id)
    {
        Planilla::find($id)->delete();
        return response()->json(['success'=>'Se elimino exitosamente ']);
    }

    public function imprimir(){
    }
}
