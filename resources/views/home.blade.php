@extends('layouts.app')

@section('title', 'QuickBillr - Modern Billing Solution')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
    <div class="container mx-auto px-4 py-16">
        <div class="text-center">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">
                Quick<span class="text-blue-600">Billr</span>
            </h1>
            <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto">
                Modern, fast, and reliable billing solution for your business. Create professional invoices in seconds.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                @guest
                <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors shadow-lg">
                    Sign In
                </a>
                <a href="{{ route('register') }}" class="bg-white hover:bg-gray-50 text-blue-600 px-8 py-4 rounded-lg text-lg font-semibold border-2 border-blue-600 transition-colors">
                    Get Started
                </a>
                @else
                <a href="{{ route('dashboard') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors shadow-lg">
                    Go to Dashboard
                </a>
                @endguest
            </div>
        </div>

        <div class="mt-20 grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Fast Invoice Creation</h3>
                <p class="text-gray-600">Create professional invoices in seconds with our intuitive interface.</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Payment Tracking</h3>
                <p class="text-gray-600">Keep track of all your payments and outstanding invoices effortlessly.</p>
            </div>

            <div class="bg-white rounded-xl p-8 shadow-lg">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Analytics & Reports</h3>
                <p class="text-gray-600">Get insights into your business with detailed analytics and reports.</p>
            </div>
        </div>
    </div>
</div>
@endsection
