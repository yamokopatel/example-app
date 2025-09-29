<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <head>
    <body>
        <form method="post" action="/submit">
            @csrf
            <label for="name">Name</label>
            <input name="name" type="text">
            <br>
            <!---->
            <label for="email">Email</label>
            <input name="email" type="text">
            <br>
            <!---->
            <input type="submit">
        </form>
    </body>
</html>