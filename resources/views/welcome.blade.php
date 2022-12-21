<h1>This is from docker container</h1>
<h3>This is updated</h3>
@php
 $users = \App\Models\User::all();   
@endphp
@foreach ($users as $user)
    <p>{{ $user->name }}</p>
@endforeach
