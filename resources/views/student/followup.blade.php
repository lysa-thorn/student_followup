@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <a href="{{route('students.create')}}" class="btn btn-primary ">Add Student</a>
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3">
            <table class="table table-bordered">
                <tr>
                    <th>Picture</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Classs</th>
                    <th>Action</th>
                </tr>
                @foreach($students as $student)
                    @if($student->activeFolloup == 1)
                        
                    <tr>
                        <td><img class="mx-auto d-block" src="{{asset('img/'.$student->picture)}}" class="img-fluid rounded-circle"></td>
                        <td>{{$student->firstName}}</td>
                        <td>{{$student->lastName}}</td>
                        <td>{{$student->class}}</td>
                        <td>
                            <a href=""><i class='fas fa-user-alt-slash text-success'></i></a>&nbsp; | &nbsp;
                            <a href=""><i class='fas fa-user-edit'></i></a>
                        </td>
                        @endif
                        
                </tr>
                @endforeach

            </table>
        </div>
    </div>
</div>
@endsection