{{-- Halaman Login untuk Daily Mart --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Mart - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .login-illustration {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex">
        <!-- Left Side - Illustration -->
        <div class="hidden lg:flex lg:w-1/2 login-illustration items-center justify-center p-12">
            <div class="text-center">
                <!-- Shopping Cart Illustration -->
                <div class="mb-8">
                    <svg width="400" height="300" viewBox="0 0 400 300" class="mx-auto">
                        <!-- Background circles -->
                        <circle cx="200" cy="150" r="120" fill="rgba(255,255,255,0.1)" />
                        <circle cx="150" cy="100" r="60" fill="rgba(255,255,255,0.05)" />
                        
                        <!-- Shopping cart -->
                        <g transform="translate(150, 120)">
                            <!-- Cart body -->
                            <path d="M10 40 L90 40 L85 80 L15 80 Z" fill="#4F46E5" stroke="#3730A3" stroke-width="2"/>
                            <!-- Cart handle -->
                            <path d="M5 40 L5 20 L15 20" fill="none" stroke="#4F46E5" stroke-width="3"/>
                            <!-- Cart wheels -->
                            <circle cx="25" cy="90" r="8" fill="#374151"/>
                            <circle cx="75" cy="90" r="8" fill="#374151"/>
                            
                            <!-- Items in cart -->
                            <rect x="20" y="45" width="15" height="15" rx="2" fill="#EF4444"/>
                            <rect x="40" y="45" width="15" height="15" rx="2" fill="#10B981"/>
                            <rect x="60" y="45" width="15" height="15" rx="2" fill="#F59E0B"/>
                            <rect x="30" y="60" width="15" height="15" rx="2" fill="#8B5CF6"/>
                            <rect x="50" y="60" width="15" height="15" rx="2" fill="#06B6D4"/>
                        </g>
                        
                        <!-- Person -->
                        <g transform="translate(80, 80)">
                            <!-- Head -->
                            <circle cx="20" cy="20" r="15" fill="#FBBF24"/>
                            <!-- Hair -->
                            <path d="M5 15 Q20 5 35 15 L35 25 Q20 20 5 25 Z" fill="#92400E"/>
                            <!-- Body -->
                            <rect x="10" y="35" width="20" height="40" rx="10" fill="#EF4444"/>
                            <!-- Arms -->
                            <ellipse cx="5" cy="45" rx="8" ry="15" fill="#FBBF24"/>
                            <ellipse cx="35" cy="45" rx="8" ry="15" fill="#FBBF24"/>
                            <!-- Legs -->
                            <rect x="12" y="75" width="6" height="25" rx="3" fill="#1E40AF"/>
                            <rect x="22" y="75" width="6" height="25" rx="3" fill="#1E40AF"/>
                            <!-- Shoes -->
                            <ellipse cx="15" cy="105" rx="8" ry="4" fill="#374151"/>
                            <ellipse cx="25" cy="105" rx="8" ry="4" fill="#374151"/>
                        </g>
                        
                        <!-- Decorative elements -->
                        <g transform="translate(300, 100)">
                            <!-- Plant -->
                            <rect x="10" y="40" width="20" height="15" rx="2" fill="#DC2626"/>
                            <path d="M20 40 Q15 30 10 25 Q20 20 30 25 Q25 30 20 40" fill="#10B981"/>
                            <path d="M20 35 Q25 25 30 20 Q35 30 30 35 Q25 40 20 35" fill="#059669"/>
                        </g>
                        
                        <!-- Floating elements -->
                        <circle cx="100" cy="60" r="3" fill="rgba(255,255,255,0.6)"/>
                        <circle cx="320" cy="80" r="2" fill="rgba(255,255,255,0.4)"/>
                        <circle cx="80" cy="200" r="4" fill="rgba(255,255,255,0.3)"/>
                    </svg>
                </div>
                
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
                        <span class="text-4xl mr-2">🍎</span>
                        <h1 class="text-2xl font-bold text-gray-900">Daily Mart</h1>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">LOGIN</h2>
                </div>
                
                <!-- Login Form -->
                <form class="space-y-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input 
                            type="email" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors"
                            placeholder="Enter your email"
                        />
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input 
                            type="password" 
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 outline-none transition-colors"
                            placeholder="Enter your password"
                        />
                    </div>
                    
                    <div class="flex items-center">
                        <input 
                            type="checkbox" 
                            id="remember" 
                            class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded"
                        />
                        <label for="remember" class="ml-2 block text-sm text-gray-700">Remember Me</label>
                    </div>
                    
                    <button 
                        type="submit" 
                        class="w-full bg-red-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-red-700 transition-colors focus:ring-2 focus:ring-red-500 focus:ring-offset-2"
                    >
                        LOGIN
                    </button>
                </form>
                
                <!-- Register Link -->
                <p class="text-center mt-6 text-sm text-gray-600">
                    Don't have an account? 
                    <a href="#" class="text-red-600 font-semibold hover:text-red-700">Register</a>
                </p>
            </div>
        </div>
    </div>
</body>
</html>