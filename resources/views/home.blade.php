@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Questions
                        <a class="btn btn-primary float-right" href="{{ route('questions.create') }}">
                            Create a Question
                        </a>

                        <div class="card-body">

                            <div class="card-deck">
                                @forelse($questions as $question)
                                    <div class="col-sm-4 d-flex align-items-stretch">
                                        <div class="card mb-3 ">
                                            <div class="card-header">
                                                <small class="text-muted">
                                                    Updated: {{ $question->created_at->diffForHumans() }}
                                                    Answers: {{ $question->answers()->count() }}

                                                </small>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text">{{$question->body}}</p>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-text">

                                                    <a class="btn btn-primary float-right" href="{{ route('questions.show', ['id' => $question->id]) }}">
                                                        View
                                                    </a>

                                                    <a class="btn btn-primary float-left" onclick="myFunction()">
                                                        Like
                                                    </a>

                                                    <p id="demo">0</p>


                                                    <a class="btn btn-primary float-md-left" onclick="myFunction2()">
                                                        Dislike
                                                    </a>

                                                    <p id="demo2">0</p>
                                                

                                                <script>
                                                        var add = (function () {
                                                            var counter = 0;
                                                            return function () {return counter += 1;}
                                                        })();

                                                        function myFunction(){
                                                            document.getElementById("demo").innerHTML = add();
                                                        }

                                                        function myFunction2(){
                                                            document.getElementById("demo2").innerHTML = add();
                                                        }


                                                    </script>


                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    There are no questions to view, you can  create a question.
                                @endforelse


                            </div>

                        </div>
                        <div class="card-footer">
                            <div class="float-right">
                                {{ $questions->links() }}
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection