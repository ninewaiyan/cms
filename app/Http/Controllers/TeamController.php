<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $teams = Team::all();
        return view('admin.teams.teams', ['teams'=>$teams]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

       $roles = Role::all();
       $departments = Department::all();
        return view('admin.teams.create',['roles'=>$roles,'departments'=>$departments]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate(
            [
                "name"=>"required",
                "email"=>"required",
                "phone"=>"required",
                "role_id"=>"required",
                "department_id"=>"required",

                

            ],
            [
                
                "name.requried"=>"Enter  name",
                "email.requried"=>"Enter  email",
                "phone.requried"=>"Enter  phone",
                "role_id.requried"=>"Select Role",
                "department_id.requried"=>"Select Department ",
                
                ]
            );
            Team::create($request->except('_token'));
            
            return redirect()->route('teams.index')->with('success','Team is successfully added');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
