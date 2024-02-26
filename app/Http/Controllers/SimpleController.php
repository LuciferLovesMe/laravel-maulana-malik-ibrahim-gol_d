<?php

namespace App\Http\Controllers;

use App\Models\SimpleModel;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class SimpleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = SimpleModel::get();
        return view('simple.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('simple.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            DB::table('simple_models')
                ->insert([
                    'nama' => $request->get('nama'),
                    'deskripsi' => $request->deskripsi,
                    'created_at' => now()
                ]);

            DB::commit();

            Alert::success('Berhasil', 'Berhasil menambahkan item');
            return redirect()->route('simple.index');
        } catch (Exception $e) {
            DB::rollBack();
            Alert::error('Terjadi kesalahan', $e->getMessage());
            return redirect()->back();
        } catch (QueryException $e) {
            DB::rollBack();
            Alert::error('Terjadi kesalahan', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = SimpleModel::find($id);

        return view('simple.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            DB::table('simple_models')
                ->where('id', $id)
                ->update([
                    'nama' => $request->nama,
                    'deskripsi' => $request->deskripsi,
                    'updated_at' => now()
                ]);

            DB::commit();
            
            Alert::success('Berhasil', 'Berhasil mengubah item');
            return redirect()->route('simple.index');
        } catch (Exception $e) {
            DB::rollBack();
            Alert::error('Terjadi kesalahan', $e->getMessage());
            return redirect()->back();
        } catch (QueryException $e) {
            DB::rollBack();
            Alert::error('Terjadi kesalahan', $e->getMessage());
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            DB::table('simple_models')
                ->where('id', $id)
                ->delete();

            DB::commit();
            
            Alert::success('Berhasil', 'Berhasil menghapus item');
            return redirect()->route('simple.index');
        } catch (Exception $e) {
            DB::rollBack();
            Alert::error('Terjadi kesalahan', $e->getMessage());
            return redirect()->back();
        } catch (QueryException $e) {
            DB::rollBack();
            Alert::error('Terjadi kesalahan', $e->getMessage());
            return redirect()->back();
        }
    }
}
