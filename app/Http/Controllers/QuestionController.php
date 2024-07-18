<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::with('options')->get();

        return response()->json([
            'status_code' => 200,
            'error' => false,
            'data' => $questions,
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
    public function show(string $id)
    {
        // Cari soal berdasarkan ID
        $question = Question::with('options')->find($id);

        // Jika soal tidak ditemukan, kembalikan respon 404
        if (!$question) {
            return response()->json([
                'status_code' => 404,
                'error' => true,
                'message' => 'Question not found'
            ], 404);
        }

        // Jika soal ditemukan, kembalikan respon dengan data soal
        return response()->json([
            'status_code' => 200,
            'error' => false,
            'data' => $question
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
