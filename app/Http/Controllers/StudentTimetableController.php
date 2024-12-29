<?php

namespace App\Http\Controllers;

use App\Models\StudentTimetable;
use App\Models\User;
use App\Models\Subject;
use App\Models\Day;
use App\Models\Hall;
use App\Models\LecturerGroup;
use Illuminate\Http\Request;

class StudentTimetableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $timetables = StudentTimetable::with(['user', 'subject', 'day', 'hall', 'lecturer_group'])->get();
        return view('timetables.index',compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $students = User::all();
        $subjects = Subject::all();
        $days = Day::all();
        $halls = Hall::all();
        $groups = LecturerGroup::all();
        return view('timetables.create', compact('students','subjects','days','halls','groups'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id'        => 'required',
            'subject_id'        => 'required',
            'day_id'            => 'required',
            'hall_id'           => 'required',
            'group_id'          => 'required',
            'time_from'         => 'required',
            'time_to'           => 'required',
            ]);
            
            // Or alternatively:
            StudentTimetable::create([
                'user_id'           => $request->student_id,
                'subject_id'        => $request->subject_id,
                'day_id'            => $request->day_id,
                'hall_id'           => $request->hall_id,
                'lecturer_group_id' => $request->group_id,
                'time_from'         => $request->time_from,
                'time_to'           => $request->time_to,
            ]);

            return redirect()->route('timetables.index')
            ->with('success', 'Timetables created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(StudentTimetable $timetable)
    {
        $timetable = StudentTimetable::with(['user', 'subject', 'day', 'hall', 'lecturer_group'])->findOrFail($timetable->id);
        return view('timetables.show', compact('timetable'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StudentTimetable $timetable)
    {
        $students = User::all();
        $subjects = Subject::all();
        $days = Day::all();
        $halls = Hall::all();
        $groups = LecturerGroup::all();

        $timetable = StudentTimetable::with(['user', 'subject', 'day', 'hall', 'lecturer_group'])->findOrFail($timetable->id);
        return view('timetables.edit', compact('students', 'subjects', 'days', 'halls', 'groups', 'timetable'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StudentTimetable $timetable)
    {
        $request->validate([
            'student_id'        => 'required',
            'subject_id'        => 'required',
            'day_id'            => 'required',
            'hall_id'           => 'required',
            'group_id'          => 'required',
            'time_from'         => 'required',
            'time_to'           => 'required',
            ]);
            
            // Or alternatively:
            $timetable->update([
                'user_id'           => $request->student_id,
                'subject_id'        => $request->subject_id,
                'day_id'            => $request->day_id,
                'hall_id'           => $request->hall_id,
                'lecturer_group_id' => $request->group_id,
                'time_from'         => $request->time_from,
                'time_to'           => $request->time_to,
            ]);
    
            return redirect()->route('timetables.index')->with('success', 'Timetable updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StudentTimetable $timetable)
    {
         // Delete the subject
         $timetable->delete();

         // Reset the auto-increment value
         $maxId = \DB::table('student_timetables')->max('id') + 1;
 
         // Check if the table is empty. If it is, reset the auto-increment to 1
         if ($maxId == 1) {
             \DB::statement("ALTER TABLE student_timetables AUTO_INCREMENT = 1");
         } else {
             \DB::statement("ALTER TABLE student_timetables AUTO_INCREMENT = $maxId");
         }
 
         // Redirect with success message
         return redirect()->route('timetables.index')->with('success', 'Timetable deleted successfully!');
    }
}
