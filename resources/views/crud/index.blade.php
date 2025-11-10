@extends('layouts.app')

@section('title', 'Crud Test - 목록 페이지')

@section('content')
<div class="md:container m-auto h-screen text-center content-center">
    <h1 class="text-3xl font-bold underline">
        Crud 테스트 페이지
    </h1>
    <div class="mt-6 overflow-x-auto">
        {{-- 에러 메시지 --}}
        {{-- 오류 플래시 메시지 --}}
        @if (session('error'))
            <div class="mb-4 rounded-md bg-red-100 border border-red-400 text-red-700 px-4 py-3 text-sm">
                {{ session('error') }}
            </div>
        @endif
        <div class="inline-block min-w-full align-middle">
            <div class="overflow-hidden rounded-lg border border-gray-200 shadow-sm">
                <table class="min-w-full divide-y divide-gray-200 text-sm">
                    <thead class="bg-gray-100">
                        <tr class="text-black">
                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                게시글 ID
                            </th>
                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                제목
                            </th>
                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                작성자
                            </th>
                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                생성 일시
                            </th>
                            <th scope="col" class="px-4 py-3 text-left text-xs font-medium uppercase tracking-wider">
                                수정 일시
                            </th>
                        </tr>
                    </thead>

                    <tbody class="divide-y divide-gray-100 bg-white">
                        @forelse ($lists as $list)
                            {{-- route 처리하기 --}}
                            {{-- <tr class="hover:bg-gray-50"> --}}
                            {{-- 
                                $q = trim($request->input('q', ''));
                                $per = trim($request->input('per', '10'));
                                그리고 page 정보 같이 넘기고 받기위한 처리
                            --}}
                            {{-- <tr onclick="location.href='{{ route('crud.form', ['id' => $list->id]) }}'" class="hover:bg-gray-50 cursor-pointer"> --}}
                            <tr onclick="location.href='{{ route('crud.form', array_merge(['id' => $list->id], request()->only(['q', 'per', 'page'])) ) }}'" class="hover:bg-gray-50 cursor-pointer">
                                <td class="px-4 py-3 whitespace-nowrap text-gray-900">
                                    {{ $list->id }}
                                </td>
                                <td class="px-4 py-3 text-gray-900">
                                    {{ $list->subject }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-gray-700">
                                    {{ $list->user->name }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-gray-500">
                                    {{ $list->created_at->format('Y-m-d H:i') }}
                                </td>
                                <td class="px-4 py-3 whitespace-nowrap text-gray-500">
                                    {{ $list->updated_at->format('Y-m-d H:i') }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-6 text-center text-sm text-gray-500">
                                    등록된 게시글이 없습니다.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-4 flex flex-col items-center justify-between gap-3 sm:flex-row">
        <div class="text-sm text-gray-600">
            총 <span class="font-semibold text-gray-800">{{ $lists->total() }}</span>건 중
            <span class="font-semibold text-gray-800">{{ $lists->firstItem() }}</span>–
            <span class="font-semibold text-gray-800">{{ $lists->lastItem() }}</span> 표시 중
        </div>

        <div>
            {{ $lists->links() }}
        </div>
    </div>
</div>
@endsection