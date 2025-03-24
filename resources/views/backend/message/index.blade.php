@extends('layouts.app')
@section('content')
    <div class="flex items-center justify-between mb-6">
        <div>
            <h2 class="text-gray-700 uppercase font-bold">Tin nhắn đã gửi</h2>
        </div>
    </div>
        <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
                <div class="w-3/12 px-4 py-3">ID</div>
                <div class="w-3/12 px-4 py-3">Người nhận</div>
                <div class="w-2/12 px-4 py-3">Nội dung tin nhắn</div>
            </div>
            @foreach ($sent_msg as $sent)
                <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $sent->receiver_id }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $sent->receiver_name }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $sent->msg }}</div>
                </div>
            @endforeach
        </div>
        <div>
            <h2 class="text-gray-700 uppercase font-bold">Tin nhắn đã nhận</h2>
        </div>
        <div class="mt-8 bg-white rounded border-b-4 border-gray-300">
            <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
                <div class="w-3/12 px-4 py-3">ID</div>
                <div class="w-3/12 px-4 py-3">Người gửi</div>
                <div class="w-2/12 px-4 py-3">Nội dung tin nhắn</div>
            </div>
            @foreach ($received_msg as $received)
                <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $received->sender_id }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $received->sender_name }}</div>
                    <div class="w-3/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $received->msg }}</div>
                </div>
            @endforeach
        </div>
@endsection