<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Departments;

class DepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware(AdminMiddleware::class);
    }

    public function departments()
    {
        $all_data = Departments::all();

        $data  = [

            'title' => ' Departments | Deers Admin Dashboard'
        ];

        return view('backend.departments' ,$data, compact('all_data'));
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

        if(!$request->has('status')){
            $data['status'] = 'inactive';
        }

        Departments::create($data);

        return redirect()->route('departments')->with('success', 'Department added successfully');
    }


    public function edit_departments(Departments $id){

        $data  = [

            'title' => ' Edit Departments | Deers Admin Dashboard'
        ];

        return view('backend.edit-department' ,compact('id'), $data);
    }
}
