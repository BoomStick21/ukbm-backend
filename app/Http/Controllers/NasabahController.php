<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Nasabah;

class NasabahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nasabah = strtoupper($request->input('nama_nasabah'));
        return Nasabah::where('nama_identitas', 'like', '%'.$nasabah.'%')
            ->select(DB::raw('id_nasabah_perorangan, nama_identitas, saldo_tabungan_deposito'))
            ->first();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Nasabah::where('id_nasabah_perorangan', '=', $id)
            ->select(DB::raw('nama_identitas, saldo_tabungan_deposito'))
            ->first();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
