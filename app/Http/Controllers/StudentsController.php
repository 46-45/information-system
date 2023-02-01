<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use PDF;

class StudentsController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Students::where('nama','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $data = Students::paginate(5);
        }

        return view('datasiswa',compact('data'));
    }

    public function tambahsiswa(){
        return view('tambahsiswa');
    }

    public function insertdata(Request $request){
        Students::create($request->all());
        return redirect()->route('murid')->with('success','Data berhasil di tambahkan');
    }

    public function tampilkandata($id){
        $data = Students::find($id);
        
        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        $data = Students::find($id);
        $data->update($request->all());
        return redirect()->route('murid')->with('success','Data berhasil di update');
    }

    public function delete($id){
        $data = Students::find($id);
        $data->delete();
        return redirect()->route('murid')->with('success','Data berhasil di hapus');
    }

    public function exportpdf(){
        $data = Students::all();

        view()->share('data', $data);
        $pdf = PDF::loadview('datasiswa-pdf');
        return $pdf->download('data.pdf');
    }
}
