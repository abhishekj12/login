<?php
namespace App\Http\Controllers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Route;
use DB;
use Illuminate\Http\Request;
class rolepermissioncontroller extends Controller
{

    public function index(Request $request)
    {
        $roles= Role::get();
        $permissions = Permission::get();
        return view('rolepermission.index',compact('roles','permissions'));
    }
    public function create(Request $request)
    {
        $permissions= Permission::all()->toArray();
        $permission_data = array();
        foreach ($permissions as $permission){
            array_push($permission_data,$permission['name']);
        }
      return view('rolepermission.create',compact('permission_data'));
    }

    public function store(Request $request)
    {

        $permission = Permission::get();
        $role = new Role;
        $role->name = $request->get('rolename');
        $role['permission'] = implode(',',$request->input('permission'));
        $role->syncPermissions($request->get('permission'));
        $role->save();
        return redirect()->route('rolepermission.index');
    }

    public function edit($id)
    {
        $permissions= Permission::all()->toArray();
        $permission_data = array();
        foreach ($permissions as $permission) {
         array_push($permission_data,$permission['name']);
        }
        $role = Role::find($id);
        return view('rolepermission.edit',['permission' => explode(',', $role->permission)],compact('role','permission_data'));
    }


    public function update( Request $request ,$id)
    {

        $role = role::find(($id));
        $role->name = $request->get('rolename');
        $role['permission'] = implode(',',$request->input('permission'));
        $role->syncPermissions($request->get('permission'));
        $role->save();
        return redirect()->route('rolepermission.index')
        ->with('success','Role updated successfully');
    }


}
