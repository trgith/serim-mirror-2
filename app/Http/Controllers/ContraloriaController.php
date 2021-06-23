<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Area;
use Carbon\CarbonDB;
use App\Models\Municipality;
use App\Models\AnnexedCatalogDependency;


use App\Models\Dependency;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ContraloriaRequest;


class ContraloriaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('contraloria');
    }

    public function getViewDependency()
    {
/*         $dependencies = DB::table('users as a')
        ->join('municipalities as b', 'b.id', 'a.municipality_id')
        ->join('dependencies as c', 'b.id', 'c.municipality_id')
        ->select('b.municipality', 'c.name_dependency')
        ->where('a.id', '=', Auth::user()->id)
        ->get(); */

        $data = DB::table("dependencies as a")
            ->selectRaw('a.name_dependency')

            ->get()->dd();

          //DB::raw("(SELECT b.annexed_catalog_id FROM annexed_catalog_dependencies as b WHERE b.dependency_id = dependencies.id)"))
        /* $dependencies = Dependency::all();
        $annexes = Dependency::with('annexeds', 'annexeds.areas')->get();
 */
/*         for($i = 0; $i<sizeof($annexes); $i++) {
            $annexes[$i]['areas'] = AnnexedCatalogDependency::where('dependency_id', '=', $annexes[$i]->id)->get();
        } */




        return view('dashboard.contraloria.control_municipio', compact('dependencies', 'annexes'));
    }

    public function getUpLoadImagenView()
    {
        $municipalities = Municipality::all('id', 'municipality');
        return view('dashboard.contraloria.upload_image', compact('municipalities'));
    }

    public function uploadImagen(ContraloriaRequest $request)
    {
        $imageMunicipality = Municipality::find($request->id);
        $file = $request->file('image');
        DB::beginTransaction();
        try {
            if($file){
                $imageMunicipality->image = $request->file('image')->store('public/logotipos');
                $imageMunicipality->save();
                DB::commit();
                return response()->json(['status' => true, 'message' => 'Imagen cargada correctamente']);
            } else {
                return response()->json(['status' => false, 'message' => 'Ocurrio un error al cargar su imagen ']);

            }
        } catch (Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'message' => 'Ocurrio un error al subir la imagen']);
        }
    }

    public function getViewAssignedAnnexed()
    {
        $municipalities = Municipality::all('id','municipality');

        return view('dashboard.contraloria.asignacion_anexos', compact('municipalities'));
    }


}
