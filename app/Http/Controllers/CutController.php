<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cut;
use Carbon\Carbon;


class CutController extends Controller
{
    public function index(){
        $cortes = Cut::all(); 
        return view('cortes.index', compact('cortes'));
    }
    public function almacen(){
        $cortes = Cut::where('dt_status', '=', 'ALMACEN')->get();
        return view('cortes.almacen', compact('cortes'));
    }
    public function proceso(){
        $cortes = Cut::where('dt_status', '=', 'EN PROCESO')->get();
        return view('cortes.proceso', compact('cortes'));
    }
    public function terminado(){
        $cortes = Cut::where('dt_status', '=', 'TERMINADO')->get();
        return view('cortes.terminado', compact('cortes'));
    }
    public function entregado(){
        $cortes = Cut::where('dt_status', '=', 'ENTREGADO')->get();
        return view('cortes.entregado', compact('cortes'));
    }
    public function new(){
        return view('cortes.insert');
    }

    public function insert(Request $request){
        $date = Carbon::now();
        $change = new Cut;
        $change->dt_folionum = $request->input('dt_folionum');        
        $change->dt_clave = $request->input('dt_clave');
        $change->dt_color = $request->input('dt_color');
        $change->dt_talla = $request->input('dt_talla');
        $change->dt_descripcion = $request->input('dt_descripcion');
        $change->dt_piezas = $request->input('dt_piezas');
        $change->dt_numbulto = $request->input('dt_numbulto');
        $change->dt_composicion = $request->input('dt_composicion');
        $change->dt_corte = $request->input('dt_corte');
        $change->dt_bano = $request->input('dt_bano');
        $change->dt_codhilos = $request->input('dt_codhilos');
        $change->dt_numpedido = $request->input('dt_numpedido');
        $change->dt_status = $request->input('dt_status');
        $change->dt_ingreso = $date;
        $change->dt_proceso = 'Sin definir';
        $change->dt_terminado = 'Sin definir';
        $change->dt_entrega = 'Sin definir';
        $change->save();
        //$cortes = Cut::create($request->input());
        return redirect()->route('cortes.index');
    }

    public function updatealm(Request $request){
        try {
            // Buscar el usuario con ID 1 y actualizar su nombre
            $date = Carbon::now();
            Cut::where('id', $request->input('id'))->update(['dt_status' => $request->input('dt_status'),
            'dt_proceso' => $date]);
            if($request->input('dt_status') == 'ALMACEN'){
                return redirect()->route('cortes.almacen');
            }if ($request->input('dt_status') == 'EN PROCESO') {
                return redirect()->route('cortes.proceso');
            }if ($request->input('dt_status') == 'TERMINADO') {
                return redirect()->route('cortes.terminado');
            }if($request->input('dt_status') == 'ENTREGADO'){
                return redirect()->route('cortes.entregado');
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Manejar la excepción si el usuario no se encuentra
        }
        return redirect()->route('cortes.index');
    }
}
