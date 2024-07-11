<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen flex flex-col">
    <nav class="bg-red-500 text-white px-4 py-2 flex justify-between items-center h-10 w-100%">
        <!-- <img src="{{ asset('images/blooddonationicon.png') }}" alt="" title="" class="h-5 w-5"></a> -->
        <a href="#" class="font-bold text-xl text-center">Bloodlink Management Suite</a>
        <ul class="flex space-x-4">
            <li><a href="#" class="hover:text-gray-100  hover:bg-red-700 text-white font-bold py-2 px-2 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Not a Donor?</a></li>
        </ul>
    </nav>

    <div class="flex items-center justify-center mt-16">
        <div class="w-full max-w-md px-8 py-4 bg-white rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-6">Donor Sign UP</h2>
            <form method="post" action="/login">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Full Name
                    </label>
                    <input type="text" id="username" name="username" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                        Phone Number
                    </label>
                    <input type="tel" id="phone" name="phone" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                        Address
                    </label>
                    <textarea id="address" name="address" rows="3" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-indigo-500 focus:ring-1"></textarea>
                </div>
                
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Enter Password
                    </label>
                    <input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Re-Enter Password
                    </label>
                    <input input type="password" id="password" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="bloodgroup">
                        Blood Group
                    </label>
                    <select id="bloodgroup" name="bloodgroup" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 focus:outline-none focus:ring-indigo-500 focus:ring-1">
                        <option value=""></option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                    </div>


                
                <div class="flex items-center justify-between mb-6 mt-7">
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Sign UP
                </button>
                    
                    <a href="{{route('login.index')}}" class="text-sm text-red-600 hover:underline">Already have an account?</a>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>
