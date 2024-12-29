<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::all();
        return view('students.index',compact('students'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
            ]);
            
            // Or alternatively:
            User::create($request->all());
            return redirect()->route('students.index')
            ->with('success', 'Student created successfully.');           
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student=User::find($id);
        return view('students.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student=User::find($id);
        return view('students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
            ]);
            // Or alternatively:
            $student->update($request->all());
            return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $student = User::find($id);
        $student->delete();
        return redirect()->route('students.index')->with('success','Student deleted successfully');
    }
}
