<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

    
class MenuController extends Controller
{

    public function indexAdmin(){
        $menu = Menu::all();

        return view('Admin.admin_menu', compact('menu'));
    }
    
    public function indexUser(){
        $menu = Menu::all();
        return view('/user/main/menu', compact('menu'));
    }

    public function edit($id_menu){
        $menu = Menu::findOrFail($id_menu);

        return view('Admin.admin_editMenu', compact('menu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'gambar_makanan' => 'nullable|image'
        ]);
        
        $imagePath = '';
        if ($request->hasFile('gambar_makanan')) {
            $image = $request->file('gambar_makanan');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
        }
        
        Menu::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar_makanan' => $imagePath,
        ]);
        
        return redirect()->intended('admin_menu')->with('success', 'Berhasil membuat menu'); 
    }

    public function update(Request $request, $id_menu)
    {

        $menu = Menu::findOrFail($id_menu);
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'gambar_makanan' => 'nullable|image'
        ]);
        $imageLama = $menu->gambar_makanan;
        $imagePath = $menu->gambar_makanan;
        if ($request->hasFile('gambar_makanan')) {
            $image = $request->file('gambar_makanan');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
            File::delete(public_path($imageLama));
        }
        $menu->update([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar_makanan' => $imagePath,

        ]);
        
        return redirect()->intended('admin_menu')->with('success', 'Berhasil mengupdate menu');  
    }

    public function destroy($id_menu)
    {

        $menu = Menu::find($id_menu);
        File::delete(public_path($menu->gambar_makanan));
        $menu->delete();
        return redirect()->intended('admin_menu')->with('success', 'Berhasil menghapus menu');  
    }
}
