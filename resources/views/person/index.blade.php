<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Отзывы Алатрацев.Недвижимость</title>
</head>
<body class="m-3 flex justify-center items-center flex-col">
    <div class=" mt-4 mb-6 flex justify-center items-center" >
        <div>
            <img   class="h-1/3 w-3/4 max-h-64 m-auto" src="{{asset('images/alatarcev-5.png')}}" alt="" >
        </div>
    </div>
    <div class="flex flex-col">

        <h2 class="ml-3 font-bold text-4xl max-w-80 sm:text-2xl text-[#414142]">Вам понравилась работа команды алатарцев недвижимость?</h2>
        <p class="text-neutral-500 m-3 mt-0 text-xs">Поделитесь своим мнением с другими людьми</p>
        <div class="m-6 ml-3">
            <a href="/" class="p-3 border-2 rounded-2xl">Да, все отлично</a>
        </div>
        <br>
        <div class="m-6 mt-0 ml-3">
            <a href="{{$url}}" class="p-3 border-2 rounded-2xl">Нет, есть претензии</a>
        </div>
    </div>
</body>
</html>
