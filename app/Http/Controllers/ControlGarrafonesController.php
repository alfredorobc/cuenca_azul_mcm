<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ControlGarrafones;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ControlGarrafonesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos = ControlGarrafones::select([
            'control_garrafones.id',
            'control_garrafones.fecha_salida',
            'control_garrafones.fecha_entrada',
            'users.name',
            DB::raw('garrafones.id AS Numero')
        ])
            ->join('users', 'control_garrafones.user_id', '=', 'users.id')
            ->join('garrafones', 'control_garrafones.garrafon_id', '=', 'garrafones.id')
            ->whereNull('control_garrafones.fecha_entrada')
            ->get();

        return response()->json($datos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'user_id' => ['required','numeric'],
            'garrafon_ids' => ['required','array'],
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json([
                        'status' => false,
                        'otro'=>'dsds',
                        'errors' => $validator->errors()->all()
                    ],400);
        }

        $user_id = $request->input('user_id');
        $garrafon_ids = $request->input('garrafon_ids');
        $fecha_salida = Carbon::now();

        $garrafones_existentes = [];

        foreach ($garrafon_ids as $garrafon_id) {

            $existingRecord = ControlGarrafones::where('garrafon_id', $garrafon_id)
                            ->whereNull('fecha_entrada')
                            ->first();

            if (!$existingRecord) {
                // Si no existe, crear un nuevo registro
                ControlGarrafones::create([
                    'fecha_salida' => $fecha_salida,
                    'user_id' => $user_id,
                    'garrafon_id' => $garrafon_id,
                ]);
            }else{
                $garrafones_existentes[] = $garrafon_id;
            }

        }

        if(count($garrafones_existentes) > 0){

            return response()->json([
                        'status' => false,
                        'message' => count($garrafones_existentes) . ' garrafones de un total de '. count($garrafon_ids) .' ya tienen registro',
                        'data' => $garrafones_existentes
                    ],200);
        }else{

            return response()->json([
                        'status' => true,
                        'message' => 'registros creados exitosamente'
                    ],200);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function finalizarControl(Request $request) {
        $rules = [
            'garrafon_ids' => ['required','array']
        ];

        $validator = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return response()->json([
                        'status' => false,
                        'errors' => $validator->errors()->all()
                    ],400);
        }

        $garrafon_ids = $request->input('garrafon_ids');
        $fecha_entrada = Carbon::now();

        ControlGarrafones::whereIn('id', $garrafon_ids)->update([
            'fecha_entrada' => $fecha_entrada,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Registros actualizados exitosamente'
        ], 200);
    }
}
