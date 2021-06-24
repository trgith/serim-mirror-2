<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Carbon\Carbon;
use App\Models\Area;
use App\Models\Dependency;
use App\Models\Region;
use App\Models\Annexed;
use App\Models\AnnexedCatalogDependency;
use App\Models\Municipality;
use Illuminate\Http\Request;
use App\Models\AnnexedCatalogDependency;
use App\Http\Requests\DependencyRequest;

class DependenciesController extends Controller
{

    public function __constructor()
    {
        $this->middleware('auth');
        $this->middleware('contraloria');

    }
    public function getViewDependency()
    {
        $getAreasAnnexeds = Area::all()->with('annexed_catalog_areas');
        dd($getAreasAnnexeds);

        $dependencies = Dependency::all('id', 'name_dependency', 'address', 'exterior_number', 'interior_number', 'telephone');
        $regions = Region::all('id', 'region', 'status');
        $municipalities = Municipality::all('id', 'municipality', 'region_id');
        $areas = Area::all();

        return view('dashboard.organ_control.module_dependencies.dependency', compact('dependencies', 'regions', 'municipalities','areas'));

    }

    public function storeDependency(DependencyRequest $request)
    {
       DB::beginTransaction();
        try {

            $dependency = Dependency::create([
                'name_dependency' => $request->input('name_dependency'),
                'address' => $request->input('address'),
                'exterior_number' => $request->input('exterior_number'),
                'interior_number' => $request->input('interior_number'),
                'telephone' => $request->input('telephone'),
                'municipality_id' => $request->input('municipality_id'),
                'created_at' => Carbon::now(),
                'updated_at' => null
            ]);

            DB::commit();

            //asignamos en la tabla de annexed_catalog_dependency
            $this->assignedAnnexeds($request->input('assignedAnnexes'), $dependency->id);

            return response()->json(['status' => true, 'data' => $dependency, 'message' => 'Creado correctamente']);
        }catch(Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'message' => 'Ha ocurrido un error al registrar la dependencia'.$e]);
        }
    }

    public function updateDependency(DependencyRequest $request, $id)
    {
        $updateDependency = Dependency::find($id);
        DB::beginTransaction();
        try {
            $updateDependency->name_dependency = $request->input('name_dependency');
            $updateDependency->address = $request->input('address');
            $updateDependency->exterior_number = $request->input('exterior_number');
            $updateDependency->telephone = $request->input('telephone');
            $updateDependency->municipality_id = $request->input('municipality_id');
            $updateDependency->updated_at = Carbon::now();
            $updateDependency->save();
            DB::commit();
            return response()->json(['status' => true, 'data' => $updateDependency, 'message' => 'Los datos de la dependencia se han actualizado correctamente']);

        }catch(Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'message' => 'Ha ocurrido un error al actualizar la dependencia'.$e]);
        }
    }

    public function editViewDependency($id)
    {
        $dependency = Dependency::find($id);
        return view('dashboard.organ_control.module_dependencies.edit', compact('dependency'));
    }

    public function getListDependencies()
    {
        $dependencies = Dependency::all();

        if(count($dependencies) > 0) {
            return response()->json(['status' => true, 'data' => $dependencies], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'No se encuentra ninguna dependencia registrada']);
        }
    }

    public function getAreas(Request $request){
        $areas = Dependency::where('id', $request->input('idDependency'))
            ->with('annexeds.areas')
            ->get();
            return response()->json(['status' => true, 'data' => $areas]);
    }

    public function getAnnexes(Request $request){
        $annexes = Area::where('id', $request->input('idArea'))->with('annexes')->get();
        return response()->json(['status' => true, 'data' => $annexes]);
    }

<<<<<<< HEAD

    /**
     * !Función que asign los anexos
     */

    private function assignedAnnexeds($assignedAnnexes, $idDependency) {

        foreach ($assignedAnnexes as $assignedAnnexed) {
            DB::beginTransaction();
            try{
                $assigned = new AnnexedCatalogDependency;
                $assigned->annexed_catalog_id = $assignedAnnexed['numberAnnexed'];
                $assigned->area_id = $assignedAnnexed['area_id'];
                $assigned->dependency_id = $idDependency;
                $assigned->user_id = Auth::user()->id;
                $assigned->status = 1;
                $assigned->save();
                DB::commit();
            }catch(Exception $e) {
                DB::rollback();
                return response()->json(['status' => false, 'message' => 'Ha ocurrido un error al asignar']);
            }
        }
    }

    public function getAreasWithAnnexeds()
    {
        $getAreasAnnexeds = Area::all()->with('annexed_catalog_areas');
        return response()->json(['status' => true, 'data'  => $getAreas]);
=======
    public function getAnnexesFromPivot(Request $request){
        $idArea = $request->input('idArea');
        $idDependency = $request->input('idDependency');
        $annexes = AnnexedCatalogDependency::where('area_id', $idArea)->where('dependency_id', $idDependency)->with('annexeds')->with('areas')->get();
        return response()->json(['status' => true, 'data' => $annexes]);
>>>>>>> origin/development
    }
}
