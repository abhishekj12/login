<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Country;
 use App\Models\states;
 use DataTables;
 use Illuminate\Support\Facades\DB;
 use App\Models\alldata;
 use Illuminate\Support\Facades\File;


class AlldataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index( Request $request)
    {
        if ($request->ajax()) {
            $data =DB::table('alldata')->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn ='
                        <div class="icon-wrapper">     <a href="#" data-id="'.$row->id.'" class="delete-permission" data-bs-toggle="modal"  data-bs-target="#deleteModal"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a>
                        <a href="alldata/'.$row->id.'/edit/"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></a>
                      </div>  ';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('alldata.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $data['countries'] = Country::get(["name", "phonecode","id"]);
        return view('alldata.create', $data);
    }



      public function statedata( Request $request)
      {

        $data['states'] = states::where("country_id", $request->country_id) ->get(["name", "country_id"]);
       return response()->json($data);

      }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $crud = new alldata;

        if($files=$request->file('customFile')){
            $name= $files->getClientOriginalName();
            $files->move('images',$name);
            $crud->file=$name;
            }
          $crud->name = $request->get('basic-default-name');
          $crud->country = $request->get('select-country');
          $crud->state = $request->get('select-countrys');
          $crud->gender = $request->get('validationRadiojq');
          $crud['hobby'] = implode(',',$request->input('hobbys'));
          $crud->save();
          return redirect()->route('alldata.index')->with('success', 'Company has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $crud = alldata::find($id);
        $countries = Country::all();

        return view('alldata.edit',['hobbys' => explode(',', $crud->hobby)] ,compact('crud','countries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $crud = alldata::find(($id));
           if($files=$request->file('customFile')){
            $name= $files->getClientOriginalName();
            $files->move('images',$name);
            $crud->file=$name;
            }
          $crud->name = $request->get('basic-default-name');
          $crud->country = $request->get('select-country');
          $crud->state = $request->get('select-countrys');

          $crud->gender = $request->get('validationRadiojq');
          $crud['hobby'] = implode(',',$request->input('hobbys'));


          $crud->save();
        return redirect()->route('alldata.index')->with('success', 'Company has been created successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {

        try{
            alldata::find($id)->delete();

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


        // return redirect()->route('permissions.index')->with('success', 'Contact deleted success');


    }
    }

