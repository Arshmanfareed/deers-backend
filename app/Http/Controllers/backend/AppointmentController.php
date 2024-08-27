<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Departments;
use App\Models\TimeSlot;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index()
    {
        echo 'sadsadasda';
        exit;
        // $appointments = Appointment::all();
        // return response()->json($appointments);
    }

    public function store(Request $request)
    {

        try {
            $request->validate([
                'department_id' => 'required|exists:departsments,id',
                'date' => 'required|date',
                'user_id' => 'required|exists:users,id',
                'start_time' => 'required',
                'end_time' => 'required',
            ]);

            // Check if an appointment with the same date, start time, end time, and department already exists
            $existingAppointment = Appointment::where('department_id', $request->department_id)
                ->whereDate('date', $request->date)
                ->whereTime('start_time', $request->start_time)
                ->whereTime('end_time', $request->end_time)
                ->first();

            if ($existingAppointment) {
                return response()->json(['error' => 'An appointment with the same date and time already exists for this department.'], 409);
            }

            // Proceed with creating the appointment
            $appointment = Appointment::create([
                'department_id' => $request->department_id,
                'user_id' => $request->user_id,
                'date' => $request->date,
                'start_time' => $request->start_time,
                'end_time' => $request->end_time,
            ]);

            $department = Departments::find($request->department_id);
            $departmentName = $department->name;

            // Calculate the duration in minutes
            $startTime = Carbon::parse($request->start_time);
            $endTime = Carbon::parse($request->end_time);
            $duration = $startTime->diffInMinutes($endTime);

            // Add the duration to the response
            $response = $appointment->toArray();
            $response['duration'] = $duration;
            $response['department_name'] = $departmentName;
            return response()->json($response, 201);
            // return response()->json($appointment, 201);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json($e->errors(), 422);
        }
    }

    public function show(Appointment $appointment)
    {
        return response()->json($appointment);
    }

    public function checkAvailability($departmentId, $date)
    {
        // Retrieve the department
        $department = Departments::find($departmentId);

        if (!$department) {
            return response()->json(['error' => 'Department not found'], 404);
        }

        // Retrieve appointments for the department on the specified date
        $appointments = Appointment::where('department_id', $departmentId)
                                    ->whereDate('date', $date)
                                    ->get();

        // Retrieve the time slots for the department based on the day of the week
        $dayOfWeek = Carbon::parse($date)->format('l');
        $timeSlots = TimeSlot::where('department_id', $departmentId)->where('day', $dayOfWeek)->get();

        // If no time slots are found for the day, return an error (assuming weekends or non-working days)
        if ($timeSlots->isEmpty()) {
            return response()->json(['error' => 'No available time slots for this day'], 404);
        }

        // Check availability by comparing time slots with booked appointments
        $availability = $timeSlots->map(function ($slot) use ($appointments) {
            $isBooked = $appointments->contains(function ($appointment) use ($slot) {
                return $slot->start_time === $appointment->start_time
                    && $slot->end_time === $appointment->end_time;
            });

            return [
                'start_time' => $slot->start_time,
                'end_time' => $slot->end_time,
                'is_booked' => $isBooked,
            ];
        });

        return response()->json($availability->values()->all());
    }

    public function appDepartments()
    {
        $all_data = Departments::all();

        return response()->json([
            'message' => 'All Departments',
            'departments' => $all_data,
        ], 201);
    }

    public function update(Request $request, Appointment $appointment)
    {
        $request->validate([
            'department_id' => 'sometimes|exists:departments,id',
            'appointment_date' => 'sometimes|date',
        ]);

        $appointment->update($request->only(['department_id', 'appointment_date']));
        return response()->json($appointment);
    }

    public function destroy(Appointment $appointment)
    {
        $appointment->delete();
        return response()->json(null, 204);
    }
}

