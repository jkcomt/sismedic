<?php

namespace App\Http\Controllers;

use App\User;
use App\Cargo;
use Illuminate\Support\Facades\DB;
use App\Personal;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;

use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $personales = Personal::leftjoin('users','personales.id','=','users.personal_id')
            ->select(DB::raw("CONCAT(nombres,' ',apellidos) as nombres_completos"),'personales.id')
            ->where('personales.estado','=',true)
            ->whereNull('users.personal_id')
            ->get()->pluck('nombres_completos','id')->toArray();

            $cargos = Cargo::where('estado','=',true)->pluck('descripcion','id')->toArray();


            $usuarios= User::where('estado',true)->paginate(10);
       return view('usuario.index',compact("usuarios","personales","cargos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

             if(request()->ajax())
        {
            $data = request()->validate([
                'name'=>'required',
                'password'=>'required',
                'personal'=>'required',
                'cargo'=>'required',
            ],[
                'name.unique'=>'El nick ya ha sido registrado',
                'password.unique'=>'Ingrese otra contraseña',
                'personal.unique'=>'Seleccione otro personal',
                'cargo.unique'=>'Ingrese Otro cargo'

            ]);

            $user = User::create([
                'name'=>$data['name'],
                'password'=>$data['password'],
                'cargo_id'=>$data['cargo'],
                'personal_id'=>$data['personal'],
                'estado'=>true,
                'remember_token'=>str_random(10)
            ]);

            $rol = Role::create([
                'name'=>$data['name'],
                'slug'=>$data['name'].'role',
                'descripction'=>$data['name'],
                'special'=>'no-access'
            ]);

            $roles = array($rol->id);

            $user->roles()->sync($roles);

            return response()->json(['mensaje'=>'registro exitoso']);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $usuario = User::find($id);    
         $cargo = Cargo::where('estado',true)->pluck('descripcion','id')->toArray();
         return response()->json(
           array('usuario'=>$usuario,'cargo'=>$cargo)
      );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

          $user =  User::find($request['editid']);

        $data = request()->validate([
                'editid'=>'required',
                'password'=>'required',
                'cargo'=>'required',
            ],[
                'password.unique'=>'Ingrese otra contraseña',
                'cargo.unique'=>'Ingrese Otro cargo'

            ]);

           $user->update([
                'password'=>$data['password'],
                'cargo_id'=>$data['cargo'],
        ]);

           $user->save();


        return response()->json([
            'mensaje'=> $user->toArray()
        ]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        
        $area =  User::find($request['id']);

        $area->update(
            ['estado'=>false]
        );

        $area->save();

        return response()->json(
            ['mensaje'=>"registro eliminado"]
        );
    }

    public function permisos($id){

        $usuario = User::find($id);
        //dd($usuario->roles->first()->id);
        //$role = Role::find($usuario->role->latest()->get());
        //$role = $usuario->roles->first();
        $permisos = Permission::all();
        return view('usuario.permisos',compact("usuario","permisos"));
    }

    public function permisosUpdate(){

        if(request()->ajax()){
            //dd(request()->items);
            //$user = User::find(request()->user_id);
            $role = Role::find(request()->role_id);

            $role->update([
                'special'=>null
            ]);

            $role->save();

            $role->syncPermissions(request()->items);

            $role->save();
            return response()->json(
                ['mensaje'=>$role]
            );
        }
    }
}
