@extends('layouts.app')

@section('content')


    <div class="panel-body">

        <form  class="form-horizontal" role="form" method="POST" action="/updateUser">
            {{ csrf_field() }}
            <input type = 'hidden' name = 'id'
                   value = "{{$users->id}}"/>
            <div class="form-group"><label class="col-sm-2 control-label">First Name</label>

                <div class="col-sm-6"><input type="text" class="form-control" name="fname" value="{{$users->fname}}"></div>
            </div>
            <div class="form-group"><label class="col-sm-2 control-label">Last Name</label>

                <div class="col-sm-6"><input type="text" class="form-control" name="lname" value="{{$users->lname}}"></div>
            </div>

            <div class="form-group"><label class="col-sm-2 control-label">Gender</label>



                <div class="col-sm-6"><input type="text" class="form-control" name="gender" value="{{$users->gender}}"></div>
            </div>

            <div class="form-group"><label class="col-sm-2 control-label">Languages</label>

                <div class="col-sm-6"><input type="text" class="form-control" name="languages" value="{{$users->languages}}"></div>
            </div>

            <div class="form-group"><label class="col-sm-2 control-label">Username</label>

                <div class="col-sm-6"><input type="text" class="form-control" name="uname" value="{{$users->uname}}"></div>
            </div>

            <div class="form-group"><label class="col-sm-2 control-label">Email</label>

                <div class="col-sm-6"><input type="text" class="form-control" name="email" value="{{$users->email}}"></div>
            </div>

            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <button class="btn btn-primary" type="submit">Update</button>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-8 col-sm-offset-2">
                    <a href="/home">Back</a>
                </div>
            </div>
        </form>
    </div>




@endsection
