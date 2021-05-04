@extends('layouts.app')
@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <p class="h4 mb-4  row justify-content-center">Update Student</p>
                <form action="{{route('update',$student->id)}}" method="post">
                {{ csrf_field() }}
                <!-- 2 column grid layout with text inputs for the first and last names -->
                    <div class="row mb-4">
                        <div class="col">
                            <div class="form-outline">
                                <input value="{{$student->first_name}}" type="text" name="firstname" id="form3Example1" class="form-control" />
                                <label class="form-label" for="form3Example1">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" value="{{$student->last_name}}" name="lastname" id="form3Example2" class="form-control" />
                                <label class="form-label" for="form3Example2">Last name</label>
                            </div>
                        </div>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" value="{{$student->email}}" name="email" id="form3Example3" class="form-control" />
                        <label class="form-label" for="form3Example3">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="number" value="{{$student->phone}}" name="phone" id="form3Example4" class="form-control" />
                        <label class="form-label" for="form3Example4">phone</label>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>

                    <!-- Register buttons -->
                    <div class="text-center">

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection






