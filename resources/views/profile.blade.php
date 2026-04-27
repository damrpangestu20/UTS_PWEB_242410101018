@extends('layouts.app')

@section('title', 'Profil Pengguna')

@section('content')
<div class="max-w-4xl mx-auto space-y-6">
    <!-- Header Page -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Profil Pengguna</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Informasi detail akun Anda.</p>
        </div>
    </div>

    <!-- Profile Card -->
    <div class="bg-white dark:bg-gray-800 shadow-sm rounded-xl border border-gray-100 dark:border-gray-700 overflow-hidden">
        <!-- Cover/Banner -->
        <div class="h-32 sm:h-48 bg-gradient-to-r from-green-500 to-emerald-600 relative">
            <div class="absolute inset-0 bg-black/10"></div>
        </div>
        
        <!-- Avatar & Basic Info -->
        <div class="px-6 sm:px-8 pb-8 relative">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between -mt-12 sm:-mt-16 mb-6 sm:space-x-5 space-y-4 sm:space-y-0">
                <div class="flex flex-col sm:flex-row sm:items-end sm:space-x-5 space-y-4 sm:space-y-0 relative z-10">
                    <div class="h-24 w-24 sm:h-32 sm:w-32 rounded-full bg-white dark:bg-gray-800 p-1.5 shadow-md">
                        <div class="h-full w-full rounded-full bg-emerald-100 dark:bg-gray-700 flex items-center justify-center text-emerald-600 dark:text-emerald-400 text-3xl sm:text-5xl font-bold uppercase">
                            {{ substr($profile['name'], 0, 1) }}
                        </div>
                    </div>
                    <div class="pb-2">
                        <h2 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white">{{ $profile['name'] }}</h2>
                        <p class="text-sm sm:text-base text-gray-500 dark:text-gray-400 font-medium">{{ '@' . $username }}</p>
                    </div>
                </div>
                <div class="pb-2 hidden sm:block">
                    <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/40 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-800">
                        <svg class="mr-1.5 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                        </svg>
                        {{ ucfirst($profile['role']) }}
                    </span>
                </div>
            </div>

            <!-- Mobile Role Badge -->
            <div class="mb-6 sm:hidden">
                <span class="inline-flex items-center px-3 py-1.5 rounded-full text-sm font-medium bg-emerald-100 text-emerald-800 dark:bg-emerald-900/40 dark:text-emerald-400 border border-emerald-200 dark:border-emerald-800">
                    <svg class="mr-1.5 h-4 w-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                    </svg>
                    {{ ucfirst($profile['role']) }}
                </span>
            </div>

            <!-- Profile Details Grid -->
            <div class="border-t border-gray-100 dark:border-gray-700 pt-8">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-6">Informasi Personal</h3>
                <dl class="grid grid-cols-1 sm:grid-cols-2 gap-x-6 gap-y-8">
                    <div class="sm:col-span-1 rounded-lg border border-gray-100 dark:border-gray-700 p-4 bg-gray-50 dark:bg-gray-800/50">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 flex items-center">
                            <svg class="mr-2 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            Nama Lengkap
                        </dt>
                        <dd class="mt-2 text-base font-semibold text-gray-900 dark:text-white">{{ $profile['name'] }}</dd>
                    </div>
                    
                    <div class="sm:col-span-1 rounded-lg border border-gray-100 dark:border-gray-700 p-4 bg-gray-50 dark:bg-gray-800/50">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 flex items-center">
                            <svg class="mr-2 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                            Username
                        </dt>
                        <dd class="mt-2 text-base font-semibold text-gray-900 dark:text-white">{{ $username }}</dd>
                    </div>
                    
                    <div class="sm:col-span-1 rounded-lg border border-gray-100 dark:border-gray-700 p-4 bg-gray-50 dark:bg-gray-800/50">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 flex items-center">
                            <svg class="mr-2 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            Email Address
                        </dt>
                        <dd class="mt-2 text-base font-semibold text-gray-900 dark:text-white">{{ $profile['email'] }}</dd>
                    </div>
                    
                    <div class="sm:col-span-1 rounded-lg border border-gray-100 dark:border-gray-700 p-4 bg-gray-50 dark:bg-gray-800/50">
                        <dt class="text-sm font-medium text-gray-500 dark:text-gray-400 flex items-center">
                            <svg class="mr-2 h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            Terdaftar Sejak
                        </dt>
                        <dd class="mt-2 text-base font-semibold text-gray-900 dark:text-white">{{ $profile['registered'] }}</dd>
                    </div>
                </dl>
            </div>
            
            <div class="mt-8 flex justify-end border-t border-gray-100 dark:border-gray-700 pt-6">
                <button type="button" class="inline-flex items-center px-4 py-2.5 border border-transparent shadow-sm text-sm font-medium rounded-lg text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-all duration-200">
                    <svg class="-ml-1 mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                    Edit Profil
                </button>
            </div>
        </div>
    </div>
</div>
@endsection