@extends('layouts.main')
@section('content')


 
<div class="container mx-auto px-4 py-8 mt-36 border p-4 rounded-lg bg-white">
  <h1 class="text-3xl font-bold text-center mb-8">Vehicle Details</h1>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8  px-1 py-1">
    <div class="">
      <h2 class="text-xl font-semibold mb-2">Model Name:</h2>
      <p>{{ $post->modelname }}</p>
      <h2 class="text-xl font-semibold mt-4 mb-2">Vehicle Number:</h2>
      <p>{{ $post->vehiNo }}</p>
      <h2 class="text-xl font-semibold mt-4 mb-2">Number of Passengers:</h2>
      <p>{{ $post->NoOfPassanger }}</p>
      
      <h2 class="text-xl font-semibold mt-4 mb-2 ">Description:</h2>
      <div class=" border p-4 rounded-lg bg-white">
        <p>{{ $post->about }}</p>
      </div>
      
      <h2 class="text-xl font-semibold mt-4 mb-2">Price:</h2>
      <p class="text-green-500 text-xl">{{ $post->price }}</p>
    </div>
    
    <div class="">
      <img src="{{ asset('posts/' . $post->image) }}" class="mx-auto h-auto md:h-52" alt="Image">
    </div>
  </div>

  <!-- Button to toggle form visibility -->
  <div class="flex items-center justify-center mt-4">
    <button onclick="toggleForm()" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Book Now</button>
  </div>



  <div class="container mx-auto">
    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div id="reservationForm" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <h2 class="text-3xl font-bold text-center mb-6 text-blue-600">Reservation</h2>
                </div>
  
               
                <form method="POST" action="{{ url('reservation') }}" class="mb-8">
                    @csrf
  
                    <div class="mb-4">
                        <label for="start_date_time" class="block text-gray-700 text-sm font-bold mb-2">Start Date Time</label>
                        <input id="start_date_time" type="datetime-local" class="form-input w-full @error('start_date_time') border-red-500 @enderror px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" name="start_date_time" value="{{ old('start_date_time') }}" required autofocus>
                        @error('start_date_time')
                            <p class="text-red-500 text-xs italic"> {{ $message }} </p>
                        @enderror
                    </div>
  
                    <div class="mb-4">
                        <label for="end_date_time" class="block text-gray-700 text-sm font-bold mb-2">End Date Time</label>
                        <input id="end_date_time" type="datetime-local" class="form-input w-full @error('end_date_time') border-red-500 @enderror px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" name="end_date_time" value="{{ old('end_date_time') }}" required>
                        @error('end_date_time')
                            <p class="text-red-500 text-xs italic"> {{ $message }} </p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                         <input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder="Enter phone number" pattern="[0-9]{3}[0-9]{7}"  title="Format: 123-456-7890" required>
                           <!-- Optional: Add a pattern and title attribute to enforce a specific format and display a tooltip -->
                  </div>
  
                    <input type="hidden" id="post_id" name="post_id" value="{{$post->id}}" >
  
                    <div class="flex items-center justify-center mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Create Reservation</button>
                    </div>
                </form>
  
                <!-- JavaScript to toggle form visibility -->
                <script>
                  
                  var formVisible = localStorage.getItem('formVisible');
  
                  var form = document.getElementById('reservationForm');
                  form.style.display = formVisible === 'true' ? 'block' : 'none';
  
                  function toggleForm() {
                      
                      form.style.display = form.style.display === 'none' || form.style.display === '' ? 'block' : 'none';
  
                      localStorage.setItem('formVisible', form.style.display === 'block');
                  }
              </script>
  
              @if(session('error'))
              <div id="alert" class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative m-5" role="alert">
                  <strong class="font-bold">Error !</strong>
                  <span class="block sm:inline">{{ session('error') }}</span>
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
        </div>
    </div>
  </div>
</div>





