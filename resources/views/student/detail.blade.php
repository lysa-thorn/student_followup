@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Student Detail</h3>
                    </div>
                    <div class="card-body">
                        <img class="mx-auto d-block" src="{{asset('img/'.$student->picture)}}"><br>
                        <h4>{{$student->firstName." ".$student->lastName}} - {{$student->class}}</span></h4>
                        <h5>Description:</h5>
                        <p>{{$student->description}}</p>
                        @if($student->user_id != "")
                        <p>Tutor By: {{$student->user['firstName']." ".$student->user['lastName']}}</p>
                        @else
                        <p>Tutor By: No</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection