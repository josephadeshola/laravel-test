@extends('nav')
@section('main')
<div class="container">
    <div>
        {{-- {{dd(Auth::user())}} --}}
        {{-- @if(Auth::user()) --}}
        <div class="row mt-5">
            @foreach ($details as $note)
            {{-- {{$allDetails}} --}}
            <div class="shadow mt-3 col-8 mx-auto py-4 ">
                <div class="col-6">

                    {{-- <div><b>User_id: </b> {{$note->user_id}}</div> --}}
                    <div class="col-9 mt-3  d-flex"><b>Fullname : </b> <div> {{$note->full_name}}</div></div>
                    <div class="col-9 mt-3  d-flex"><b>Phone number:</b> {{$note->phonenumber}}</div>
                    <div class="col-12  mt-3 d-flex"><b>Email : </b> {{$note->email}}</div>
                    <div class="col-12  mt-3 d-flex"><b>Password: </b> {{$note->password}}</div>
                    <div class="col-12  mt-3 d-flex"><b>Address : </b> {{$note->address}}</div>
                    <div class="col-9  mt-3 d-flex d-flex justify-between gap-2">
                        <form action="" >
                            @csrf
                            <button class="btn btn-danger ">
                                Delete
                            </button>
                        </form>
                   
                    <a href="">
                        <button class="btn btn-success">
                            Edit
                        </button>
                    </a>
                    <a href="">
                        <button class="btn btn-primary">
                            View
                        </button>
                    </a>
                </div>
                </div>
            </div>
            @endforeach
        </div>
        {{-- @else --}}
        <div>you are not currently signed in</div>
        <a href="/login">Login in here!</a>
        {{-- @endif --}}
    </div>
    
</div>
@endsection