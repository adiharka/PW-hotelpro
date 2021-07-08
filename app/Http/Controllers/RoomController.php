<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Room;
  
class RoomController extends Controller
{
    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $rooms = Room::latest()->paginate(5);
         
        /// mengirimkan variabel $posts ke halaman views posts/index.blade.php
        /// include dengan number index
        return view('rooms.index',compact('rooms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('rooms.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'location' => 'required',
            'type' => 'required',
            'status' => 'required',
        ]);
         
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Room::create($request->all());
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('rooms.index')
                        ->with('success','Room created successfully.');
    }
  
    public function edit(Room $room)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('posts.edit',$post->id) }}
        return view('rooms.edit',compact('room'));
    }
  
    public function update(Request $request, Room $room)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'location' => 'required',
            'type' => 'required',
            'status' => 'required',
        ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $room->update($request->all());
         
        /// setelah berhasil mengubah data
        return redirect()->route('rooms.index')
                        ->with('success','Room updated successfully');
    }
  
    public function destroy(Room $room)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $room->delete();
  
        return redirect()->route('rooms.index')
                        ->with('success','Room deleted successfully');
    }
}