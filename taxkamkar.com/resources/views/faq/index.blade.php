@extends('layouts.app')

@section('content')

<style>
    .question-quiz {
        list-style:none;
        margin: 0 0 20px;
    }
    .question-quiz label {
        display:inline;
        font-size:14px;
    }
    .mr5{
        margin-bottom:5px;
    }
    .green {
        background-color: seagreen;
        padding: 5px;
        border-radius: 5px;
    }
    .red {
        background-color: indianred;
        padding: 5px;
        border-radius: 5px;
    }
    .green label {
        color: white;
    }
    .red label {
        color: white;
    }
    #quiz_result {
        padding: 20px;
        background-color: #007bff;
        color: white;
        margin-bottom: 20px;
        border-radius: 10px;
        display:none;
    }
    .retry{
        float: right;
        border: solid 1px white;
        padding: 8px;
        color: black;
        font-size: 13px;
        border-radius: 4px;
        background-color: white;
        margin-top: -6px;
    }
</style>
 
<div class="container" id="scrollhere">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background: transparent !important;
    box-shadow: 0px 9px 12px 4px #ccc;">
                <div class="card-header">
                    <center>
                        <h5>How well do you understand Tax System?</h5>
                    </center>
                </div>

                <div class="card-body">
                    <div method="post" id="quiz" name="form">
                        <div class="quiz" id="quiz_container">
                            <div id="quiz_result">
                                <span>Correct Answers: </span><span id="correct_count">3</span><span>/5</span>
                                <a class="retry" href="{{ url('faq') }}">Retry</a>
                            </div>
                            @csrf
                            @php
                                $i = 1
                            @endphp
                            @foreach($questionData as $question)
                                <li class="question-quiz">
                                    <!--Question-->
                                    <h6>{{$question->question}}</h6>
                                    <!--Options-->
                                    @if($question->answer1 != '' || $question->answer1 != null)
                                    <div class="mr5">
                                        <input type="radio" @if($question->answer == $question->answer1) data-correct="true" @endif name="{{$i}}-answers" data-id="{{$i}}-answers-A" value="{{$question->answer1}}" />
                                        <label for="{{$question->id}}-answers-A">A) {{$question->answer1}} </label>
                                    </div>
                                    @endif
                                    @if($question->answer2 != '' || $question->answer2 != null)
                                    <div class="mr5">
                                        <input type="radio" @if($question->answer == $question->answer2) data-correct="true" @endif name="{{$i}}-answers" data-id="{{$i}}-answers-B" value="{{$question->answer2}}" />
                                        <label for="{{$question->id}}-answers-A">B) {{$question->answer2}} </label>
                                    </div>
                                    @endif
                                    @if($question->answer3 != '' || $question->answer3 != null)
                                    <div class="mr5">
                                        <input type="radio" @if($question->answer == $question->answer3) data-correct="true" @endif name="{{$i}}-answers" data-id="{{$i}}-answers-C" value="{{$question->answer3}}" />
                                        <label for="{{$question->id}}-answers-A">C) {{$question->answer3}} </label>
                                    </div>
                                    @endif
                                    @if($question->answer4 != '' || $question->answer4 != null)
                                    <div class="mr5">
                                        <input type="radio" @if($question->answer == $question->answer4) data-correct="true" @endif name="{{$i}}-answers" data-id="{{$i}}-answers-D" value="{{$question->answer4}}" />
                                        <label for="{{$question->id}}-answers-A">D) {{$question->answer4}} </label>
                                    </div>
                                    @endif
                                </li>
                                @php
                                    $i++
                                @endphp
                            @endforeach
                            <div class="col-md-8 offset-md-4">
                                <button onclick="calc_result()" type="submit" class="btn btn-primary">Submit Quiz</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection