@extends('layouts.app')
@section('title', 'تعديل معلم')
@section('content')
    <h2 class="text-2xl font-bold mb-6">تعديل بيانات المعلم</h2>
    <form method="POST" action="{{ route('teachers.update', $teacher) }}" class="bg-white p-6 rounded-lg shadow max-w-lg">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">الاسم</label>
            <input type="text" name="name" value="{{ old('name', $teacher->name) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">البريد الإلكتروني</label>
            <input type="email" name="email" value="{{ old('email', $teacher->email) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">رقم الهاتف</label>
            <input type="text" name="phone" value="{{ old('phone', $teacher->phone) }}" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">التخصص</label>
            <input type="text" name="specialization" value="{{ old('specialization', $teacher->specialization) }}" class="w-full border rounded px-3 py-2">
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">تحديث</button>
            <a href="{{ route('teachers.index') }}" class="bg-gray-200 px-4 py-2 rounded">إلغاء</a>
        </div>
    </form>
@endsection
