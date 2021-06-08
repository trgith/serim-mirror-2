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
        $roles = collect([str_replace(" ","_",$getRoles[6]->name),
                    str_replace(" ","_",$getRoles[7]->name),
                    str_replace(" ","_",$getRoles[8]->name)]);
        return view('dashboard.organ_control.module_users.users', ['roles' => $roles]);
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
                'action_user' =>  $request->input('action_user'),
                'menuroles' => 'user,'.$request->input('menuroles')
            ]);
            $user->assignRole('organo_control');
            $user->assignRole('user');
            DB::commit();
            return response()->json(['status' => true, 'data' => $user, 'message' => 'Usuario registrado correctamente']);
        }catch(Exception $e) {
            DB::rollback();
            return response()->json(['status' => false, 'message' => 'Ha ocurrido un error al registrar el usuario', $e]);
        }

    }

    private function getRolesUser()
    {
        $roles_users = DB::tables('roles')->select('name')->get();
        return $roles_users;
    }
}
