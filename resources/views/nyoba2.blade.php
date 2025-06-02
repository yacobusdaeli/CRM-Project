{{-- Halaman register untuk Daily Mart --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Mart - Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .register-illustration {
            background: linear-gradient(135deg, #10B981 0%, #059669 100%);
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="min-h-screen flex">
        <!-- Left Side - Illustration -->
        <div class="hidden lg:flex lg:w-1/2 register-illustration items-center justify-center p-12">
            <div class="text-center">
                <!-- Registration Illustration -->
                <div class="mb-8">
                    <svg width="400" height="300" viewBox="0 0 400 300" class="mx-auto">
                        <!-- Background circles -->
                        <circle cx="200" cy="150" r="120" fill="rgba(255,255,255,0.1)" />
                        <circle cx="250" cy="100" r="80" fill="rgba(255,255,255,0.05)" />
                        
                        <!-- Store building -->
                        <g transform="translate(120, 120)">
                            <!-- Building base -->
                            <rect x="20" y="40" width="120" height="80" fill="#3B82F6" stroke="#1E40AF" stroke-width="2"/>
                            <!-- Roof -->
                            <path d="M10 40 L80 10 L150 40 Z" fill="#DC2626"/>
                            <!-- Door -->
                            <rect x="70" y="80" width="20" height="40" fill="#92400E" rx="2"/>
                            <circle cx="85" cy="95" r="2" fill="#F59E0B"/>
                            <!-- Windows -->
                            <rect x="35" y="55" width="15" height="15" fill="#FBBF24" rx="2"/>
                            <rect x="110" y="55" width="15" height="15" fill="#FBBF24" rx="2"/>
                            <!-- Sign -->
                            <rect x="40" y="25" width="80" height="15" fill="#FFFFFF" rx="2"/>
                            <text x="80" y="35" text-anchor="middle" fill="#1F2937" font-size="8" font-weight="bold">DAILY MART</text>
                        </g>
                        
                        <!-- Person with clipboard -->
                        <g transform="translate(50, 100)">
                            <!-- Head -->
                            <circle cx="20" cy="20" r="15" fill="#FBBF24"/>
                            <!-- Hair -->
                            <path d="M5 15 Q20 5 35 15 L35 25 Q20 20 5 25 Z" fill="#92400E"/>
                            <!-- Body -->
                            <rect x="10" y="35" width="20" height="40" rx="10" fill="#06B6D4"/>
                            <!-- Arms -->
                            <ellipse cx="5" cy="45" rx="8" ry="15" fill="#FBBF24"/>
                            <ellipse cx="35" cy="45" rx="8" ry="15" fill="#FBBF24"/>
                            <!-- Clipboard -->
                            <rect x="40" y="35" width="15" height="20" fill="#FFFFFF" stroke="#374151" stroke-width="1"/>
                            <line x1="43" y1="40" x2="52" y2="40" stroke="#374151" stroke-width="1"/>
                            <line x1="43" y1="43" x2="52" y2="43" stroke="#374151" stroke-width="1"/>
                            <line x1="43" y1="46" x2="48" y2="46" stroke="#374151" stroke-width="1"/>
                            <!-- Legs -->
                            <rect x="12" y="75" width="6" height="25" rx="3" fill="#1E40AF"/>
                            <rect x="22" y="75" width="6" height="25" rx="3" fill="#1E40AF"/>
                            <!-- Shoes -->
                            <ellipse cx="15" cy="105" rx="8" ry="4" fill="#374151"/>
                            <ellipse cx="25" cy="105" rx="8" ry="4" fill="#374151"/>
                        </g>
                        
                        <!-- Welcome elements -->
                        <g transform="translate(280, 140)">
                            <!-- Welcome sign -->
                            <rect x="10" y="20" width="60" height="30" fill="#F59E0B" rx="5"/>
                            <text x="40" y="32" text-anchor="middle" fill="#FFFFFF" font-size="6" font-weight="bold">WELCOME</text>
                            <text x="40" y="42" text-anchor="middle" fill="#FFFFFF" font-size="6">NEW USER!</text>
                        </g>
                        
                        <!-- Decorative stars -->
                        <g fill="rgba(255,255,255,0.6)">
                            <path d="M100 50 L102 56 L108 56 L103 60 L105 66 L100 62 L95 66 L97 60 L92 56 L98 56 Z"/>
                            <path d="M320 70 L321 74 L325 74 L322 76 L323 80 L320 78 L317 80 L318 76 L315 74 L319 74 Z"/>
                            <path d="M80 180 L82 186 L88 186 L83 190 L85 196 L80 192 L75 196 L77 190 L72 186 L78 186 Z"/>
                        </g>
                    </svg>
                </div>
                
                <h2 class="text-white text-3xl font-bold mb-4">Join Daily Mart Family</h2>
                <p class="text-white/80 text-lg">Create your account and start managing your minimarket today</p>
            </div>
        </div>
        
        <!-- Right Side - Register Form -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8">
            <div class="w-full max-w-md">
                <!-- Logo and Title -->
                <div class="text-center mb-8">
                    <div class="flex items-center justify-center mb-4">
                        <span class="text-4xl mr-2">🍎</span>
                        <h1 class="text-2xl font-bold text-gray-900">Daily Mart</h1>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-2">REGISTER</h2>
                </div>
                
                <!-- Register Form -->
                <form class="space-y-6" onsubmit="handleSubmit(event)">
                    <!-- Full Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                        <input 
                            type="text" 
                            name="name"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-colors"
                            placeholder="Enter your full name"
                            required
                        />
                    </div>
                    
                    <!-- Email Address -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input 
                            type="email" 
                            name="email"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-colors"
                            placeholder="Enter your email address"
                            required
                        />
                    </div>
                    
                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                        <input 
                            type="password" 
                            name="password"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-colors"
                            placeholder="Create a strong password"
                            required
                        />
                    </div>
                    
                    <!-- Confirm Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                        <input 
                            type="password" 
                            name="password_confirmation"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-colors"
                            placeholder="Confirm your password"
                            required
                        />
                    </div>
                    
                    <!-- Terms and Conditions -->
                    <div class="flex items-start">
                        <input 
                            id="terms" 
                            type="checkbox" 
                            class="h-4 w-4 text-green-600 focus:ring-green-500 border-gray-300 rounded mt-1" 
                            required
                        />
                        <label for="terms" class="ml-2 block text-sm text-gray-700">
                            I agree to the 
                            <a href="#" class="text-green-600 hover:text-green-700 underline">Terms and Conditions</a> 
                            and 
                            <a href="#" class="text-green-600 hover:text-green-700 underline">Privacy Policy</a>
                        </label>
                    </div>
                    
                    <!-- Register Button -->
                    <button 
                        type="submit" 
                        class="w-full bg-green-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-green-700 transition-colors focus:ring-2 focus:ring-green-500 focus:ring-offset-2"
                    >
                        Create Account
                    </button>
                </form>
                
                <!-- Login Link -->
                <p class="text-center mt-6 text-sm text-gray-600">
                    Already have an account? 
                    <a href="#" class="text-green-600 font-semibold hover:text-green-700">Login here</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        function handleSubmit(event) {
            event.preventDefault();
            
            // Get form data
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData);
            
            // Simple validation
            if (data.password !== data.password_confirmation) {
                alert('Passwords do not match!');
                return;
            }
            
            // Simulate registration
            console.log('Registration data:', data);
            alert('Registration successful! (This is just a demo)');
        }
    </script>
</body>
</html>