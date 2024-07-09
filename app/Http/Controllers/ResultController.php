<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        return Result::all();
    }

    public function show($id)
    {
        return Result::find($id);
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id_student',
            'subject_id' => 'required|exists:subjects,id_subject',
            'score' => 'required|numeric',
        ]);

        return Result::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $result = Result::findOrFail($id);
        $result->update($request->all());

        return $result;
    }

    public function destroy($id)
    {
        Result::find($id)->delete();

        return response()->json(['message' => 'Result deleted successfully']);
    }
}
