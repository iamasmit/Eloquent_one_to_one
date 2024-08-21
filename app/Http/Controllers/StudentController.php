<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $students = Student::with('contact')->get();
        return $students;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // it create a data of both Student and Contact model
        $students = Student::create([
            'name' => 'Honey Singh',
            'age' => 26,
            'gender' => 'Male'

        ]);
        // contact() name came from the Student.php model where we mention a function contact
        $students->contact()->create([
            'email' => 'honey@gmail.com',
            'phone' => '1234567890',
            'address' => 'Delhi',
            'city' => 'New Delhi',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
