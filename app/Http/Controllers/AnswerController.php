<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnswerRequest;
use App\Models\Answer;

class AnswerController extends Controller
{
    public function index()
    {
        return Answer::all();
    }

    public function store(AnswerRequest $request)
    {
        return Answer::create($request->validated());
    }

    public function show(Answer $answer)
    {
        return $answer;
    }

    public function update(AnswerRequest $request, Answer $answer)
    {
        $answer->update($request->validated());

        return $answer;
    }

    public function destroy(Answer $answer)
    {
        $answer->delete();

        return response()->json();
    }
}
