<?php

namespace App\Http\Controllers;

use App\Models\UserBooking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.home', compact('user'));
    }

    public function booking()
    {
        $user = Auth::user();
        return view('user.booking', compact('user'));
    }


    public function storeBooking(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'checkin' => 'required',
            'checkout' => 'required',
            'cardName' => 'required',
            'cardNumber' => 'required',
            'cardExp' => 'required',
        ]);

        $tugas = new UserBooking();
        $tugas->user_id = Auth::id();
        $tugas->name = $request->name;
        $tugas->checkin = $request->checkin;
        $tugas->checkout = $request->checkout;
        $tugas->cardName = $request->cardName;
        $tugas->cardNumber = $request->cardNumber;
        $tugas->cardExp = $request->cardExp;
        $tugas->user_id = Auth::id();
        $tugas->link = $request->link;
        $save = $tugas->save();

        if ($save) {
            Session::flash('success', 'Sukses membuat booking');
            return redirect()->route('katalog.index');
        } else {
            Session::flash('errors', ['' => 'Gagal membuat booking!']);
            return back();
        }
    }
}
