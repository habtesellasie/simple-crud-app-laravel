<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-black text-white container mx-auto grid place-items-center">
    @auth
        <br>
            <h2>Dashboard</h2>
        <br>

    <form action="/logout" method="POST">
        @csrf
        <button class="py-2 px-4 bg-red-500 text-white font-semibold rounded-lg shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-400 focus:ring-opacity-75">Log out</button>
        <br>
        <br>
    </form>
    <div class="border rounded border-solid border-white w-[450px] p-4">
        <h2 class="text-blue-400 text-xl mb-4">Create a new post</h2>
        <form action="/create-post" method="POST">
        @csrf
            <label class="block">
                <span class="block text-sm font-medium text-slate-200">Post Title</span>
                <input type="text" placeholder="post title" 
                name='title'
                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 text-black mb-3 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
            </label>

            <label class="block">
                <span class="block text-sm font-medium text-slate-200">Post Body</span>
                <textarea type="text" placeholder="body content . . . " 
                name='body'
                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 resize-y h-20 text-black mb-3 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500"></textarea>
            </label>
            <button class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Add New Post</button>
        </form>
    </div>

    <br>
    <br>
    <div class="border border-blue-500 border-solid w-[500px] py-4 px-3 rounded">
        <h2 class="text-blue-400 text-2xl">All Posts</h2>
        @foreach ($posts as $post)
            <div class=" bg-slate-500 my-4 p-2 rounded hover:scale-[1.01] transition">
                <h3>{{$post['title']}}</h3>
                <p>{{$post['body']}}</p>
            </div>
        @endforeach
    </div>

    @else
    <br>
    <br>
    <div class="border-3 border-solid border-white border p-4 py-10 w-[500px] mx-auto rounded-s">
        <h2 class="text-4xl mb-10 text-blue-500">Register</h2>
        <form action="/register" method="POST">
            @csrf
            <label class="block">
                <span class="block text-sm font-medium text-slate-200">Name</span>
                <input type="text" placeholder="name" 
                name='name'
                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 text-black mb-3 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
            </label>
            <label class="block">
                <span class="block text-sm font-medium text-slate-200">Email</span>
                <input type="text" placeholder="email" 
                name='email'
                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 text-black mb-3 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">

            </label>
            <label class="block">
                <span class="block text-sm font-medium text-slate-200">Password</span>

                <input type="password" placeholder="password" 
                name="password"
                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 text-black mb-10 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
            </label>
            <button class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Register</button>
        </form>
    </div>
    <br>
    <div class="border-3 border-solid border-white border p-4 py-10 w-[500px] mx-auto rounded-s">
        <h2 class="text-4xl mb-10 text-green-500">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <label class="block">
                <span class="block text-sm font-medium text-slate-200">Name</span>
                <input type="text" placeholder="name" 
                name='login_name'
                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 text-black mb-3 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
            </label>
            
            <label class="block">
                <span class="block text-sm font-medium text-slate-200">Password</span>

                <input type="login_password" placeholder="password" 
                name="login_password"
                class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 text-black mb-10 rounded-md text-sm shadow-sm placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none invalid:border-pink-500 invalid:text-pink-600 focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
            </label>
            <button class="py-2 px-4 bg-green-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">Log in</button>
        </form>
    </div>
    @endauth
</body>
</html>