
@extends('layouts.app')


@section('content')


    <table class="table table-bordered">
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
      @foreach ($user as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
      </tr>
      @endforeach
    </table>
  </div>


@endsection