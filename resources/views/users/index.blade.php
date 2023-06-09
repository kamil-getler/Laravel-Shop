<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.9/dist/sweetalert2.min.js"></script>

@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Imie</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Numer telefonu</th>
            <th scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->email}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->phone_number}}</td>
           // <td>{{$user->id}}</td>


            <td>
                    <button class="btn btn-danger btn-sm delete" data-id="{{$user->id}}">X</button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    {{$users->links()}}
    </div>
@endsection
@section('javascript')
    const deleteUrl = "{{ url('users') }}/";
@endsection

@section('js-files')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection


