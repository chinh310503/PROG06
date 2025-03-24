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
                        
                    </div>
                    <div class="md:w-2/3">
                        <span class="block text-gray-600 font-bold">{{ $status }}</span>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                            Noi dung file challenge :
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <span class="text-gray-600 font-bold">{{ $content }}</span>
                    </div>
                </div>
            </div>        
        </div>
    </div>

@endsection