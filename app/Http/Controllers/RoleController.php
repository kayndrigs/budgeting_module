<?php

namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;

class RoleController extends Controller
{
     // for crud operations
     public function __construct()
     {
        $this->middleware('permission:view role', ['only' => ['index']]);
        $this->middleware('permission:create role', ['only' => ['create','store','addPermissionToRole','givePermissionToRole']]);
        $this->middleware('permission:update role', ['only' => ['update','edit']]);
        $this->middleware('permission:delete role', ['only' => ['destroy']]);
     }

    //load page
    public function index()
    {
        $roles = Role::get();
        return view('admin.role.index', [
            'roles' => $roles
        ]);
    }

    //input
    public function create()
    {
        return view('admin.role.create');
    }

    //add store function for storing to database
    public function store(Request $request) {

        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name' //unique in permissions table
            ]
        ]);

        Role::create([
            'name' => $request->name
        ]);

        return redirect('roles')->with('status', 'Role created successfully');
    }

    // edit
    public function edit(Role $role)
    {
        return view('admin.role.edit', [
            'role' => $role
        ]);
    }

    // update
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => [
                'required',
                'string',
                'unique:roles,name,'.$role->id
            ]
        ]);

        $role->update([
            'name' => $request->name
        ]);

        return redirect('roles')->with('status', 'Role updated successfully');
    }

    // delete
    public function destroy($roleId)
    {
       $role = Role::find($roleId);
       $role->delete();
       return redirect('roles')->with('status', 'Role deleted successfully');
    }
}
