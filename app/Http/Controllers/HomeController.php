<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\data;
use App\Models\User;
use App\Models\Role;
use Spatie\Permission\Traits\HasRoles;

use Illuminate\Http\Reponse;
use DataTable;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection\assignRole;


class HomeController extends Controller
{
    use   HasRoles;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('index');
    }
    public function data()
    {
        return view('data');
    }

    public function country()
    {
        $countries = Country::all();
        return view('country', compact('countries'));
    }



    public function alldata()
    {

        return view('index');
    }



    public function index(Request $request)
    {

        if ($request->ajax()) {
            $data =DB::table('users')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn ='
                        <div class="icon-wrapper">    <a href="#" data-id="'.$row->id.'" class="delete-permission" data-bs-toggle="modal"  data-bs-target="#deleteModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                        <a href="data/'.$row->id.'/edit/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                       </div> ';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('data.index');
    }

    public function datas()
    {

    }

    public function create()
    {
        $roles = Role::all()->toArray();
        $role_data = array();

        foreach ($roles as $role) {
            array_push($role_data,$role['name']);
        }
        // dd($role_data);


        return view('data.create',compact('role_data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = new User;
        $user->name =  $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->role = $request->get('rolename');
        $user->save();

        $role = $request->get('rolename');

        $user->assignRole($role);

        return redirect()->route('data.index')->with('success', 'Company has been created successfully.');
    }



    public function edit($id)
    {


        $roles = Role::all()->toArray();
        $role_data = array();

        foreach ($roles as $role) {
            array_push($role_data,$role['name']);
        }
        $crud = User::find($id);
        return view('data.edit', compact('crud','role_data'));
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find(($id));
        $user->name =  $request->get('name');
        $user->email = $request->get('email');
        $user->role = $request->get('rolename');
        $role = $request->get('rolename');

        // $user->assignRole($role);
        $user->syncRoles($role);

        $user->save();
        return redirect()->route('data.index')->with('success', 'Company has been created successfully.');
    }


    public function destroy($id)
    {

        try{
            User::find($id)->delete();

            $response = [
                'status' => true,
                'message' => 'deleted Successfully',
                'data' => []
            ];

            return $response;

        }catch(Exception $e){

            $response = [
                'status' => false,
                'message' => 'error :' . $e->getMessage(),
                'data' => []
            ];

            return $response;
        }
    }
}
