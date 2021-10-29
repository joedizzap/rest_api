<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Http\Resources\PatientResource;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = Patient::all();
        return response(['data' => PatientResource::collection($patient)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'birthdate' => 'required',
            'zipcode'=> 'required',
            'phone'=> 'required',
            'age'=> 'required',
            'gender'=> 'required',
            'address'=> 'required'
        ]);

        $check = DB::table('patients')
            ->where('firstname', $request->input('firstname'))
            ->where('lastname', $request->input('lastname'))
            ->count();

        if($check == 0)
        {
            $patient = Patient::create($request->all());
            return response(['data' => new PatientResource($patient),'message' => 'Patient retrieved successfully'], 200);
        }
        else{
            return response(['data' => 'Patient already exist']);
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
        $patient =  Patient::find($id);
        if($patient)
        {           
            return response(['data' => new PatientResource($patient), 'success' => 'Patient retrieved successfully'], 200);
        }
        else
        {
            return response()->json(['data' => 'Not Found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $patient = Patient::find($id);

        if($patient)
        {      
            $patient->update($request->all());     
            return response(['data' => new PatientResource($patient), 'message' => 'Updated successfully'], 200);
        }
        else
        {
            return response()->json(['data' => 'Not Found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::destroy($id);
        return response()->json(['data' => 'Deleted']);
    }

    /**
     * get specific id
     *
     */
    public function fetch($id)
    {
        $patient = Patient::find($id);
        
        if($patient)
        {
            return response(['data' => PatientResource::collection($patient)]);
        }
        else
        {
            return response(['message' => 'Not Found'], 404); 
        }    
    }

        /**
     * Search for name
     *
     * @param  string name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        return Patient::where('firstname','like','%'.$name.'%' )
                        ->orWhere('lastname', 'like', '%'.$name.'%')->get();
    }
}
