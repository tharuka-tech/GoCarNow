@extends('layouts.main')

@section('content')
    <div class="container mx-auto mb-36">
        <div class="px-6 py-4 mt-36">
            @if(session('flash_message'))
                <div id="alert" class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative m-5" role="alert">
                    <strong class="font-bold">Success!</strong>
                    <span class="block sm:inline">{{ session('flash_message') }}</span>
                    <span id="close-btn" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
                        <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 6.36 5.652a.5.5 0 1 0-.708.708L9.293 10l-3.64 3.64a.5.5 0 0 0 .708.707L10 10.707l3.64 3.64a.5.5 0 0 0 .708-.707L10.707 10l3.64-3.64a.5.5 0 0 0 0-.708z"/></svg>
                    </span>
                </div>

                <script>
                    document.getElementById('close-btn').addEventListener('click', function() {
                        document.getElementById('alert').style.display = 'none';
                    });
                </script>
            @endif


            @if(session('error_message'))
                <div id="alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative m-5" role="alert">
                    <strong class="font-bold">Error !</strong>
                    <span class="block sm:inline">{{ session('error_message') }}</span>
                    <span id="close-btn" class="absolute top-0 bottom-0 right-0 px-4 py-3 cursor-pointer">
                        <svg class="fill-current h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 5.652a.5.5 0 0 0-.707 0L10 9.293 6.36 5.652a.5.5 0 1 0-.708.708L9.293 10l-3.64 3.64a.5.5 0 0 0 .708.707L10 10.707l3.64 3.64a.5.5 0 0 0 .708-.707L10.707 10l3.64-3.64a.5.5 0 0 0 0-.708z"/></svg>
                    </span>
                </div>

                <script>
                    document.getElementById('close-btn').addEventListener('click', function() {
                        document.getElementById('alert').style.display = 'none';
                    });
                </script>
            @endif
             
                
            
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 ">

        
            @foreach($posts as $item)
                <div class="max-w-sm rounded overflow-hidden shadow-lg duration-200 hover:scale-110 my-5">
                    <img src="{{ asset('posts/' . $item->image) }}" class="w-full h-52" alt="Image">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $item->modelname }}</div>
                        <p class="text-gray-700 text-base">
                            Registration Number: {{ $item->vehiNo }} <br>
                            Price: Rs.{{ $item->price }}
                        </p>
                                        
                        <passenger-info>
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                                </svg>
                                <span class="text-gray-900">{{ $item->NoOfPassanger }}</span>
                            </div>
                        </passenger-info>
                    </div>
                    
                    
                    <div class="px-6 pt-4 pb-2">
                        
                        <a href="{{ url('/post/' . $item->id) }}" class="inline-block bg-blue-500 text-white rounded px-3 py-1 text-sm font-semibold mr-2">View</a>
                        
                        @if ($item->user_id == auth()->user()->id)
                            <a href="{{ url('/post/create') }}" class="inline-block bg-green-500 text-white rounded px-3 py-1 text-sm font-semibold mr-2">Add New</a>
                            <a href="{{ url('/post/' . $item->id . '/edit') }}" class="inline-block bg-green-500 text-white rounded px-3 py-1 text-sm font-semibold mr-2">Edit</a>
                            <form method="POST" action="{{ url('/post' . '/' . $item->id) }}" accept-charset="UTF-8" class="inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="bg-red-500 text-white rounded px-3 py-1 text-sm font-semibold" onclick="return confirm('Confirm delete?')">Delete</button>
                            </form>
                        @endif    
                    </div>
                </div>
            @endforeach
                
        </div>





    </div>
@endsection
