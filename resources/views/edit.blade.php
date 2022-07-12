<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="/update/{{ $job->ID ?? '' }}" method="post">
        @method('PATCH')
        @csrf
        <input type="text" name="job" value="{{ $job->TITLE ?? '' }}"/>
        <input type="text" name="status" value="{{ $job->STATUS ?? '' }}" />
        <button type="submit">Update</button>
    </form>
</body>
</html>