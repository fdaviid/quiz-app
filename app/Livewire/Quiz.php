<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Question;
use Illuminate\Support\Facades\Session;

class Quiz extends Component
{
    public $questions;
    public $questionIds;
    public $currentIndex = 0;
    public $selectedAnswer = null;
    public $result = null;
    public $score = 0;
    public $restart = false;
    public $hint = false;


    public function mount()
    {
        $this->currentIndex = 0;
        $this->score = 0;
        $this->selectedAnswer = null;
        $this->result = null;

        // Forget session so new questions will be loaded
        session()->forget(['quiz_questions','quiz_index','quiz_score']);

        $this->restart = true;

        $this->questions = Question::with('answers')->inRandomOrder()->take(10)->get();

        Session::put('quiz_questions', $this->questions->pluck('id')->toArray());
        Session::put('quiz_index', 0);
        Session::put('quiz_score', 0);
    }

    public function selectAnswer($answerId)
    {
        if($this->selectedAnswer) return;

        $answer = $this->questions[$this->currentIndex]->answers->where('id', $answerId)->first();

        $this->selectedAnswer = $answerId;

        if($answer->isCorrect){
            $this->result = true;
            $this->score++;
            $this->hint = false;
        }else{
            $this->result = false;
        }

        Session::put('quiz_score', $this->score);
    }

    public function nextQuestion()
    {
        $this->selectedAnswer = null;
        $this->result = null;
        $this->currentIndex++;

        $this->hint = false;

        Session::put('quiz_index', $this->currentIndex);
    }

    public function finishQuiz()
    {
        $this->currentIndex = 0;
        $this->score = 0;
        $this->selectedAnswer = null;
        $this->result = null;

        session()->forget(['quiz_questions','quiz_index','quiz_score']);
    }

    public function showHint()
    {
        $this->hint = true;
    }

    public function render()
    {
        $ids = Session::get('quiz_questions', []);
        $this->questions = Question::with('answers')->whereIn('id', $ids)->get();

        $this->currentIndex = Session::get('quiz_index', 0);
        $this->score = Session::get('quiz_score', 0);
        return view('components.⚡quiz');
    }

    public function restartQuiz()
    {
        $this->mount();
    }
}
