<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>tu dien online</h1>
<form action="/form_translate" method="POST">
    @csrf
    <p>
        Tu tieng anh <input type="text" name="englishWord" >
    </p>

    <p>
        <button type="submit">dich</button>
    </p>
</form>
</body>
</html>