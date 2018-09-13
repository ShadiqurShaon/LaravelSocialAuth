@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table style="border:1px solid gray;text-align: center">
                        <thead>
                        <tr style="border:1px solid gray;text-align: center">
                            <td>Name</td>
                            <td>Email</td>
                            <td>Type</td>
                            <td>User</td>
                            <td>Admin</td>
                            <td>Supar Admin</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr style="border:1px solid gray;text-align: center">
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                            <td>
                                <input type="checkbox" {{$user->haseRole('user')?"checked":""}}>
                            </td>
                             <td>
                                <input type="checkbox" {{$user->haseRole('admin')?"checked":""}} name="user_admin" >
                             </td>

                             <td>
                                 <input type="checkbox" {{$user->haseRole('super_admin')?"checked":""}} name="user_auper_admin">
                             </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
