<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lokasi;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    public function index()
    {
        $locations = Lokasi::all();
        return view('admin.location.index', compact('locations'));
    }

    public function store(Request $request)
    {
        $payload = $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        Lokasi::create($payload);

        return redirect()
            ->route('admin.locations.index')
            ->with('success', 'Lokasi berhasil ditambahkan.');
    }

    public function update(Request $request, string $id)
    {
        $payload = $request->validate([
            'nama' => 'required|string|max:255',
        ]);

        $location = Lokasi::findOrFail($id);
        $location->update($payload);

        return redirect()
            ->route('admin.locations.index')
            ->with('success', 'Lokasi berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        Lokasi::destroy($id);

        return redirect()
            ->route('admin.locations.index')
            ->with('success', 'Lokasi berhasil dihapus.');
    }
}
