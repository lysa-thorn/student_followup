@extends('layouts.app')

@section('content')
<div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Add Student</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('students.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="firstName" class="col-md-4 col-form-label text-md-right">{{ __('FirstName') }}</label>

                                <div class="col-md-6">
                                    <input id="firstName" type="text" class="form-control" placeholder="Firstname" name="firstName" required autocomplete="firstName">

                              
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lastName" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>

                                <div class="col-md-6">
                                    <input id="lastName" type="text" class="form-control" placeholder="Lastname" name="lastName" required autocomplete="lastName">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="class">
                                        <option selected disabled>Class</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="SNA">SNA</option>
                                        <option value="Web Programming">Web Programming</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                                <div class="col-md-6">
                                    <input id="picture" type="file" class="form-control" name="image" required autocomplete="picture">
                                </div>
                            </div>

                             <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Tutor') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="tutor">
                                        <option selected disabled>Tutor</option>
                                       @foreach($users as $user)
                                            @if($user->role== 0)
                                                <option value="{{$user->id}}">{{$user->firstName." ".$user->lastName}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                <div class="col-md-6">
                                   <textarea class="form-control" placeholder="Description" name="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Add Student') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection