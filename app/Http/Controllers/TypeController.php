<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Type;
  
class TypeController extends Controller
{
    public function index()
    {
        $types = Type::latest()->paginate(5);

        return view('types.index',compact('types'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        return view('types.create');
    }
  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
        ]);

        Type::create($request->all());
         
        return redirect()->route('types.index')
                        ->with('success','Type created successfully.');
    }
  
    public function edit(Type $type)
    {
        return view('types.edit',compact('type'));
    }
  
    public function update(Request $request, Type $type)
    {
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
            'price' => 'required',
        ]);
         
        $type->update($request->all());
         
        return redirect()->route('types.index')
                        ->with('success','Type updated successfully');
    }
  
    public function destroy(Type $type)
    {
        $type->delete();
  
        return redirect()->route('types.index')
                        ->with('success','Type deleted successfully');
    }
}