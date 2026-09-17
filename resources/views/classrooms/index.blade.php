@extends('layouts.app')

@section('title', 'إدارة الصفوف')

@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">الصفوف الدراسية</h2>
        <a href="{{ route('classrooms.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">+ إضافة صف</a>
    </div>

    <form method="GET" action="{{ route('classrooms.index') }}" class="mb-4 flex gap-2">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="بحث..." class="flex-1 border rounded px-3 py-2">
        <button type="submit" class="bg-gray-200 px-4 py-2 rounded">بحث</button>
    </form>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-right">#</th>
                    <th class="px-4 py-3 text-right">اسم الصف</th>
                    <th class="px-4 py-3 text-right">الوصف</th>
                    <th class="px-4 py-3 text-right">السعة</th>
                    <th class="px-4 py-3 text-right">إجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($classrooms as $classroom)
                    <tr class="border-t">
                        <td class="px-4 py-3">{{ $classroom->id }}</td>
                        <td class="px-4 py-3 font-semibold">{{ $classroom->name }}</td>
                        <td class="px-4 py-3">{{ Str::limit($classroom->description, 50) }}</td>
                        <td class="px-4 py-3">{{ $classroom->capacity }}</td>
                        <td class="px-4 py-3">
                            <a href="{{ route('classrooms.edit', $classroom) }}" class="text-blue-600 hover:underline ml-2">تعديل</a>
                            <form method="POST" action="{{ route('classrooms.destroy', $classroom) }}" class="inline" onsubmit="return confirm('هل أنت متأكد؟')">
                                @csrf @method('DELETE')
                                <button class="text-red-600 hover:underline">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="px-4 py-6 text-center text-gray-500">لا توجد صفوف</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $classrooms->links() }}</div>
@endsection
