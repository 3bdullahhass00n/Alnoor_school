@extends('layouts.app')
@section('title', 'إضافة طالب')
@section('content')
    <h2 class="text-2xl font-bold mb-6">إضافة طالب جديد</h2>
    <form method="POST" action="{{ route('students.store') }}" class="bg-white p-6 rounded-lg shadow max-w-lg">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">الاسم</label>
            <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">البريد الإلكتروني</label>
            <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">تاريخ الميلاد</label>
            <input type="date" name="birth_date" value="{{ old('birth_date') }}" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">رقم الهاتف</label>
            <input type="text" name="phone" value="{{ old('phone') }}" class="w-full border rounded px-3 py-2">
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-purple-500 hover:bg-purple-600 text-white px-4 py-2 rounded">حفظ</button>
            <a href="{{ route('students.index') }}" class="bg-gray-200 px-4 py-2 rounded">إلغاء</a>
        </div>
    </form>
@endsection
