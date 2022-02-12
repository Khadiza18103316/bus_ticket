@extends('admin.master')
@section('content')

    <h3>Passenger list</h3>
    
    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $user->name}}</td>
                    <td>{{ $user->phone}}</td>
                    <td>{{ $user->email}}</td>
                    <td>{{ $user->password }}</td>
                    <td><button class="btn btn-danger btn-sm" data-toggle="modal"
                        data-target="#exampleModal{{$user->id}}">Delete</button>
                </td>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form action="{{route('passenger.delete',$user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"
                                        id="exampleModalLabel{{$user->id}}}}">Delete
                                        confiramation
                                    </h5>
                                    <button type="button" class="close"
                                        data-dismiss="modal" aria-label="Close">
                                        <span aria-fidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Are you sure?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection