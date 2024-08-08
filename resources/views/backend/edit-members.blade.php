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
                <form action="{{ route('members.edit.submit', $user->id) }}" method="post" class="form" autocomplete="off">
                    @csrf  <!-- CSRF Token -->
                    <div class="top_add">
                        <a href="{{ route('members') }}" class="btn_back">
                            <img src="{{ asset('dashboard_assets/images/icon_left.png') }}" alt="">
                        </a>
                        <div class="ext">
                            <h2 class="sec_head ft_oswlad">Edit Members</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
                        </div>
                        <input type="submit" class="btn_custom" value="Edit Member">
                    </div>
                    <div class="add_form">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="field">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name', $user->first_name) }}" placeholder="Darrell">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="field">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name', $user->last_name) }}" placeholder="Steward">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="field">
                                    <label for="user_name">User Name</label>
                                    <input type="text" class="form-control" id="user_name" name="name" value="{{ old('name', $user->name) }}" placeholder="Steward">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="field drop_down">
                                    <label for="role">User Role</label>
                                    <select class="form-control" name="role" id="role">
                                        <option value="" disabled>Select User Role</option>
                                        <option value="user_interface" {{ old('role', $user->role) == 'user_interface' ? 'selected' : '' }}>User Interface</option>
                                        <option value="consultant_interface" {{ old('role', $user->role) == 'consultant_interface' ? 'selected' : '' }}>Consultant Interface</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="field drop_down">
                                    <label for="department">Select Department</label>
                                    <select class="form-control" name="department" id="department">
                                        <option value="" disabled>Select Department</option>
                                        @foreach($alldepartments as $department)
                                            <option value="{{ $department->id }}" {{ old('department', $user->department_id) == $department->id ? 'selected' : '' }}>{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="field">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" readonly value="{{ old('email', $user->email) }}" placeholder="Darrell.steward345@gmail.com" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="field">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" placeholder="+012 345 6789" autocomplete="off" required>
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
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="........" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="field">
                                    <label class="switch">
                                        <input class="toggleButton" name="status" type="checkbox" {{ $user->status == 'active' ? 'checked' : '' }}>
                                        <span class="slider round"></span>
                                        <span class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</span>
                                    </label>
                                    <!-- <input type="submit" name="submit" class="btn_submit" value="Submit"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
@endsection
