<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view ('datapegawai',compact('data'));
    }

    // Halaman Tambah Data
    public function tambahpegawai(){
        return view ('tambahdata');
    }

    // Function Insert Data
    public function insertdata(Request $request){
        Employee::create($request->all());
        return redirect()->route('pegawai')->with('success','Data Berhasil Ditambahkan');

    }

    // Function ke Halaman Edit Data
    public function editdata($id){
        $data = Employee::find($id);
        return view ('editdata',compact('data'));
    }

    // Function Update Data
    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()->route('pegawai')->with('success','Data Berhasil Diupdate');
    }

    // Function Delete Data
    public function deletedata($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data Berhasil Dihapus');
    }
}
