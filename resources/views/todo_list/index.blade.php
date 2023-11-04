<style>
    .memo form{
        display: inline-block;
    }
</style>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>テスト</title>
</head>

<body>
    <h1>Simple Todo App</h1>
 <form action="/list" method="POST">
    @csrf
    <input type="text" name="name" autocomplete="off">
    <button type="submit">保存</button>
</form>

    <h2>保存されたTodo</h2>
    @if($todo_lists->isNotEmpty())
        @foreach($todo_lists as $item)
        <div class="memo">
            <form action="/list/{{$item->id}}" method="POST">
                @csrf
                @method('PUT')
                <input type="text" name="name" value="{{$item->name}}">
                <button type="submit">編集</button>
            </form>
            <form action="/list/{{$item->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">削除</button>
            </form>
        </div>
        @endforeach
    @endif


</body>

</html>
