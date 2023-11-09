<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use DataTables;
use Illuminate\Support\Facades\DB;
class RoleController extends Controller
{

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data =DB::table('roles')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn ='
                       <div class="icon-wrapper"> <a href="#" data-id="'.$row->id.'" class="delete-permission" data-bs-toggle="modal"  data-bs-target="#deleteModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                        <a href="roles/'.$row->id.'/edit/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                        </div> ';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('roles.index');
    }

    public function create()
    {
        return view('roles.create');

    }


    public function store(Request $request)
    {
        $crud = new Role;
        $crud->name =  str_replace(" ","_",$request->get('name'));
        $crud->guard_name = 'web';
        $crud->save();
        return redirect()->route('roles.index')->with('success', 'Company has been created successfully.');
    }

    public function edit($id)
    {
        $crud = Role::find($id);
        return view('roles.edit', compact('crud'));
    }


    public function update(Request $request, $id)
    {
        $crud = Role::find(($id));
        $crud->name = str_replace(" ","_",$request->get('name')) ;
        $crud->guard_name = 'web';

        $crud->save();
        return redirect()->route('roles.index')->with('success', 'Company has been created successfully.');
    }

    public function destroy($id)
    {
        try{
            Role::find($id)->delete();

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
