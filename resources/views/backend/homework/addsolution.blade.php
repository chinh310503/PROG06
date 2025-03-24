@extends('layouts.app')

@section('content')
<div class="table w-full mt-8 bg-white rounded">
    <form action="{{ route('homework.addsolution',['tid'=>$tid, 'sid' =>auth()->user()->id]) }}" method="POST" class="w-full max-w-xl px-6 py-12" enctype="multipart/form-data">
        @csrf
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    Thêm/Sửa bài làm
                </label>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        File bài làm:
                    </label>
                </div>
                <div class="md:w-2/3">
                    <input name="solutionfile" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="file">
                </div>
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button class="w-full shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Nộp bài
                </button>
            </div>
        </div>
    </form>
</div>

@endsection