@extends('layouts.app')

@section('title', 'Crud Test - 폼 페이지')

@section('content')
<div class="md:container m-auto h-screen text-center content-center">
    <h1 class="text-3xl font-bold underline">
        Crud 폼 페이지 - {{ isset($data) ? '수정' : '작성' }}

        {{-- <button>
            <a href="{{ route('crud.index', $params ?? []) }}" class="ml-4 text-sm text-gray-700 underline">
                목록으로
            </a>
        </button> --}}
    </h1>

    <div class="max-w-3xl mx-auto py-8">
        {{-- 에러 메시지 --}}
        @if ($errors->any())
            <div class="mb-6 rounded-lg border border-red-500/40 bg-red-500/10 px-4 py-3 text-sm text-red-200">
                <div class="font-semibold mb-1">입력값을 다시 확인해주세요.</div>
                <ul class="list-disc list-inside space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form
            action="{{ isset($data) ? route('crud.update', $data->id) : route('crud.store') }}"
            method="POST"
            class="space-y-6"
        >
            @csrf
            @if (isset($data))
                @method('PATCH')
            @endif

            {{-- 제목 --}}
            <div class="space-y-1">
                <label for="subject" class="block text-sm font-semibold text-slate-100">
                    제목
                </label>
                <input
                    type="text"
                    name="subject"
                    id="subject"
                    class="block w-full rounded-xl border border-slate-600 px-4 py-3 text-sm
                           placeholder:text-slate-500
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="제목을 입력하세요"
                    value="{{ old('subject', $data->subject ?? '') }}"
                >
            </div>

            {{-- 내용 --}}
            <div class="space-y-1">
                <label for="content" class="block text-sm font-semibold text-slate-100">
                    내용
                </label>
                <textarea
                    name="content"
                    id="content"
                    rows="8"
                    class="block w-full min-h-[220px] rounded-xl border border-slate-600 px-4 py-3 text-sm
                           leading-relaxed placeholder:text-slate-500
                           focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="내용을 입력하세요"
                >{{ old('content', $data->content ?? '') }}</textarea>
            </div>

            {{-- 버튼 영역 --}}
            <div class="mt-8 flex justify-end gap-3">
                <a
                    href="{{ route('crud.index') }}"
                    class="inline-flex items-center rounded-xl border border-slate-600 px-4 py-2 text-sm font-medium
                           hover:bg-slate-800"
                >
                    목록으로
                </a>

                <button
                    type="submit"
                    class="inline-flex items-center rounded-xl border border-slate-600 px-4 py-2 text-sm font-medium
                           bg-slate-500 hover:bg-slate-800"
                >
                    {{ isset($data) ? '수정' : '등록' }}
                </button>
            </div>
        </form>
    </div>

</div>
@endsection