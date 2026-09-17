<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول - مدرسة النور</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold text-center mb-6">🏫 مدرسة النور</h1>
        <h2 class="text-xl text-center mb-6">تسجيل الدخول</h2>

        @if($errors->any())
            <div class="mb-4 p-3 bg-red-100 text-red-700 rounded">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block mb-1 font-semibold">البريد الإلكتروني</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full border rounded px-3 py-2" autofocus>
            </div>
            <div class="mb-4">
                <label class="block mb-1 font-semibold">كلمة المرور</label>
                <input type="password" name="password" required class="w-full border rounded px-3 py-2">
            </div>
            <div class="mb-4">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="ml-2">
                    <span>تذكرني</span>
                </label>
            </div>
            <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 rounded font-semibold">دخول</button>
        </form>
    </div>
</body>
</html>
