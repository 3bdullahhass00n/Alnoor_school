@extends('layouts.app')
@section('title', 'إدارة المعلمين')
@section('content')
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">المعلمون</h2>
        <a href="{{ route('teachers.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">+ إضافة معلم</a>
    </div>
    <form method="GET" action="{{ route('teachers.index') }}" class="mb-4 flex gap-2">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="بحث..." class="flex-1 border rounded px-3 py-2">
        <button type="submit" class="bg-gray-200 px-4 py-2 rounded">بحث</button>
    </form>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-100">
                <tr>
                    <th class="px-4 py-3 text-right">#</th>
                    <th class="px-4 py-3 text-right">الاسم</th>
                    <th class="px-4 py-3 text-right">البريد</th>
                    <th class="px-4 py-3 text-right">الهاتف</th>
                    <th class="px-4 py-3 text-right">التخصص</th>
                    <th class="px-4 py-3 text-right">إجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse($teachers as $teacher)
                    <tr class="border-t">
                        <td class="px-4 py-3">{{ $teacher->id }}</td>
                        <td class="px-4 py-3 font-semibold">{{ $teacher->name }}</td>
                        <td class="px-4 py-3">{{ $teacher->email }}</td>
                        <td class="px-4 py-3">{{ $teacher->phone }}</td>
                        <td class="px-4 py-3">{{ $teacher->specialization }}</td>
                        <td class="px-4 py-3">
                            <a href="{{ route('teachers.edit', $teacher) }}" class="text-blue-600 hover:underline ml-2">تعديل</a>
                            <form method="POST" action="{{ route('teachers.destroy', $teacher) }}" class="inline" onsubmit="return confirm('هل أنت متأكد؟')">
                                @csrf @method('DELETE')
                                <button class="text-red-600 hover:underline">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="6" class="px-4 py-6 text-center text-gray-500">لا يوجد معلمون</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="mt-4">{{ $teachers->links() }}</div>
@endsection
