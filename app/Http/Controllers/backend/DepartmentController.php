<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Middleware\AdminMiddleware;
use App\Models\Departments;

class DepartmentController extends Controller
{
    public function __construct()
    {
        // $this->middleware(AdminMiddleware::class);
    }

    public function departments()
    {
        $all_data = Departments::all();

        $data  = [

            'title' => ' Departments | Deers Admin Dashboard'
        ];

        return view('backend.departments' ,$data, compact('all_data'));
    }

    public function appDepartments()
    {
        $all_data = Departments::all();

        return response()->json([
            'message' => 'All Departments',
            'departments' => $all_data,
        ], 201);
    }


    public function add_departments()
    {
        $data  = [

            'title' => ' Add Departments | Deers Admin Dashboard'
        ];

        return view('backend.add-department' ,$data);
    }

    public function add_departments_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $data = $request->all();
        
        if ($request->user()->role == 'admin') {
            $data['user_role'] = 'admin';            
        } elseif ($request->user()->role == 'user_interface') {
            $data['user_role'] = 'user_interface';            
        } else {
            $data['user_role'] = 'consultant_interface';            
        }

        if(!$request->has('status')){
            $data['status'] = 'inactive';
        }
        $data['user_id'] = $request->user()->id; 

        Departments::create($data);

        return redirect()->route('departments')->with('success', 'Department added successfully');
    }

    public function edit_departments(Departments $department)
    {
        $data = [
            'title' => 'Edit Departments | Deers Admin Dashboard',
            'department' => $department
        ];

        return view('backend.edit-department', $data);
    }


    public function edit_departments_submit(Request $request, Departments $department)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',            
        ]);

        $data = $request->all();

        
        if(!$request->has('status')){
            $data['status'] = 'inactive';
        }

        // Determine the user_role based on some condition
        // if ($request->user()->role == 'admin') {
        //     $data['user_role'] = 'admin';
        // } elseif ($request->user()->role == 'user_interface') {
        //     $data['user_role'] = 'user_interface';
        // } else {
        //     $data['user_role'] = 'consultant_interface';
        // }

        $department->update($data);

        return redirect()->route('departments')->with('success', 'Department updated successfully');
    }
    public function destroy(Departments $department)
    {
        $department->delete();
        return redirect()->route('departments')->with('success', 'Department deleted successfully');
    }

}