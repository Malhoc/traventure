<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\PaymentTransaction;
use App\Models\Tour;
use App\Models\TourCategory;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = TourCategory::orderBy('id', 'DESC')->get();
        $tours = Tour::orderBy('id', 'DESC')->with('category')->paginate(9);
        return view('pages.tours.index', compact('tours', 'categories'));
    }

    /**
     * Show the form for booking a tour.
     */
    public function booking(Request $request)
    {
        $booking = new Booking();
        $tour = Tour::find($request->input('tour_id'));
        $booking->name = $request->input('name');
        $booking->email = $request->input('email');
        $booking->phone = $request->input('phone');
        $booking->date = $request->input('date');
        $booking->no_of_guests = intval($request->input('no_of_guests'));
        $booking->price = intval($request->input('no_of_guests')) * $tour->price;
        $booking->tour = $tour;
        // $booking->tour_title = $request->input('tour_title');

        session()->put('booking', $booking);

        return view('pages.booking-payment', compact('booking'));
    }

    public function bookingPayment(Request $request)
    {
        $booking = $request->session()->get('booking');

        $booking = Booking::create([
            'name' => $booking->name,
            'email' => $booking->email,
            'phone' => $booking->phone,
            'date' => date('Y-m-d', strtotime($booking->date)),
            'no_of_guests' => $booking->no_of_guests,
            'tour_id' => $booking->tour->id,
            'price' => $booking->no_of_guests * $booking->tour->price,
        ]);

        // perform transactiion here

        PaymentTransaction::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'country' => $request->input('country'),
            'street_address' => $request->input('street_address'),
            'town_or_city' => $request->input('town_or_city'),
            'zipcode' => $request->input('zipcode'),
            'status' => 'Success',
            'amount' => $booking->price,
            'term_condition_agree' => $request->input('term_condition_agree'),
            'payment_provider_customer_no' => null,
            'payment_provider_transaction_id' => null,
            'cc_last_digits' => null,
            'cc_last_digits' => null,
            'booking_id' => $booking->id
        ]);

        return redirect()->route('tours.booking.confirmed')->withInput(['bookingId'=>$booking->id]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function bookingConfirmed()
    {
        $bookingId = 'asds';
        return view('pages.thankyou', compact('bookingId'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        $popularTours = Tour::orderBy('id', 'DESC')->paginate(6);
        return view('pages.tours.show', compact('tour', 'popularTours'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        //
    }
}
