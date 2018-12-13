<?php

namespace App\Http\Controllers\Admin;

use App\ClientEmployee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;




class ClientEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $client_employees = ClientEmployee::all();
        return view('admin.clientemployees.index',compact('client_employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.clientemployees.create');
        
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
        $this->validate($request, [
            'name' => 'required'
        ]);

        $client_employee = new ClientEmployee();
        $client_employee->name = $request->name;
        $client_employee->save();
        return redirect()->route('admin.clientemployees.index')->with('successMsg','Added Successfully');
        
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
        $client_employee = ClientEmployee::find($id);
        return view('admin.clientemployees.edit',compact('client_employee'));
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
        $this->validate($request, [
            'name' => 'required'
        ]);
        
        $client_employee = ClientEmployee::find($id);
        $client_employee->name = $request->name;
        $client_employee->save();
        return redirect()->route('admin.clientemployees.index')->with('successMsg','Updated Successfully');
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
        $client_employee = ClientEmployee::find($id);
        $client_employee->delete();
        return redirect()->back()->with('successMsg','Deleted Successfully');

        

    }
}
