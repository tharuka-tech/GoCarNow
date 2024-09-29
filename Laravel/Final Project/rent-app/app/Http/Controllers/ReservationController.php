<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Auth;
use App\Models\Post; 

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // Perform the inner join to fetch posts with their associated reservations
        $reservations = Post::join('reservations', 'posts.id', '=', 'reservations.post_id')
        ->select('posts.*', 'reservations.start_date_time', 'reservations.end_date_time','reservations.customer_id','reservations.phone_number')
        ->get();

        return view('reservation.index')->with('reservations', $reservations); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'start_date_time' => 'required|date',
            'end_date_time' => 'required|date|after:start_date_time',
            'post_id' => 'required',
            'phone_number'=>'required',
        ]);

        $userId = Auth::id();
        
        
        // Get the input values from the request
        $startDateTime = $request->input('start_date_time');
        $endDateTime = $request->input('end_date_time');
        $postId = $request->input('post_id');

        // Check for existing reservations with overlapping date ranges
        $Reservations = Reservation::where('post_id', $postId)
        ->where(function ($query) use ($startDateTime, $endDateTime) {
        $query->where(function ($innerQuery) use ($startDateTime, $endDateTime) {
            $innerQuery->whereBetween('start_date_time', [$startDateTime, $endDateTime])
                ->orWhereBetween('end_date_time', [$startDateTime, $endDateTime]);
        })->orWhere(function ($innerQuery) use ($startDateTime, $endDateTime) {
            $innerQuery->where('start_date_time', '<', $startDateTime)
                ->where('end_date_time', '>', $endDateTime);
        });
    })
    ->count();

        if ($Reservations > 0) {
            // Vehicle is not available for the selected date/time
            return redirect()->back()->with('error', 'Vehicle is not available for the selected date/time.');
        }
        

        Reservation::create([
            'start_date_time' => $request->start_date_time,
            'end_date_time' => $request->end_date_time,
            'customer_id' => $userId,
            'post_id' => $request->post_id, // Store the selected post ID
            'phone_number' => $request->phone_number,
            
        ]);

        return redirect('reservation')->with('flash_message', 'Reservation Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {

        $reservation->delete();
        return redirect('reservation')->with('flash_message','Post Deleted!');
    }
}
