<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Pengguna::all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Nama'=>'required',
            'Alamat'=>'required',
            'No_Telepon'=>'required',
            'Email'=>'required',
            'Password'=>'required'
        ]);

        return Pengguna::create([
            'Nama'=>$request->Nama,
            'Alamat'=>$request->Alamat,
            'No_Telepon'=>$request->No_Telepon,
            'Email'=>$request->Email,
            'Password'=>$request->Password,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $this->validate($request,[
            'Nama'=>'required',
            'Alamat'=>'required',
            'No_Telepon'=>'required',
            'Email'=>'required',
            'Password'=>'required'
        ]);

        $data = [
            'Nama'=>$request->Nama,
            'Alamat'=>$request->Alamat,
            'No_Telepon'=>$request->No_Telepon,
            'Email'=>$request->Email,
            'Password'=>$request->Password,
        ];

        $editData = Pengguna::findOrFail($id);
        $editData->update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hapus = Pengguna::findOrFail($id);
        $hapus->delete();
    }
}
