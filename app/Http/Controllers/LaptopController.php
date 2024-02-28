<?php

namespace App\Http\Controllers;

use App\Models\laptop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\FlareClient\View;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $cari = $request->cari;
        $baris = 5;

        if (strlen($cari)) {
            $data = laptop::where('kode_barang', 'like', "%$cari%")
                ->orwhere('merek', 'like', "%$cari%")
                ->orwhere('tipe', 'like', "%$cari%")
                ->orwhere('jumlah', 'like', "%$cari%")
                ->orwhere('ket', 'like', "%$cari%")
                ->paginate($baris);
        } else{
            $data = laptop::orderBy('id','desc')->paginate($baris); //::orderBy('id', 'desc'); //->paginate(5);
        }

        return View('laptop.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('laptop.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Menampilkan kembali data yang sudah diisi di form - optional
        Session::flash('kode_barang', $request->kode_barang);
        Session::flash('merek', $request->merek);
        Session::flash('tipe', $request->tipe);
        Session::flash('jumlah', $request->jumlah);
        Session::flash('ket', $request->ket);

        // Validasi data
        $request->validate([
            'kode_barang' => 'required|unique:laptop,kode_barang',
            'merek' => 'required',
            'tipe' => 'required',
            'jumlah' => 'required|numeric'
        ], [
            'kode_barang' => 'Kode barang sudah terdaftar',
            'merek' => 'Merek harus diisi',
            'tipe' => 'Tipe harus diisi',
            'jumlah' => 'Masukkan jumlah barang'
        ]);

        // Penampungan data dari form setelah validasi
        $data = [
            'kode_barang' => strtoupper($request->kode_barang),
            'merek' => $request->merek,
            'tipe' => $request->tipe,
            'jumlah' => $request->jumlah,
            'ket' => $request->ket
        ];

        // Memasukkan data ke dalam tabel
        laptop::create($data);

        // Kemblai kehalaman index
        return redirect()->to('laptop')->with('success', 'Data berhasil ditambhakan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data = laptop::where('id',$id)->first();

        return view('laptop.show')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $data = laptop::where('id',$id)->first();

        return view('laptop.edit')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        // Menampilkan kembali data yang sudah diisi di form - optional
        Session::flash('kode_barang', $request->kode_barang);
        Session::flash('merek', $request->merek);
        Session::flash('tipe', $request->tipe);
        Session::flash('jumlah', $request->jumlah);
        Session::flash('ket', $request->ket);

        // Validasi data
        $request->validate([
            'merek' => 'required',
            'tipe' => 'required',
            'jumlah' => 'required|numeric'
        ], [
            'merek' => 'Merek harus diisi',
            'tipe' => 'Tipe harus diisi',
            'jumlah' => 'Masukkan jumlah barang'
        ]);

        // Penampungan data dari form setelah validasi
        $data = [
            'kode_barang' => strtoupper($request->kode_barang),
            'merek' => $request->merek,
            'tipe' => $request->tipe,
            'jumlah' => $request->jumlah,
            'ket' => $request->ket
        ];

        // Memasukkan data ke dalam tabel
        laptop::where('id',$id)->update($data);

        // Kemblai kehalaman index
        return redirect()->to('laptop')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        laptop::where('id',$id)->delete();

        return redirect()->to('laptop')->with('success', 'Data berhasil dihapus');
    }
}
