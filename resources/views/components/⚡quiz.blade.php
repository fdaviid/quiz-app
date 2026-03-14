<div class="card p-4 bg-dark text-white">

    <div class="d-flex justify-content-between mb-3">
        <div class="d-flex flex-column gap-1">
            <span> Question {{ min($currentIndex + 1, count($questions)) }} / {{ count($questions) }} </span>
            <button id="restartButton" type="button" class="btn btn-outline-light d-none" wire:click="finishQuiz">Restart</button>
        </div>
        <span>Score: {{ $score }}</span>
    </div>

    @if(isset($questions[$currentIndex]))
        <h4 class="mb-4">
            {{ $questions[$currentIndex]->text }}
        </h4>

        @foreach($questions[$currentIndex]->answers->shuffle() as $answer)
            <button wire:click="selectAnswer({{ $answer->id }})"
                class="btn btn-outline-light w-100 mb-2"
                @if($selectedAnswer) disabled @endif>
                {{ $answer->answer }}
            </button>
        @endforeach

        @if(!$hint)
            <div class="col-md-3 d-flex justify-content-end align-items-end m-auto">
                <button wire:click="showHint" class="btn btn-outline-warning w-100 mb-2">
                    Show Hint
                </button>
            </div>
        @endif

         @if($hint)
            <div class="alert alert-info">
                <span class="text-success">💡{{ $questions[$currentIndex]->hint }}</span>
            </div>
        @endif

        @if($result !== null)
            @if($result)
                <div class="alert alert-success mt-3">
                    ✅ Correct
                </div>
            @else
                <div class="d-flex justify-content-center gap-1 alert alert-danger mt-3">
                    <span>❌ Wrong, correct is: </span>
                    <span class="text-success">{{ $questions[$currentIndex]->answers()->correct()->first()->answer }}</span>
                </div>
            @endif
            @if($currentIndex+1 >= count($questions))
                <button wire:click="nextQuestion" class="btn btn-warning mt-2">
                    See Result
                </button>
            @else
                <button wire:click="nextQuestion" class="btn btn-warning mt-2">
                    Next Question
                </button>
            @endif
        @endif

    @else
        <div class="text-center">
            <h3 class="text-success mb-3">
                Quiz Finished 🎉
            </h3>

            <h4>
                Final Score: {{ $score }} / 10
            </h4>

            <button wire:click="finishQuiz" class="btn btn-outline-secondary mt-3">
                Restart Quiz
            </button>

        </div>

    @endif

</div>
