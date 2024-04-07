<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{route('todo.add')}}">
    @csrf
    <input type="text" id="title" name="title" placeholder="Nhập tiêu đề của sản phẩm">
    <input type="checkbox" id="status" name="status" >
    <input type="text" id="description" name="description" placeholder="Mô tả">
    <button type="submit">tạo</button>
</form>
    <table>
        <input type="text">
        <th>
            <tr>title</tr>
            <tr>status</tr>
            <tr>description</tr>
        </th>
        <th>
            <tr>
        @foreach($todo as $t)
            <td>{{$t['title']}}</td>
            <td>{{$t['status']}}</td>
            <td>{{$t['description']}}</td>
            <td>
{{--                <form action="{{ route('product.delete', $product->id) }}" method="POST">--}}
                <form action="{{ route('todo.delete',$t->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">xóa</button>
                </form>
            </td>
        @endforeach
            </tr>
        </th>
    </table>
</body>
</html>
