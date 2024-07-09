<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return Subject::all();
    }

    public function show($id)
    {
        return Subject::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return Subject::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update($request->all());

        return $subject;
    }

    public function destroy($id)
    {
        Subject::find($id)->delete();

        return response()->json(['message' => 'Subject deleted successfully']);
    }
}
