@extends('layouts.app')
@extends('layouts.main')
@if (session('successmsg'))
<div class="alert alert-success" role="alert">
    {{session('successmsg')}}
</div>

@endif
@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <table class="table align-middle">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">phone</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $students as $student)
                <tr>
                    <th scope="row">{{$student->id}}</th>
                    <td>{{$student->first_name}}</td>
                    <td>{{$student->last_name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->phone}}</td>
                    <td><a href="{{route('edit',$student->id) }}">Edit</a> || <a href="" >Delete</a>

                        <form method="post" id="delete-form-{{$student->id}}" action="{{route('delete_student',$student->id)}}"
                        style="display: none">
                            {{ csrf_field() }}

                        </form>
                        <button type="button" onclick="if(confirm('Are you sure you want to delete this student?')){
                        event.preventDefault();
                        document.getElementById('delete-form-{{$student->id}}').submit();

                            }">
 Delete
                        </button>
                    </td>
                </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection





