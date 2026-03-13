<?php

namespace App\Http\Controllers;

use App\Http\Requests\questionRequest;
use App\Models\Question;
use Illuminate\View\View;

class QuestionController extends Controller
{
    public function index(): View
    {
        return view('welcome');
    }

    public function store(questionRequest $request)
    {
        return Question::create($request->validated());
    }

    public function show(Question $question)
    {
        return $question;
    }

    public function update(QuestionRequest $request, Question $question)
    {
        $question->update($request->validated());

        return $question;
    }

    public function destroy(Question $question)
    {
        $question->delete();

        return response()->json();
    }
}
