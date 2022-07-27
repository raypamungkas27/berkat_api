<?php

namespace App\Http\Controllers;

use App\Ms_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; //import validator

class KategoriCT extends Controller
{

    public function index()
    {
        $model = Ms_kategori::all();
        return response()->json([
            'message' => 'Success',
            'data' => $model,
            'status_code' => 200
        ], 200);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama_kategori'     => 'required',
        ]);

        if ($validasi->fails()) {
            return response()->json([
                'message' => $validasi->errors(),
                'status_code' => 404
            ], 404);
        } else {
            $model = new Ms_kategori;
            $model->nama_kategori = $request->nama_kategori;
            $model->save();

            return response()->json([
                'message' => 'Success Add Data',
                'status_code' => 200
            ], 200);
        }
    }


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
        $validasi = Validator::make($request->all(), [
            'nama_kategori'     => 'required',
        ]);

        if ($validasi->fails()) {
            return response()->json([
                'message' => $validasi->errors(),
                'status_code' => 404
            ], 404);
        } else {
            $model = Ms_kategori::find($id);
            if ($model) {
                $model->nama_kategori = $request->nama_kategori;
                $model->save();
                return response()->json([
                    'message' => 'Success Edit Data',
                    'status_code' => 200
                ], 200);
            } else {
                return response()->json([
                    'message' => 'Edit Data failed! Data Not Found',
                    'status_code' => 404
                ], 404);
            }
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
        $model = Ms_kategori::find($id);

        if ($model) {
            $model->delete();
            return response()->json([
                'message' => 'Success Delete Data',
                'status_code' => 200
            ], 200);
        } else {
            return response()->json([
                'message' => 'Delete Data failed! Data Not Found',
                'status_code' => 404
            ], 404);
        }
    }
}
