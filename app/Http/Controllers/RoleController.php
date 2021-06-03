<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // all roles
    public function index()
    {
        $roles = Role::all()->toArray();
        return array_reverse($roles);
    }

    // add role
    public function create(Request $request)
    {
        $role = new Role([
            'name' => $request->name,
        ]);
        $role->save();

        return response()->json(['status'=>'success','message'=>'The role successfully added','data'=>$role]);
    }

    // edit role
    public function show($id)
    {
        $role = Role::find($id);
        return response()->json($role);
    }

    // update role
    public function update($id, Request $request)
    {
        $role = Role::find($id);
        $role->update($request->all());

        return response()->json(['status'=>'success','message'=>'The role successfully added','data'=>$role]);
    }

    // delete role
    public function delete($id)
    {
        $role = Role::find($id);
        $role->delete();

        return response()->json('The role successfully deleted');
    }
}
