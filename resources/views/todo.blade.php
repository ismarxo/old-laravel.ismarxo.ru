<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo App</title>
    
</head>
<body>
    <h1 class="todo__head">
        Todo app
    </h1>

    <form action="/issue/add/" method="POST">
        @csrf
        <input type="text" name="name" placeholder="task name">
        <button type="submit">Add task</button>
    </form>

    <ol>
        @foreach ($issues as $item)
            <li>{{$item}}</li>
        @endforeach
        

    </ol>

    <footer>
        count task: 5
    </footer>
</body>
</html>