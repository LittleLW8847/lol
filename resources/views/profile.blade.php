@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                   <!--  @foreach($users as $user)

                        <h1>{{$user->name}}</h1><br>
                    @endforeach -->
                    {{Auth::user()->name}}<br>
                    {{Auth::user()->email}}<br>
                    You are logged in!


                    <form action = "{{URL::to('upload')}}" method = "post" enctype="multipart/formdata" style="margin: auto 0;
                    text-align: center;
                        ">
                        <h1>Update your Profile!</h1><br>
                        <input type = "file" name = "file" id = "file" style="margin: auto 0;">
                        <input type = "submit" value = "Post" name = "post">
                        <inpput type= "hidden" value = "{{ csrf_token() }}" name = "_token">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection