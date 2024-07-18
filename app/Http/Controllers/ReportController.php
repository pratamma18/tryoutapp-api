<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tryout_question_id' => 'required|integer',
            'laporan' => 'required|string',
        ]);

        $report = Report::create([
            'user_id' => Auth::id(),
            'tryout_question_id' => $request->tryout_question_id,
            'laporan' => $request->laporan,
            'status' => 1, // Default status
        ]);

        return response()->json([
            'status' => 200,
            'data' => $report,
        ]);
    }
}

