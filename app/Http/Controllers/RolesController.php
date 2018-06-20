<?php

namespace App\Http\Controllers;
use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index(){
        $roles = Role::paginate(10);
        return view('roles.index',compact('roles'));
    }


    public function create(){
        $permisos = Permission::all();
        return view('roles.permisos',compact('permisos'));
    }

    public function store(Request $request){

        if(request()->ajax())
        {
            $data = request()->validate([
                'name'=>'required',
                'description'=>'required',
            ]);

            $role = Role::create([
                'name'=>$data['name'],
                'slug'=>$data['name'].'role',
                'description'=>$data['name'],
                'special'=>'no-access'
            ]);

            $role->update([
                'special'=>null
            ]);

            $role->save();

            $role->syncPermissions(request()->items);

            $role->save();

            return response()->json(['mensaje'=>'registro exitoso']);
        }
    }
}
