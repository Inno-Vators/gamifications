@extends('layouts.dashboard')


@section('content')
    <div class="container my-5">

        <form action="{{ route('home.submitTest', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
                <div class="card shadow-lg p-5 mb-5" style="width: 100%; height:100%; border-radius: 50px">
                    <div class="card-body ">
                        <div class="container-fluid">
                            @php
                                $x = 0;
                                // $question = "$course->questions";
                            @endphp

                                <strong>Question: {{ $question->question }} </strong>
                                <div class="mt-3"></div>

                                <input type="number" value="{{ $question->id }}" class="form-control" name="question_id" required hidden>

                                <div class="form-check">
                                @foreach($question->options as $option)
                                    <input type="radio" name="option_id" id="{{ $option->id }}" value="{{ $option->id }}" required>

                                    <label class="form-check-label " for="{{ $option->option }}">
                                        {{ $option->option }}
                                    </label><br><hr>
                                @endforeach
                                </div>


                        </div>

                    </div>
                </div>
            <button type="submit" class="btn btn-sm btn-outline-info" >Submit</button>
        </form>
        <div class="d-flex justify-content-center">

        </div>
    </div>
@endsection


