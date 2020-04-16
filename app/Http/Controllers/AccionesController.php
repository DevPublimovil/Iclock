<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ActionResource;
use Auth;
use PDF;
use App\User;
use App\Action;
use \Carbon\Carbon as Fecha;
use DataTables;

class AccionesController extends Controller
{
    private $actions = [
        'Nombramiento interno','Amonestación verbal','Tardanza','Nombramiento con un mes de prueba',
        'Amonestación escrita','Traslado','Vacaciones anuales','Capacitación','Ascenso','Indemnización',
        'Descuento de un día','Ingreso','Finalización de contrato sin responsabilidad para la empresa',
        'Falta grave','Aumento de sueldo','Incapacidades','Permiso de minutos','Bonificación'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \view('empleados.history');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(Auth::id());
        $actions = $this->actions;
        return \view('actions.newaction', \compact('user','actions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selected = '';
        foreach($request->items as $items)
        {
            $selected .= $items.',';
        }
       
        $name = \Carbon\Carbon::now()->format('Y_m_d_H_mm_ss');
        
        $user = User::find(Auth::id());
        

        $action = Action::create([
            'items' => $selected,
            'user_id' => $user->id,
            'description' => $request->description,
            'other_action' => $request->other_action,
            'salary' => $request->salary
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $actions  = $this->actions;
        $action = Action::find($id);
        $items = explode(',',$action->items);
        $rrhh = User::where('role_id',4)->first();
        $pdf = \PDF::loadView('reports.actionpdf', [
            'action' => $action,
            'actions' => $actions,
            'items' => $items,
            'rrhh' => $rrhh
        ])->setPaper('legal');
        $name = Fecha::parse($action->created_at)->format('Y_m_d_H_m');
        return $pdf->stream($name .'.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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

    public function getactions()
    {
        return ActionResource::collection(auth()->user()->actions()->orderBy('created_at','DESC')->get());
    }
}
 