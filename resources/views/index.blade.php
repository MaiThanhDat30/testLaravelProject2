<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sách</title>
</head>
<body>
    <h1>Danh sách Sách</h1>

    <!-- Nút Thêm mới -->
    <a href="">
        <button>➕ Thêm sách</button>
    </a>

    <table border="1" cellpadding="10">
        <tr>
            <th>Tiêu đề</th>
            <th>Tác giả</th>
            <th>Năm</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->published_year }}</td>
            <td>{{ $book->price }}$</td>
            <td>
                <!-- Nút Sửa -->
                <a href="">
                    <button>✏️ Sửa</button>
                </a>

                <!-- Nút Xóa -->
                <form action="" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Xác nhận xóa?')">🗑️ Xóa</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>