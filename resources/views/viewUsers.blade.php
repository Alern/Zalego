@extends('layouts.app')
@section('content')

    <center>

    <div>
        <h2><strong>Edit Profile Section</strong></h2>
    </div>

    <div class="panel-body">
        <div class="table-responsive">
            <table cellpadding="1" cellspacing="1" class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Languages</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>

                </tr>
                </thead>
                <tbody>

                @foreach($admins as $admin)
                    <tr>
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->fname}}</td>
                        <td>{{$admin->lname}}</td>
                        <td>{{$admin->gender}}</td>
                        <td>{{$admin->languages}}</td>
                        <td>{{$admin->uname}}</td>
                        <td>{{$admin->email}}</td>


                        <td>  <a href="editUser/{{$admin->id}}">Edit User</a> </td>

                        <td>
                            <form method ="post" action = "/delete">
                                {{csrf_field()}}
                                <input type="text" name ="id" value ="{{$admin->id}}" hidden>
                                <input type ="submit" value="delete" class="btn w-xs btn-danger2">
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {!!$admins->render()!!}
        </div>

    </div>




    </center>



@endsection