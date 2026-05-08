<?php

namespace App\Http\Controllers;

use App\Models\StudentRegistration;
use Illuminate\Http\Request;

class StudentRegistrationController extends Controller
{
    public function create()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:30',
            'course' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        StudentRegistration::create($request->all());

        return redirect()->back()->with('success', 'Your registration has been submitted successfully.');
    }
}