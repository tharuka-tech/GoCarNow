@extends('layouts.main')

@section('content')
<div>
    <h1 class="mt-40 text-5xl text-blue-500">Reservations List</h1>
    @if ($reservations->count() > 0)
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Model Name</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Vehicle Number</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Start Date Time</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">End Date Time</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Phone Number</th>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Customer ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Owner ID</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($reservations as $reservation)
                        @if ($reservation->customer_id == auth()->user()->id || $reservation->user_id == auth()->user()->id)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->modelname }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->vehiNo }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->price }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->start_date_time }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->end_date_time }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->phone_number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->customer_id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $reservation->user_id }}</td>
                            </tr>
                        @else
                            @if ($loop->last)
                                <tr>
                                    <td colspan="7" class="px-6 py-4 whitespace-nowrap text-3xl text-center text-red-500">No Reservations Found!</td>
                                </tr>
                            @endif
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="mt-8 text-3xl text-center text-red-500">No Reservations Found!</p>
    @endif
</div>
@endsection
