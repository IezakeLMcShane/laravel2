<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    
    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user['name'] }} {{ $user['surname'] }} - 
                @if ($user['banned'])
                    <span style="color: red;">Заблокирован</span>
                @else
                    <span style="color: green;">Активен</span>
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>