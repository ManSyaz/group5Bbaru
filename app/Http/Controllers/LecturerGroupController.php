<?php

namespace App\Http\Controllers;

use App\Models\LecturerGroup;
use Illuminate\Http\Request;

class LecturerGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = LecturerGroup::all();
        return view('groups.index',compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'part' => 'required',
            ]);
            
            // Or alternatively:
            LecturerGroup::create($request->all());
            return redirect()->route('groups.index')
            ->with('success', 'Groups created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $group = LecturerGroup::find($id);
        return view('groups.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $group = LecturerGroup::find($id);
        return view('groups.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'part' => 'required',
            ]);
            // Or alternatively:
            LecturerGroup::create($request->all());
            return redirect()->route('groups.index')
            ->with('success', 'Groups created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $group = LecturerGroup::find($id);
        $group->delete();

        return redirect()->route('groups.index')->with('success','Groups deleted successfully');
    }
}
