<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $roles = Role::all();
        return view('admin.roles.roles', ['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.roles.create');
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
                
            ],
            [
                "name.requried"=>"Enter Roles ",
               
            
            ]
            );
            Role::create($request->except('_token'));
            return redirect()->route('roles.index')->with('success','Roles is successfully added');
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
    public function edit(Role $role )
    {
        //
        return view('admin.roles.edit',["role"=>$role]);

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

         //
         $request->validate(
            [
                "name"=>"required"
                
                

            ],
            [
                "name.requried"=>"Enter Roles",
                ]
            
            );
            
            $role=Role::find($id);
            $role->name=$request->input('name');
           
            $role->save();
            return redirect()->route('roles.index')->with('success','Role is successfully Updated');
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

        $role = Role::find($id);

        try{
            $role->delete();
        }
        catch(QueryException $e){

            return redirect()->route('roles.index')->with(["success"=>"Role can't be deleted ."]);

        }
       
        return redirect()->route('roles.index')->with(["success"=>"Role is successfully deleted."]);
    }
}
