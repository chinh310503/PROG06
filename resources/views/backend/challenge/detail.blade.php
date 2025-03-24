@extends('layouts.app')

@section('content')
    <div class="roles">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Challenge Details</h2>
            </div>
        </div>

        <div class="mt-8 bg-white rounded">
            <div class="w-full max-w-2xl px-6 py-12">

                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            File name : 
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="block text-gray-600 font-bold">{{ $chall->filename }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Hint :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $chall->hint }}</span>
                    </div>
                </div>
            </div>        
        </div>
    </div>

    <div class="table w-full mt-8 bg-white rounded">
    <form action="{{ route('challenge.solve',$chall->filename) }}" method="POST" class="w-full max-w-xl px-6 py-12" enctype="multipart/form-data">
        @csrf
        <div class="md:flex md:items-center mb-6">
            <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                    Nhập đáp án
                </label>
            </div>
            <div class="md:w-2/3">
                <input name="answer" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-blue-500" type="text">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>
        </div>
        <div class="md:flex md:items-center">
            <div class="md:w-1/3"></div>
            <div class="md:w-2/3">
                <button class="w-full shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                    Submit
                </button>
            </div>
        </div>
    </form>
</div>
@endsection