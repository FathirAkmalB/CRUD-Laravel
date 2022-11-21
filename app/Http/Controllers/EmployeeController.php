<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $data = Employee::all();
        return view ('datapegawai', compact('data'));
    }

    public function tambahdata(){
        return view('tambahdata');
    }
    
    public function insertdata(Request $request){
        // dd($request->all());       
        Employee::create($request->all());
        return redirect()-> route('pegawai')->with('succsess', 'Hati Berhasil Di Tambahkan!');
    }

    public function tampildata($id){
        $data = Employee::find($id);
        // dd($data);
        return view ('tampil', compact ('data') );
    } 
    public function updatedata(Request $request, $id){
        $data = Employee::find($id);
        $data->update($request->all());
        return redirect()-> route('pegawai')->with('succsess', 'Hati Berhasil Di Dapatkan!');
    }

    public function hapus($id){
        $data = Employee::find($id);
        $data->delete();
        return redirect()-> route('pegawai')->with('succsess', 'Hati Berhasil Di Buang!');
    }
}
