<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail job</title>
</head>
<body>
    <div class="todo">
        <p>Id</p> <span>{{ $job->ID }}</span>
        <h2>Title</h2><span>{{ $job->TITLE }}</span>
        <p>Status</p><span>{{ $job->STATUS }}</span>
    </div>
    <a href="/todo/api">Home</a>
</body>
</html>
