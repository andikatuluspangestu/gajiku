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
        $data = Employee::create($request->all());

        if($request->hasFile('foto')){
            $request->file('foto')->move('fotopegawai/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('pegawai')->with('success','Data Berhasil Ditambahkan');

    }

    // Function tampilkandata
    public function tampilkandata($id){
        $data = Employee::find($id);
        return view ('tampildata',compact('data'));
    }

    // Function updatedata
    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());

        return redirect()->route('pegawai')->with('success', 'Data Berhasil Diupdate');
    }

    // Function deletedata
    public function deletedata($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()->route('pegawai')->with('success','Data Berhasil Dihapus');
    }
}
