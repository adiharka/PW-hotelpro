<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Booking;
  
class BookingController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $bookings = Booking::latest()->paginate(5);
         
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('bookings.index',compact('bookings'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('bookings.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'checkin' => 'required',
            'checkout' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Booking::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('bookings.index')
                        ->with('success','Booking created successfully.');
    }
  
    public function edit(Booking $booking)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('bookings.edit',compact('booking'));
    }
  
    public function update(Request $request, Booking $booking)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'checkin' => 'required',
            'checkout' => 'required',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $booking->update($request->all());
         
        /// setelah berhasil mengubah data
        return redirect()->route('bookings.index')
                        ->with('success','Booking updated successfully');
    }
  
    public function destroy(Booking $booking)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $booking->delete();
  
        return redirect()->route('bookings.index')
                        ->with('success','Booking deleted successfully');
    }
}