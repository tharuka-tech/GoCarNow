<h1>Vehicle Form</h1>
<!-- resources/views/vehicle_owner/RegistrationOwner.blade.php -->
@extends('layouts.main')
@section('content')

    <div class="container mx-auto px-4 mt-36">
        <div class="max-w-md mx-auto my-10 bg-white p-5 rounded-md shadow-md">
            <h2 class="text-2xl font-semibold text-center mb-5">Vehicle Registration</h2>
            
           
            <form action="{{ url('post') }}" method="post" enctype="multipart/form-data">
                {!! csrf_field() !!}   
                
                    <div class="mb-4">
                        <label for="modelname" class="block text-gray-700 text-sm font-bold mb-2">Model Name</label>
                        <input type="text" id="modelname" name="modelname" pattern="[a-zA-Z0-9\s]{3,}" title="Please enter at least 3 characters of letters, numbers, or spaces" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Your Vehicle Model Name" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="vehiNo" class="block text-gray-700 text-sm font-bold mb-2">Vehicle Registration Number</label>
                        <input type="text" id="vehiNo" name="vehiNo" pattern="[A-Za-z]{3}-\d{4}" title="Please enter a valid registration number in the format 'XXX-1234'" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="xxx-2345" required>
                    </div>

                    <div class="mb-4">
                        <label for="NoOfPassanger" class="block text-gray-700 text-sm font-bold mb-2">Number of Passengers</label>
                        <input type="text" id="NoOfPassanger" name="NoOfPassanger" pattern="([1-9]|1[0-9]|20)" title="Please enter a number between 1 and 20" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Number of Passengers" required>
                    </div>
                    

                    <div class="mb-4">
                        <label for="insurance" class="block text-gray-700 text-sm font-bold mb-2">Insurnce expire date</label>
                        <input type="datetime-local" id="insurance" name="insurancer"   class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Insurance expire date" required>
                    </div>



                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Upload Vehicle Image</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                            <div class="space-y-1 text-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 15v5h8v-5m-4-10v4m0 0v4m0-4h4m-4 0H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V7a2 2 0 00-2-2h-4l-4-4-4 4H4zm2 16V9l4-4 4 4v8m-8-4h4v4h-4z" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="image" type="file" class="sr-only"required >
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                    <p class="text-xs text-gray-500">PNG, JPG up to 10MB</p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4">
                         <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                        <input type="text" id="price" name="price" pattern="\d+(\.\d{1,2})?" title="Please enter a valid price" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500" placeholder="Your Vehicle Rent Price" required>
                    </div>

                    <div class="mb-4">
                        <label for="about" class="block text-gray-700 text-sm font-bold mb-2">About</label>
                        <textarea name="about" rows="4" pattern=".{10,}" title="Please enter at least 10 characters" class="w-full px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-blue-500" placeholder="Enter Your Vehicle Description..." required></textarea>
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                            Save
                        </button>
                    </div>
            </form>
        </div>
    </div>

@endsection
