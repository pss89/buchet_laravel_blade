@extends('layouts.app')

@section('title', 'Crud Test')

@section('content')
<div class="md:container m-auto h-screen text-center content-center">
    <h1 class="text-3xl font-bold underline">
        Crud Test Page
    </h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Subject</th>
                <th>createTime</th>
                <th>updateTime</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($lists as $list)
            <tr>
                <td>{{ $list->id }}</td>
                <td>{{ $list->user_id }}</td>
                <td>{{ $list->subject }}</td>
                <td>{{ $list->created_at }}</td>
                <td>{{ $list->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection