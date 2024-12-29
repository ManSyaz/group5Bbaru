<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('subjects.index',compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject_code' => 'required',
            'subject_name' => 'required',
            'lecturer_name' => 'required'
            ]);
            // Or alternatively:
            Subject::create($request->all());
            return redirect()->route('subjects.index')
            ->with('success', 'Subject created successfully.');
           
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $subject = Subject::find($id);
        return view('subjects.show', compact('subject'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subjects.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'subject_code' => 'required',
            'subject_name' => 'required',
            'lecturer_name' => 'required'
            ]);
            
            Subject::create($request->all());
            return redirect()->route('subjects.index')
            ->with('success', 'Subject created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $subject = Subject::find($id);
        $subject->delete();

         return redirect()->route('subjects.index')->with('success','Subject deleted successfully');
    }
}
