@extends('noteapp.index')
@section('main')
<div class="container">
    <div>
        {{-- {{dd(Auth::user())}} --}}
        @if(Auth::user())
        <div class="row mt-5">
            @foreach ($details as $note)
            <div class="shadow mt-3 col-8 mx-auto py-4 d-flex justify-content-center">
                <div class="col-6">

                    <div><b>User_id: </b> {{$note->user_id}}</div>
                    <div class="col-9 mt-3  d-flex"><b>Note Title : </b> <div> {{$note->full_name}}</div></div>
                    <div class="col-9 mt-3  d-flex"><b>Note Content :</b> {{$note->phonenumber}}</div>
                    <div class="col-12  mt-3 d-flex"><b>Created Date/ Time : </b> {{$note->email}}</div>
                    <div class="col-12  mt-3 d-flex"><b>Created Date/ Time : </b> {{$note->password}}</div>
                    <div class="col-12  mt-3 d-flex"><b>Created Date/ Time : </b> {{$note->address}}</div>
                    <div class="col-9  mt-3 d-flex d-flex justify-between gap-2">
                        <form action="/" method="POST" >
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
                <div class="float-end">
                    <img class="col-8 mx-auto float-end rounded-5" src="/images/{{$note->user_img}}" alt="">
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div>you are not currently signed in</div>
        <a href="/login">Login in here!</a>
        @endif
    </div>
    
</div>
@endsection