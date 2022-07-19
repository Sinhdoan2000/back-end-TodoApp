<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do - add</title>
    <style>
        .todo{
            max-width: 500px;
            width: 100%;
            height: 100%;
            min-height: 200px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
            padding: 10px;
            margin: 20px auto;
        }
        .todo form{
            width: 96%;
        }
        .todo h1{
            margin: 10px;
            color: #545151;
        }
        .todo #addnew{
            width: 100%;
            padding: 10px;
            margin: 15px 0 10px;
            border: none;
            outline: none;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.5);
        }
        .todo #submit{
            padding: 10px 15px;
            border: none;
            outline: none;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
        }
        .todo .errorMessage{
            color: red;
            display: block;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="todo">
        <h1>To do - add</h1>  
        <form method="POST" action="/todo/api">
            @csrf
            <input type="text" name="TITLE" id="addnew" placeholder="Enter your job"/>
            <input type="hidden" name="STATUS" value="false" placeholder="Enter your job"/>
            <span class="errorMessage">{{ $errors->first('job') }}</span>
            <button type="submit" id="submit">Add new</button>
        </form>
    </div>
</body>
</html>
