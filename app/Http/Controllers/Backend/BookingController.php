<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Mail\InvoiceMail;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function list(){
        $bookings = Booking::with('seat')->get();
        return view('admin.pages.Booking.booking-list',compact('bookings'));
    }

    public function bookingStatus($id){
      $booking=Booking::find($id);
      $booking->update([
          'status'=>'complete'
      ]);
      // Mail::to($booking->email)->send(new InvoiceMail($booking));
      return redirect()->back();
    }

  //   public function delete($id)
  // {
  //   Booking::find($id)->delete();
  //   return redirect()->route('admin.booking.list')->with('msg','Booking Deleted.');
  // }
}