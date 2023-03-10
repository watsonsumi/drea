<?php

namespace App\Http\Controllers;
use App\Models\Docente;
use App\Models\Establecimiento;

use Illuminate\Http\Request;

class DocenteController extends Controller
{
    //
    public function index(Request $request){     
                if ($request->ajax()) {
                    $docente = Docente::all();
                    return datatables()->of($docente)
                        ->addColumn('action', function ($row) {
                            $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->DNI.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editBook">Edit</a>';
                            $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->DNI.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteBook">Delete</a>';
   
                             return $btn;
                        })->toJson();
                }        
                return view('drea.docente'); 
    }
    public function store(Request $request){
        $establecimiento = Establecimiento::all();
        dd($establecimiento);
        $docente = Docente::find($request->DNI);
        if(!$docente){
         Docente::Create($request->all());
        }else{
         Docente::find($request->DNI)->update($request->all());
        }
        return response()->json(['success'=>'Se creo exitosamente ']);
        
    }
    public function edit($DNI)
    {       
        $docente = Docente::find($DNI);
        return response()->json($docente);
    }
    public function destroy($DNI){
             
        Docente::find($DNI)->delete();
        return response()->json(['success'=>'Se elimino exitosamente ']);
        
    }

}
