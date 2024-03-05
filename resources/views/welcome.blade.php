<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
    <div class="grid grid-cols-6 m-5 gap-3">
        <!-- Header -->
        <div class="bg-[#2a25aa] h-32 col-span-full rounded-2xl flex items-center justify-center">
            <h1 class="text-white font-extrabold text-4xl">Start - 2:45PM | End - 3-23PM</h1>
        </div>
    
        <!-- Sidebar -->
        <div class="bg-[#2a25aa] rounded-2xl h-[calc(100vh - 32px)] col-span-1 flex items-center justify-center">
            <p class="text-white text-lg">Name : Shibli Raihan</p>
        </div>
    
        <!-- Posts -->
        <div class="rounded-2xl col-span-5 flex flex-wrap gap-3">
            @foreach ($posts as $post) 
            <div class="bg-[#2a25aa] rounded-xl p-2 w-full md:w-1/2 lg:w-1/5">
                <div class="bg-white rounded-t-2xl">
                    <img class="h-40 w-full object-cover rounded-t-2xl" src="{{ asset($post->image) }}" alt="{{ $post->title }}">
                </div>
                <div class="p-4">
                    <h2 class="text-white font-bold text-xl">{{ Str::limit($post->title, 20) }}</h2>
                    <p class="text-white text-base">{{ Str::limit($post->description, 50) }} @if(strlen($post->description) > 50) <a href="#" class="text-blue-500">see more</a> @endif</p>
                </div>
            </div>
            @endforeach
            <div class="mt-8">
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </div>

    </div>
</body>
</html>