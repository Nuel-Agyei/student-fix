@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (Session::has('alert-success'))
                            <div class="alert alert-success" role="alert">
                                {{ Session::get('alert-success') }}
                            </div>
                        @endif
                        @if (count($student) > 0)
                            <table class="table">
                                <thead>
                                    <tbody>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Phone Number</th>
                                            <th scope="col">E-mail</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </tbody>

                                </thead>
                                <tbody>
                                    @foreach ($student as $student)
                                        <tr>
                                            <td> {{ $student->Name }} </td>
                                            <td> {{ $student->course }} </td>
                                            <td> {{ $student->Class }} </td>
                                            <td>
                                                <a class="btn m-1 btn-sm btn-outline-primary" href="">Edit</a>
                                                <form method="post" action="{{ route('student.delete') }}" class="inner">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="hidden" name="student_id" value="{{$student->id}}">
                                                    <input type="submit" name="" class="btn btn-dark btn-sm" value="delete">
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        @else
                            <h2>No children registered</h2>
                            <a class="btn btn-sm btn-outline-primary" href="{{route('student.create')}}">Register Student</a><br>
                        @endif
                        {{ __('Index Page') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
