<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Middleware\AdminMiddleware;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(AdminMiddleware::class);
    }
    public function dashboard()
    {
        $data  = [

            'title' => ' Dashboard |  Deers Admin Dashboard'
        ];

        return view('backend.dashboard' ,$data);
   }

    public function members()
    {
        $data  = [

            'title' => ' Members | Deers Admin Dashboard'
        ];

        return view('backend.members' ,$data);
    }

    public function add_members()
    {
        $data  = [

            'title' => ' Add Members | Deers Admin Dashboard'
        ];

        return view('backend.add-member' ,$data);
    }


    public function departments()
    {
        $data  = [

            'title' => ' Departments | Deers Admin Dashboard'
        ];

        return view('backend.departments' ,$data);
    }


    public function add_departments()
    {
        $data  = [

            'title' => ' Add Departments | Deers Admin Dashboard'
        ];

        return view('backend.add-department' ,$data);
    }



    public function add_appointments()
    {
        $data  = [

            'title' => ' Add Appointment | Deers Admin Dashboard'
        ];

        return view('backend.add-appointment' ,$data);
    }

    public function appointments()
    {
        $data  = [

            'title' => ' Appointments | Deers Admin Dashboard'
        ];

        return view('backend.appointments' ,$data);
    }


    public function locations()
    {
        $data  = [

            'title' => ' Locations | Deers Admin Dashboard'
        ];

        return view('backend.locations' ,$data);
    }



    public function add_location()
    {
        $data  = [

            'title' => ' Add Location | Deers Admin Dashboard'
        ];

        return view('backend.add-location' ,$data);
    }

    public function subcsription()
    {
        $data  = [

            'title' => ' Subscription | Deers Admin Dashboard'
        ];

        return view('backend.subscription' ,$data);
    }

    public function reports()
    {
        $data  = [

            'title' => ' Reports | Deers Admin Dashboard'
        ];

        return view('backend.reports' ,$data);
    }

    public function invoices()
    {
        $data  = [

            'title' => ' Invoices | Deers Admin Dashboard'
        ];

        return view('backend.invoices' ,$data);
    }


    public function messages()
    {
        $data  = [

            'title' => ' Messages | Deers Admin Dashboard'
        ];

        return view('backend.messages' ,$data);
    }


    public function inbox()
    {
        $data  = [

            'title' => ' Inbox | Deers Admin Dashboard'
        ];

        return view('backend.inbox' ,$data);
    }


}
