<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserBooking;
use Illuminate\Support\Facades\Auth;
use Session;

class CatalogueController extends Controller
{
    public function index()
    {
        return view('catalogue.index');
    }

    public function show($id)
    {
        $bookings = UserBooking::where('user_id', Auth::id())->get();
        return view('catalogue.detail', compact('bookings'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'cardName' => 'required',
            'cardNumber' => 'required',
            'cardExp' => 'required',
        ]);

        $booking = new UserBooking();
        $booking->user_id = Auth::id();
        $booking->name = $request->name;
        $booking->checkin = $request->checkin;
        $booking->checkout = $request->checkout;
        $booking->cardName = $request->cardName;
        $booking->cardNumber = $request->cardNumber;
        $booking->cardExp = $request->cardExp;
        $booking->user_id = Auth::id();
        $save = $booking->save();

        if ($save) {
            Session::flash('success', 'Sukses membuat booking');
            return redirect()->route('katalog.index');
        } else {
            Session::flash('errors', ['' => 'Gagal membuat booking!']);
            return back();
        }
    }
}
