@extends('admin.layouts.master')

@section('page')
    Users Details
@endsection

@section('content')

    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">User Detail</h4>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <tbody>

                        <tr>
                            <th>ID</th>
                            <td>{{ $user->id }}</td>
                        </tr>

                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name }}</td>
                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{ $user->email }}</td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>{{ $user->status }}</td>
                        </tr>

                        <tr>
                            <th>Registered At</th>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>

                        <tr>
                            <th>Photo</th>
                            <td><img src="{{ URL::to('/') }}/photos/{{ $user->email }}.png" alt="" class="img-thumbnail" style="width: 150px;"></td>
                        </tr>

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection