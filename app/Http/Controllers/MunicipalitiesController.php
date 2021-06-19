<?php

namespace App\Http\Controllers;

use DB;
use Carbon;
use Exception;
use App\Models\State;
use App\Models\Region;
use App\Models\Municipality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MunicipalitiesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('auditoria');
    }

    public function getViewMunicipality()
    {

        $muncipalitiesByRegion = DB::table('users as a')
            ->join('regions as b', 'b.id', 'a.region_id')
            ->join('municipalities as c', 'b.id', 'c.region_id')
            ->select('c.municipality')
            ->where('a.menuroles', '=', 'user,auditoria')
            ->where('b.status', '=', 0)
            ->where('a.id', '=', Auth::user()->id)
            ->get();


        $regions = Region::all('id','region');
        return view('dashboard.organ_control.module_municipalities.municipality', compact('regions'));
    }

    public function updateMunicipality(Request $request, $id)
    {
        $munipalityActive = Municipality::find($id);
        DB::beginTransaction();
        try {
            $munipalityActive->status = 1;
            $munipalityActive->save();
            DB::commit();
            return response()->json(['status' => true, 'data' => $munipalityActive, 'message' => 'Municipio activado correctamente']);
        }catch(Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'message' => 'Ha ocurrido un error al activar su municipio']);
        }
    }

    public function getViewMunicipalityForRegion(Request $request, $id)
    {
        $municipalitiesForRegions = DB::table('regions as a')
            ->join('municipalities as b','a.id','b.region_id')
            ->where('b.region_id', '=',  $id)
            ->get();
        return view('dashboard.organ_control.module_municipalities.municipalities', compact('municipalitiesForRegions'));
    }

    public function getViewMunicipalityAnnexed()
    {
        return view('dashboard.organ_control.module_municipalities.annexed');
    }
}
