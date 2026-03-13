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
        return question::create($request->validated());
    }

    public function show(question $question)
    {
        return $question;
    }

    public function update(questionRequest $request, question $question)
    {
        $question->update($request->validated());

        return $question;
    }

    public function destroy(question $question)
    {
        $question->delete();

        return response()->json();
    }
}
