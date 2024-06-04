<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('test.testImageUpload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" id="user-input" name="user_input" accept="image/*">
        <input type="submit" value="提交">
    </form>
</body>

</html>
