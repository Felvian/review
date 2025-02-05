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
            <img class="h-1/3 w-3/4 max-h-64 m-auto" src="{{asset('images/alatarcev-5.png')}}" alt="" >
        </div>
    </div>
    <div class="flex flex-col">

        <h1 class="ml-3 font-bold text-4xl max-w-80 sm:text-xl text-[#414142]">Напишите директору</h1>
        <p class="text-neutral-700 max-w-80 m-3 mt-4 text-lg">Расскажите, что вам понравилось, и что мы можем делать лучше. Директор агенства накажет виновных, свяжется с вами и предложит решение проблемы</p>
        <form action="{{route('person.create', $id)}}" method="post" class="flex flex-col justify-center items-center">
            @csrf
            @method('POST')
            <textarea type="text" name="review" class="resize-none p-2 border-2 rounded-lg border-pink-300 focus:outline-pink-700 focus:ring-pink-700 dark:focus:outline-pink-700 dark:focus:ring-pink-700 w-11/12 h-80"></textarea>
            <button type="submit" class="m-3 py-3 px-7 border-2 border-pink-700 bg-red-400 rounded-3xl hover:bg-[#C8215D] focus:outline-pink-700 ">Отправить</button>
        </form>
    </div>
</body>
</html>
