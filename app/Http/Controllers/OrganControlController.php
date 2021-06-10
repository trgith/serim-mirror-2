<?php

namespace App\Http\Controllers;


use DB;
use Exception;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Http\Requests\OrganRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateOrganRequest;

class OrganControlController extends Controller
{
    public function __contructor()
    {
        $this->middleware('auth');
        $this->middleware('organcontrolmiddleware');
    }


    /**
     * *Obtenemos todos los roles
     * *Una vez obtenida los roles los asignamos a una colección para obtener
     * *Las posiciones que nos interesan
     */
    public function assignmentUserView()
    {
        $getRoles = DB::table('roles')->select('name')->get();

        $getUsers = User::all();
        $roles = collect([str_replace(" ","_",$getRoles[6]->name),
                    str_replace(" ","_",$getRoles[7]->name),
                    str_replace(" ","_",$getRoles[8]->name)]);


        return view('dashboard.organ_control.module_users.users', ['roles' => $roles, 'users' => $getUsers]);
    }


    public function storUserOrganoControl(OrganRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'email_verified_at' => now(),
                'password' => Hash::make($request->input('password')),
                'remember_token' => Str::random(10),
                'action_user' => $request->input('action_user'),
                'menuroles' => 'user,'.$request->input('menuroles')
            ]);

            $asignar = $user->assignRole($user[3]);

            $user->assignRole('user');
            DB::commit();
            return response()->json(['status' => true, 'data' => $user, 'message' => 'Usuario registrado correctamente']);
        }catch(Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'message' => 'Ha ocurrido un error al registrar el usuario'. $e]);
        }

    }

    public function getUsersRegistered()
    {
        $getUsers = User::all();
        if(count($getUsers) > 0) {
            return response()->json(['status' => true, 'data' => $getUsers], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'No se encuentran usuarios disponibles']);
        }
    }

    public function viewEditUserRegistered($id)
    {
        $user = User::find($id);
        return view('dashboard.organ_control.module_users.edit', compact('user'));
    }

    public function updateUserRegistered(UpdateOrganRequest $request, $id)
    {
        $userUpdate = User::find($id);
        DB::beginTransaction();
        try {
            $userUpdate->name = $request->input('name');
            $userUpdate->email = $request->input('email');
            $userUpdate->password = Hash::make($request->input('password'));
            $userUpdate->save();
            DB::commit();
            return response()->json(['status' => true, 'data' => $userUpdate, 'message' => 'Los datos del usuario se han actualizado correctamente']);
        }catch(Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'message' => 'Ocurrio un error al actualizar los datos del usuario']);
        }
    }

    public function deleteUserRegister($id)
    {
        $userDelete = User::find($id);
        $userDelete->delete();
        return response()->json(['status' => true, 'message'=>'Usuario eliminado correctamente']);
    }
}
