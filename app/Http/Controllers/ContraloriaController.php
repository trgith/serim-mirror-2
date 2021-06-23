<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\Area;
use App\Models\Dependency;
use Carbon\CarbonDB;
use App\Models\Municipality;
use App\Models\AnnexedCatalogDependency;
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
        $dependencies = Dependency::all();

        return view('dashboard.contraloria.control_municipio', compact('dependencies'));
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
