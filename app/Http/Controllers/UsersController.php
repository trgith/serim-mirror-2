<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Models\User;
use App\Models\Region;
use App\Models\Municipality;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use App\Http\Requests\RegisterOrganRequest;

class UsersController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $you = auth()->user();
        $users = User::all();
        return view('dashboard.admin.usersList', compact('users', 'you'));
    }


    public function viewRegisterOrganControl()
    {
        $regions = Region::all('id','region');
        return view('dashboard.admin.registerOrganControl', compact("regions"));
    }


    public function registerOrganControl(RegisterOrganRequest $request)
    {
        DB::beginTransaction();
        try {
                $user = User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'email_verified_at' => now(),
                'password' => Hash::make($request->input('password')),
                'remember_token' => Str::random(10),
                'menuroles' => 'user,auditoria',
                'region_id' => $request->input('region_id'),
            ]);
            $this->updateStatusRegion($user->region_id);

            $user->assignRole('auditoria');
            $user->assignRole('user');
            DB::commit();

            return response()->json(['status' => true, 'data' => $user, 'message' => 'Usuario registrado correctamente'], 201);
        }catch(Exception $e) {
            DB::rollaback();
            return response()->json(['status' => false, 'message' => 'Ha ocurrido un error al registrar el usuario']);
        }

    }

    private function updateStatusRegion($id)
    {
        $region = Region::find($id);
        try {
            $region->status = 1;
            $region->save();
        } catch (Exception $e) {
            return response()->json(['message' => 'Ocurrio un error al actualizar el estatus']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('dashboard.admin.userShow', compact( 'user' ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.admin.userEditForm', compact('user'));
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
        $validatedData = $request->validate([
            'name'       => 'required|min:1|max:256',
            'email'      => 'required|email|max:256'
        ]);
        $user = User::find($id);
        $user->name       = $request->input('name');
        $user->email      = $request->input('email');
        $user->save();
        $request->session()->flash('message', 'Usuario actualizado correctamente');
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if($user){
            $user->delete();
        }
        return redirect()->route('users.index');
    }
}
