<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="rounded-2xl col-span-5 flex flex-wrap gap-3 justify-center mt-10">
        <div class="bg-[#2a25aa] rounded-xl p-2 w-full md:w-1/2 lg:w-1/5">
            <div class="bg-white rounded-t-2xl">
                <img class="h-40 w-full object-cover rounded-t-2xl" src="{{ asset($post->image) }}"
                    alt="{{ $post->title }}">
            </div>
            <div class="p-4">
                <h2 class="text-white font-bold text-xl">{{ $post->title }}</h2>
                <hr class="mt-2">
                <p class="text-white text-base py-4">{{ $post->description }} 
                    
                </p>
            </div>
        </div>
    </div>
</body>

</html>