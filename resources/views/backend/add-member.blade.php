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
                <div class="add_member bg_shade">
                    <div class="top_add">
                        <a href="javascript:;" class="btn_back">
                            <img src="{{asset('dashboard_assets/images/icon_left.png')}}" alt="">
                        </a>
                        <div class="ext">
                            <h2 class="sec_head ft_oswlad">Add New Members</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                        <a href="javascript:;" class="btn_custom">Add  New Member</a>
                    </div>
                    <div class="add_form">
                        <form action="" class="form" autocomplete="off">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="field">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Darrell">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="field">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Steward">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field drop_down">
                                        <label for="department">Select Department</label>
                                        <select class="form-control" name="department" id="department">
                                            <option value="" disabled selected>Select Department</option>
                                            <option value="Health Department">Health Department</option>
                                            <option value="Fire Department">Fire Department</option>
                                            <option value="Business Department">Business Department</option>
                                            <option value="Lorem Department">Lorem Department</option>
                                            <option value="Ipsum Department">Ipsum Department</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Darrell.steward345@gmail.com" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field">
                                        <label for="phone_number">Phone Number</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="+012 345 6789" autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="........" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="field">
                                        <label class="switch">
                                            <input class="toggleButton" type="checkbox" checked>
                                            <span class="slider round"></span>
                                            <span class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</span>
                                        </label>
                                        <input type="submit" name="submit" class="btn_submit" value="Submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
