@extends('layouts.app')
@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-gray-700 uppercase font-bold">Danh sách bài tập</h2>
        </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('homework.addform') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Thêm bài tập</span>
                </a>
            </div>
    </div>
        <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
                <div class="w-3/12 px-4 py-3">ID</div>
                <div class="w-3/12 px-4 py-3">Bài tập</div>
                <div class="w-3/12 px-4 py-3">Danh sách bài làm</div>
            </div>
            @foreach ($homeworklist as $task)
                <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $task->task_id }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                        <a href="{{ route('homework.download',$task->filename) }}">{{$task->filename}}</a>
                    </div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                        <a href="{{ route('homework.solutionlist',['tid' => $task->task_id]) }}">Xem danh sách bài làm</a>
                    </div>
                </div>
            @endforeach
        </div>
@endsection