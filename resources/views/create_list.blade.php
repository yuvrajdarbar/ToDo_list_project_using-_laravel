<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>ToDo List project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="bg-slate-300">
        <nav class=" bg-black h-20">
            <div class="flex">
                <div class=" w-14 h-14">
                    <img src="images/2.png" alt="logo" class="w-30 h-20 mx-10">
                </div>
                <div class="text-white mx-14 mt-8 flex " >
                      <h2 class="font-bold font-serif">Today's Work</h2>
                      
                </div>
            </div>
        </nav>
        <button class="bg-green-600 absolute ml-80 mt-7 h-10 w-15 rounded-lg px-4 hover:bg-green-500"><a href="{{route('index')}}">Back</a></button>
        <h1 class="ml-96 mt-20 font-serif font-bold">Craete New List</h1>
        <div class="mt-3 ml-96">
        <form action="" method="POST">
            @csrf
            <label class="px-5 font-bold">Name: </label>
            <input type="text" name="name" class="w-72 h-12">
            <input type="submit" name="submit" value="Submit" class="bg-blue-600  ml-4 mt-7 h-10 w-15 rounded-lg px-4 hover:bg-blue-500">
        </form>
    </div>
    </body>
</html>
