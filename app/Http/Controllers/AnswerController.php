<?php

namespace App\Http\Controllers;

use App\Http\Requests\answerRequest;
use App\Models\answer;

class answerController extends Controller
{
    public function index()
    {
        return answer::all();
    }

    public function store(answerRequest $request)
    {
        return answer::create($request->validated());
    }

    public function show(answer $answer)
    {
        return $answer;
    }

    public function update(answerRequest $request, answer $answer)
    {
        $answer->update($request->validated());

        return $answer;
    }

    public function destroy(answer $answer)
    {
        $answer->delete();

        return response()->json();
    }
}
