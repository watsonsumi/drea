<?php

namespace App\Http\Controllers;
use App\Models\Establecimiento;

use Illuminate\Http\Request;

class EstablecimientoController extends Controller
{
    //
    public function index(Request $request){ 
        if ($request->ajax()) {
            $establecimiento = Establecimiento::all();
            return datatables()->of($establecimiento)
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->Codmodular.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->Codmodular.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';

                     return $btn;
                })->toJson();
        }        
        return view('drea.establecimiento');
        // return view('establecimiento', compact('establecimiento'));
    }
    public function store(Request $request){
        $establecimiento = Establecimiento::find($request->Codmodular);
        if(!$establecimiento){
         Establecimiento::Create($request->all());
        }else{
         Establecimiento::find($request->Codmodular)->update($request->all());
        }
        return response()->json(['success'=>'Se creo exitosamente ']);
        
    }
    public function edit($Codmodular)
    {       
        $establecimiento = Establecimiento::find($Codmodular);
        return response()->json($establecimiento);
    }
    public function destroy($Codmodular){
             
        Establecimiento::find($Codmodular)->delete();
        return response()->json(['success'=>'Se elimino exitosamente ']);
        
    }
}
