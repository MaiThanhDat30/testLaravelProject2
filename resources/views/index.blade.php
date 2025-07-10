<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sách</title>
</head>
<body>
    <h1>Danh sách Sách</h1>
    <ul>
        @foreach ($books as $book)
            <li>
                <strong>{{ $book->title }}</strong> - {{ $book->author }} ({{ $book->published_year }}) - {{ $book->price }}$
            </li>
        @endforeach
    </ul>
</body>
</html>
