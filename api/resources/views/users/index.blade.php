<h1>Users List</h1>

@foreach ($users as $user)
    {{$user['id']}} <br>
    {{$user['name']}} <br>
    {{$user['email']}} <br>
    {{$user['email_verified_at']}} <br>
    {{$user['course']}} <br>
    {{$user['is_active']}} <br>
    {{$user['created_at']}} <br>
    {{$user['updated_at']}} <br><br><br>
@endforeach
