<h1>Users List</h1>
@if($users->isNotEmpty())
    @foreach ($users as $user)
        <p>{{ $user->name }}</p>
    @endforeach
@else
    <p>No users found</p>
@endif