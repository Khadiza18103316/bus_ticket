<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Booking;

class BookingController extends Controller
{
    public function list(){
        $bookings = Booking::with('seat')->get();
        return view('admin.pages.Booking.booking-list',compact('bookings'));
    }

    public function details($id)
  {
    $booking=Booking::find($id);
    $booking=Booking::where('id',$id)->first();
    $passengerDetails=User::where('id',$booking->user_id)->first();
    return view('admin.pages.Booking.details',compact('passengerDetails'));
  }

    public function delete($id)
  {
    Booking::find($id)->delete();
    return redirect()->route('admin.booking.list')->with('msg','Booking Deleted.');
  }
}