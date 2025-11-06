@extends('layouts.app')

@section('title', 'Crud Test - 목록 페이지')

@section('content')
<div class="md:container m-auto h-screen text-center content-center">
    <h1 class="text-3xl font-bold underline">
        Crud 테스트 페이지
    </h1>
    <div class="mt-6 overflow-x-auto">
        <div>123123123123</div>
    </div>

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
    </table>
</div>
@endsection