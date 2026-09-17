@extends('layouts.app')

@section('title', 'لوحة التحكم')

@section('content')
    <h2 class="text-2xl font-bold mb-6">لوحة التحكم</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">الصفوف الدراسية</p>
                    <p class="text-3xl font-bold text-blue-600">{{ $stats['classrooms'] }}</p>
                </div>
                <span class="text-4xl">📚</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">المعلمون</p>
                    <p class="text-3xl font-bold text-green-600">{{ $stats['teachers'] }}</p>
                </div>
                <span class="text-4xl">👨‍🏫</span>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500">الطلاب</p>
                    <p class="text-3xl font-bold text-purple-600">{{ $stats['students'] }}</p>
                </div>
                <span class="text-4xl">🎓</span>
            </div>
        </div>
    </div>

    <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6">
        <a href="{{ route('classrooms.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white p-6 rounded-lg text-center">
            <span class="text-2xl">إدارة الصفوف</span>
        </a>
        <a href="{{ route('teachers.index') }}" class="bg-green-500 hover:bg-green-600 text-white p-6 rounded-lg text-center">
            <span class="text-2xl">إدارة المعلمين</span>
        </a>
        <a href="{{ route('students.index') }}" class="bg-purple-500 hover:bg-purple-600 text-white p-6 rounded-lg text-center">
            <span class="text-2xl">إدارة الطلاب</span>
        </a>
    </div>
@endsection
