<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Mart - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .login-illustration {
             background: linear-gradient(135deg, #f56565 0%, #c53030 100%);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex">
        <!-- Left Side - Illustration -->
        <div class="hidden lg:flex lg:w-1/2 login-illustration items-center justify-center p-12">
            <div class="text-center">
                <!-- Shopping Cart Illustration -->
                <img src="{{ asset('images/Vector 1.png') }}" alt="Vector 1.png" class="mx-auto max-w-full h-auto">
                <h2 class="text-white text-3xl font-bold mb-4">Welcome to Daily Mart</h2>
                <p class="text-white/80 text-lg">Manage your minimarket with ease and efficiency</p>
            </div>
        </div>
        
        <!-- Right Side - Login Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <!-- Logo and Title -->
                <div class="text-center mb-8">
                    <div class="flex items-center justify-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-15">
                         <h1 class="text-2xl font-bold text-gray-900 mr-12">Daily Mart</h1>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900 mb-2">LOGIN</h2>
                </div>

                <!-- Session Status -->
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                
                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <!-- Email or Username -->
                    <div>
                        <label for="id_user" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('Email or Username') }}
                        </label>
                        <input 
                            id="id_user"
                            type="text" 
                            name="id_user"
                            value="{{ old('id_user') }}"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors @error('id_user') border-red-500 @enderror"
                            placeholder="Masukkan email atau username"
                            required 
                            autofocus 
                            autocomplete="id_user"
                        />
                        @error('id_user')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('Password') }}
                        </label>
                        <input 
                            id="password"
                            type="password" 
                            name="password"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors @error('password') border-red-500 @enderror"
                            placeholder="Masukkan password"
                            required 
                            autocomplete="current-password"
                        />
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    
                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input 
                                id="remember_me"
                                type="checkbox" 
                                name="remember"
                                class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded"
                            />
                            <label for="remember_me" class="ml-2 block text-sm text-gray-700">
                                {{ __('Remember me') }}
                            </label>
                        </div>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-red-600 hover:text-red-700 font-medium" href="{{ route('password.request') }}">
                                {{ __('Lupa Password ?') }}
                            </a>
                        @endif
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full bg-red-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-red-700 transition-colors focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                    >
                        {{ __('Log in') }}
                    </button>
                </form>
                
                <!-- Register Link (Optional) -->
                @if (Route::has('register'))
                <p class="text-center mt-6 text-sm text-gray-600">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-red-600 font-semibold hover:text-red-700">Register</a>
                </p>
                @endif
            </div>
        </div>
    </div>
</body>
</html>