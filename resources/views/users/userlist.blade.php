@extends('layout')

@section('title', 'Members - EZTV')

@section('content')
  <div class="columns">
    <div class="column">
      <table class="table is-fullwidth is-striped">
        <thead>
          <tr>
            <th>ID</abbr></th>
            <th>Name</th>
            <th>Country</th>
            <th>Registered</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Country</th>
            <th>Registered</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($users as $user)
          <tr>
            <th>{{ $user->id }}</th>
            <td><a href="{{ URL('/users/'.$user->id )}}">{{ $user->name }}</a></td>
            <td>{{ $user->country }}</td>
            <td>{{ date("Y-m-d", strtotime($user->created_at)) }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>

    </div>
    @include('sidebar')
  </div>
@endsection
