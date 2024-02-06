<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Login</title>
</head>
<body class="bg-black text-white container mx-auto grid place-items-center h-screen">
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
        <br>
        <p>don't have an account? Register <a href="{{url('/')}}" class="underline text-blue-500">here</a></p>
    </div>
</body>
</html>