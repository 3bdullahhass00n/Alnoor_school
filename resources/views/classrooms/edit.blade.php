@extends('layouts.app')
@section('title', 'تعديل صف')
@section('content')
    <h2 class="text-2xl font-bold mb-6">تعديل الصف</h2>
    <form method="POST" action="{{ route('classrooms.update', $classroom) }}" class="bg-white p-6 rounded-lg shadow max-w-lg">
        @csrf @method('PUT')
        <div class="mb-4">
            <label class="block mb-1 font-semibold">اسم الصف</label>
            <input type="text" name="name" value="{{ old('name', $classroom->name) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">الوصف</label>
            <textarea name="description" class="w-full border rounded px-3 py-2">{{ old('description', $classroom->description) }}</textarea>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">السعة الاستيعابية</label>
            <input type="number" name="capacity" value="{{ old('capacity', $classroom->capacity) }}" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="flex gap-2">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">تحديث</button>
            <a href="{{ route('classrooms.index') }}" class="bg-gray-200 px-4 py-2 rounded">إلغاء</a>
        </div>
    </form>
@endsection
