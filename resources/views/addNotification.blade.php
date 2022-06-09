<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/main.js" defer></script>
    <title>Document</title>
</head>
<body>
    <form action="/notification" method="POST">
        @csrf
        <label for="days">Dagen:</label><br>
        @foreach ($days as $day)
            <label for="days">{{$day->day}}</label>
            <input name={{$day->day}} id="{{$day->day}}" type="checkbox" value=1><br>
        @endforeach
        <label for="amount">Hoeveel oefeningen per dag?</label>
        <select name="amount" id="amount">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <label for="time">Welke tijden wil je oefeningen doen?</label>
        <input type="time" name="time" id="time"><br>
        <label for="intensity">Intensiteit van de oefeningen</label>
        <select name="intensity" id="intensity">
            <option value="1">Lage</option>
            <option value="2">Medium</option>
            <option value="3">Hoge</option>
        </select><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>