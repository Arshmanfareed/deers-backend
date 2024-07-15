@extends('backend.partials.master')
@section('content')
    <div class="content">
<section class="secDashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-2">
               @include('backend.partials.sidebar')
            </div>
            <div class="col-12 col-md-10">
                <div class="appoint_area bg_shade">
                    <div class="top_opt">
                        <h2 class="sec_head ft_oswlad">Appointments</h2>
                        <a href="{{route('add_appointments')}}" class="btn_custom add_member">Add New Appointment</a>
                    </div>
                    <table class="dt_table table table-bordered table-hover dt-responsive">
                        <thead>
                        <tr>
                            <th>Member</th>
                            <th>Department</th>
                            <th>From - To</th>
                            <th>Duration</th>
                            <th>Created Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>

                        <tr>
                            <td>
                                <div class="user_col">
                                    <img class="thumb" src="{{asset('dashboard_assets/images/thumb.png')}}" alt="">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </td>
                            <td>Health</td>
                            <td>09:30 AM - 10:00 AM</td>
                            <td>33 - 19 - 1</td>
                            <td>33 - 19 - 1</td>
                            <td>
                                <div class="status red">Scheduled</div>
                            </td>
                            <td>
                                <a href="javascript:;" class="action_link">
                                    <img src="{{asset('dashboard_assets/images/icon_action.png')}}" alt="">
                                </a>
                                <div class="actions">
                                    <a href="javascript:;" class="viiew"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</a>
                                    <a href="javascript:;" class="edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</a>
                                    <a href="javascript:;" class="delete"><span class="icon"><i class="fa-solid fa-trash"></i></span>Delete</a>
                                </div>
                            </td>
                        </tr>





                        <tr>
                            <td>
                                <div class="user_col">
                                    <img class="thumb" src="{{asset('dashboard_assets/images/thumb_2.png')}}" alt="">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </td>
                            <td>Defense</td>
                            <td>09:30 AM - 10:00 AM</td>
                            <td>33 - 19 - 1</td>
                            <td>33 - 19 - 1</td>
                            <td>
                                <div class="status green">Completed</div>
                            </td>
                            <td>
                                <a href="javascript:;" class="action_link">
                                    <img src="{{asset('dashboard_assets/images/icon_action.png')}}" alt="">
                                </a>
                                <div class="actions">
                                    <a href="javascript:;" class="viiew"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</a>
                                    <a href="javascript:;" class="edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</a>
                                    <a href="javascript:;" class="delete"><span class="icon"><i class="fa-solid fa-trash"></i></span>Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user_col">
                                    <img class="thumb" src="{{asset('dashboard_assets/images/thumb_3.png')}}" alt="">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </td>
                            <td>Defense</td>
                            <td>09:30 AM - 10:00 AM</td>
                            <td>33 - 19 - 1</td>
                            <td>33 - 19 - 1</td>
                            <td>
                                <div class="status green">Completed</div>
                            </td>
                            <td>
                                <a href="javascript:;" class="action_link">
                                    <img src="{{asset('dashboard_assets/images/icon_action.png')}}" alt="">
                                </a>
                                <div class="actions">
                                    <a href="javascript:;" class="viiew"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</a>
                                    <a href="javascript:;" class="edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</a>
                                    <a href="javascript:;" class="delete"><span class="icon"><i class="fa-solid fa-trash"></i></span>Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user_col">
                                    <img class="thumb" src="{{asset('dashboard_assets/images/thumb_4.png')}}" alt="">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </td>
                            <td>Civilian Pay</td>
                            <td>09:30 AM - 10:00 AM</td>
                            <td>33 - 19 - 1</td>
                            <td>33 - 19 - 1</td>
                            <td>
                                <div class="status green">Completed</div>
                            </td>
                            <td>
                                <a href="javascript:;" class="action_link">
                                    <img src="{{asset('dashboard_assets/images/icon_action.png')}}" alt="">
                                </a>
                                <div class="actions">
                                    <a href="javascript:;" class="viiew"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</a>
                                    <a href="javascript:;" class="edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</a>
                                    <a href="javascript:;" class="delete"><span class="icon"><i class="fa-solid fa-trash"></i></span>Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user_col">
                                    <img class="thumb" src="{{asset('dashboard_assets/images/thumb_5.png')}}" alt="">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </td>
                            <td>Civilian Pay</td>
                            <td>09:30 AM - 10:00 AM</td>
                            <td>33 - 19 - 1</td>
                            <td>33 - 19 - 1</td>
                            <td>
                                <div class="status green">Completed</div>
                            </td>
                            <td>
                                <a href="javascript:;" class="action_link">
                                    <img src="{{asset('dashboard_assets/images/icon_action.png')}}" alt="">
                                </a>
                                <div class="actions">
                                    <a href="javascript:;" class="viiew"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</a>
                                    <a href="javascript:;" class="edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</a>
                                    <a href="javascript:;" class="delete"><span class="icon"><i class="fa-solid fa-trash"></i></span>Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user_col">
                                    <img class="thumb" src="{{asset('dashboard_assets/images/thumb_6.png')}}" alt="">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </td>
                            <td>Health</td>
                            <td>09:30 AM - 10:00 AM</td>
                            <td>33 - 19 - 1</td>
                            <td>33 - 19 - 1</td>
                            <td>
                                <div class="status green">Completed</div>
                            </td>
                            <td>
                                <a href="javascript:;" class="action_link">
                                    <img src="{{asset('dashboard_assets/images/icon_action.png')}}" alt="">
                                </a>
                                <div class="actions">
                                    <a href="javascript:;" class="viiew"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</a>
                                    <a href="javascript:;" class="edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</a>
                                    <a href="javascript:;" class="delete"><span class="icon"><i class="fa-solid fa-trash"></i></span>Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user_col">
                                    <img class="thumb" src="{{asset('dashboard_assets/images/thumb_7.png')}}" alt="">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </td>
                            <td>Civilian Pay</td>
                            <td>09:30 AM - 10:00 AM</td>
                            <td>33 - 19 - 1</td>
                            <td>33 - 19 - 1</td>
                            <td>
                                <div class="status green">Completed</div>
                            </td>
                            <td>
                                <a href="javascript:;" class="action_link">
                                    <img src="{{asset('dashboard_assets/images/icon_action.png')}}" alt="">
                                </a>
                                <div class="actions">
                                    <a href="javascript:;" class="viiew"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</a>
                                    <a href="javascript:;" class="edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</a>
                                    <a href="javascript:;" class="delete"><span class="icon"><i class="fa-solid fa-trash"></i></span>Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user_col">
                                    <img class="thumb" src="{{asset('dashboard_assets/images/thumb_8.png')}}" alt="">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </td>
                            <td>Verifaction</td>
                            <td>09:30 AM - 10:00 AM</td>
                            <td>33 - 19 - 1</td>
                            <td>33 - 19 - 1</td>
                            <td>
                                <div class="status green">Completed</div>
                            </td>
                            <td>
                                <a href="javascript:;" class="action_link">
                                    <img src="{{asset('dashboard_assets/images/icon_action.png')}}" alt="">
                                </a>
                                <div class="actions">
                                    <a href="javascript:;" class="viiew"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</a>
                                    <a href="javascript:;" class="edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</a>
                                    <a href="javascript:;" class="delete"><span class="icon"><i class="fa-solid fa-trash"></i></span>Delete</a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="user_col">
                                    <img class="thumb" src="{{asset('dashboard_assets/images/thumb_9.png')}}" alt="">
                                    Lorem ipsum dolor sit amet
                                </div>
                            </td>
                            <td>Verifaction</td>
                            <td>09:30 AM - 10:00 AM</td>
                            <td>33 - 19 - 1</td>
                            <td>33 - 19 - 1</td>
                            <td>
                                <div class="status green">Completed</div>
                            </td>
                            <td>
                                <a href="javascript:;" class="action_link">
                                    <img src="{{asset('dashboard_assets/images/icon_action.png')}}" alt="">
                                </a>
                                <div class="actions">
                                    <a href="javascript:;" class="viiew"><span class="icon"><i class="fa-solid fa-eye"></i></span>View</a>
                                    <a href="javascript:;" class="edit"><span class="icon"><i class="fa-solid fa-pen-to-square"></i></span>Edit</a>
                                    <a href="javascript:;" class="delete"><span class="icon"><i class="fa-solid fa-trash"></i></span>Delete</a>
                                </div>
                            </td>
                        </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
@endsection
