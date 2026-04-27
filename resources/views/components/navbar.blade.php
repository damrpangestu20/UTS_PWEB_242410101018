<nav class="bg-gradient-to-r from-emerald-800 to-teal-600 text-white shadow-xl sticky top-0 z-50 backdrop-blur-sm bg-opacity-95">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 md:h-20">
            <!-- Brand / Logo -->
            <a href="/dashboard" class="flex items-center space-x-2 group">
                <span class="text-2xl md:text-3xl transition-transform group-hover:scale-110 duration-300">🌿</span>
                <span class="font-bold text-lg md:text-xl tracking-tight hidden sm:inline-block bg-clip-text">
                    Hidroponik Jember
                </span>
                <span class="font-bold text-base sm:hidden">HidroJember</span>
            </a>

            @if(session('username'))
                <!-- User Menu (Logged In) -->
                <div class="flex items-center space-x-1 md:space-x-3">
                    <!-- User Greeting dengan Avatar Sederhana -->
                    <div class="hidden md:flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-3 py-1.5 rounded-full">
                        <div class="w-6 h-6 rounded-full bg-green-200 flex items-center justify-center text-green-800 text-xs font-bold">
                            {{ substr(session('username'), 0, 1) }}
                        </div>
                        <span class="text-sm font-medium">{{ session('username') }}</span>
                    </div>

                    <!-- Navigation Links -->
                    <div class="flex items-center space-x-0.5 sm:space-x-1">
                        <a href="/dashboard" 
                           class="px-2 md:px-3 py-2 rounded-lg hover:bg-white/20 transition-all duration-200 text-sm md:text-base font-medium flex items-center gap-1 hover:scale-105">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
                            <span class="hidden sm:inline">Dashboard</span>
                        </a>
                        <a href="/profile" 
                           class="px-2 md:px-3 py-2 rounded-lg hover:bg-white/20 transition-all duration-200 text-sm md:text-base font-medium flex items-center gap-1 hover:scale-105">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                            <span class="hidden sm:inline">Profil</span>
                        </a>
                        <a href="/pengelolaan" 
                           class="px-2 md:px-3 py-2 rounded-lg hover:bg-white/20 transition-all duration-200 text-sm md:text-base font-medium flex items-center gap-1 hover:scale-105">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                            <span class="hidden sm:inline">Pengelolaan</span>
                        </a>
                        <form method="POST" action="/logout" class="inline">
                            @csrf
                            <button type="submit" 
                                    class="ml-1 md:ml-2 px-3 md:px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg text-sm md:text-base font-medium transition-all duration-200 hover:shadow-md hover:scale-105 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/></svg>
                                <span class="hidden sm:inline">Logout</span>
                            </button>
                        </form>
                    </div>
                </div>
            @else
                <!-- Login Button -->
                <a href="/login" 
                   class="px-4 py-2 bg-blue-500 hover:bg-blue-600 rounded-lg transition-all duration-200 hover:shadow-lg hover:scale-105 font-medium flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    Login
                </a>
            @endif
        </div>
    </div>
</nav>