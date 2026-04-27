@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="max-w-7xl mx-auto">
    <!-- Welcome Header -->
    <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl p-8 mb-8 shadow-lg text-white">
        <h1 class="text-3xl md:text-4xl font-extrabold mb-2">Dashboard</h1>
        <p class="text-green-50 text-lg">Selamat datang kembali, <strong class="font-bold text-white">{{ $username }}</strong>! Berikut adalah ringkasan hari ini.</p>
    </div>
    
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1: Total Produk -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center">
                <div class="p-4 bg-blue-50 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-blue-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                    </svg>
                </div>
                <div class="ml-5">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Produk</h3>
                    <p class="text-3xl font-bold text-gray-800 mt-1">{{ $stats['totalProduk'] }}</p>
                </div>
            </div>
        </div>

        <!-- Card 2: Total Pesanan -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center">
                <div class="p-4 bg-emerald-50 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-emerald-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>
                </div>
                <div class="ml-5">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Pesanan</h3>
                    <p class="text-3xl font-bold text-gray-800 mt-1">{{ $stats['totalPesanan'] }}</p>
                </div>
            </div>
        </div>

        <!-- Card 3: Pendapatan -->
        <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 hover:shadow-md transition-all duration-300 transform hover:-translate-y-1">
            <div class="flex items-center">
                <div class="p-4 bg-yellow-50 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-yellow-600">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-5">
                    <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Pendapatan</h3>
                    <p class="text-3xl font-bold text-gray-800 mt-1">{{ $stats['pendapatan'] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection