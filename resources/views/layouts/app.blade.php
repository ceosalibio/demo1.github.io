<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project2</title>
    {{-- <link rel = "icon" href = "http://hrdapps41/ad/pictures/imanagerlogo.png" type = "image/x-icon"> --}}
    {{-- <link rel = "icon" href = "http://hrdapps74/I-Manager_AfterKakou/img/denkiNEW.ico" type = "image/x-icon"> --}}
</head>
<body>
    <div id="app">
        <App :base-url="@js( URL::to('/') )"></App>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>