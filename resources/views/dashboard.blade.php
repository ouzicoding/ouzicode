<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <ul>
        @foreach($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
        <li>{{ $admin->name }}</li>
    </ul>
</body>
</html>
