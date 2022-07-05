<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Department;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::id();
        $employees = Employee::where('employees.company_id','=', $user)
                    //->join('departments', 'departments.id', 'employees.department_id')
                    ->get();
        return view('custom.employees')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depart = Department::all();
        return view('custom.employee',compact('depart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $this->validation($request);
        $employee = new Employee();
        $employee->name = $request->employeename;
        $employee->email = $request->email;
        $employee->phone = $request->phone;
        $employee->department_id = $request->id;
        $employee->company_id =  Auth::id();
        $employee->save();

        return redirect("/employee/create")->with('Status', 'SUCCESS: You have added employee to a department.');
    }

        public function validation($request){

        return $this->validate($request, [
            'employeename' => 'required|max:255',
            'email' => 'required|email|unique:employees|max:255',
            'phone' => 'required|unique:employees|max:15',
        ]);

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
