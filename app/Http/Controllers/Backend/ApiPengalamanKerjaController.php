<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\PengalamanKerja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiPengalamanKerjaController extends Controller
{
    public function getAll() {
        $pengalamankerja = PengalamanKerja::all();
        return Response::json($pengalamankerja, 200);
    }

    public function createPen(Request $request){
        PengalamanKerja::create($request->all());
        return Response::json([
            'status' => 'ok',
            'message' => 'Data has been created'
        ], 201);
    }

    public function getPen($id){
        $pengalamankerja = PengalamanKerja::find($id);
        return Response::json($pengalamankerja, 200);
    }

    public function updatePen($id, Request $request){
        PengalamanKerja::find($id)->update($request->all());
        return Response::json([
            'status' => 'ok',
            'message' => 'Data has been updated'
        ], 201);
    }

    public function deletePen($id){
        PengalamanKerja::destroy($id);
        return Response::json([
            'status' => 'ok',
            'message' => 'Data has been deleted'
        ], 201);
    }
}
