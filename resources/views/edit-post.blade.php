<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Edit Post Page</title>
</head>
<body class="bg-black text-white container mx-auto grid place-items-center h-screen">

    <div class="border rounded border-solid border-white w-[450px] p-4">
    <h1 class="text-blue-400 text-2xl">Edit Post</h1>
    <br>
    <form action="/edit-post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <label class="block">
                <span class="block text-sm font-medium text-slate-200">Post Title</span>
                <input type="text" placeholder="post title" 
                name='title'
                value="{{$post->title}}"
                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 text-black mb-3 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
            </label>

            <label class="block">
                <span class="block text-sm font-medium text-slate-200">Post Body</span>
                <textarea placeholder="body content . . . " 
                name='body'
                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 resize-y h-20 text-black mb-3 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">{{$post->body}}</textarea>
            </label>
            <br>
            <button class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Save Changes</button>
    </form>
    </div>
</body>
</html>