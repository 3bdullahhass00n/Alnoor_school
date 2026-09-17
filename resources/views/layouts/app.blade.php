<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'مدرسة النور')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex items-center gap-6">
                    <h1 class="text-xl font-bold text-gray-800">🏫 مدرسة النور</h1>
                    <div class="flex gap-4">
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('dashboard') ? 'text-blue-600 font-semibold' : '' }}">لوحة التحكم</a>
                        <a href="{{ route('classrooms.index') }}" class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('classrooms.*') ? 'text-blue-600 font-semibold' : '' }}">الصفوف</a>
                        <a href="{{ route('teachers.index') }}" class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('teachers.*') ? 'text-blue-600 font-semibold' : '' }}">المعلمون</a>
                        <a href="{{ route('students.index') }}" class="text-gray-700 hover:text-blue-600 {{ request()->routeIs('students.*') ? 'text-blue-600 font-semibold' : '' }}">الطلاب</a>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-sm text-gray-600">{{ Auth::user()->name }}</span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-sm text-red-600 hover:text-red-800">تسجيل خروج</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @if(session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </main>
</body>
</html>
