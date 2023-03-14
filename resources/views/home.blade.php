<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ToDo List project</title>
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
<button class="bg-green-600 absolute ml-80 mt-7 h-10 w-15 rounded-lg px-4 hover:bg-green-500"><a href="{{route('create')}}">Create New List</a></button>
        <table class=" border-slate-400 w-3/6 ml-80 mt-20">
            <thead class="bg-gray-500">
            <tr>
                <th>Id</th>
                <th>List's Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
               
            @foreach ($lists  as $list)
            <tr class="bg-red-200">
                <th class="font-sans">{{$list->id}}</th>
                <td class="text-center">{{$list->name}}</td>
                <td class="text-center"><button class="bg-red-600 hover:bg-red-500 rounded py-1 px-1"><a href="{{url('/delete',$list->id)}}">Delete</a></button> | <button class="bg-blue-600 hover:bg-blue-500 rounded py-1 px-3"><a href="{{url('/edit',$list->id)}}">Edit</a></button></td>
            </tr>
            @endforeach
        </tbody>
        </table>
        </body>
</html>