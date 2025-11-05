@extends('layouts.app')

@section('title', 'Crud Test')

@section('content')
<div class="md:container m-auto h-screen text-center content-center">
    <h1 class="text-3xl font-bold underline">
        Crud 폼 페이지 - {{ isset($data) ? '수정' : '작성' }}
    </h1>
</div>
@endsection