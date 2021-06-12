<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller

{
    // public function pelanggan(){
    //     $pelanggan = DB::table('pelanggan')->select(DB::raw('pelanggan.id as id_pelanggan, pelanggan.nama as nama_pelanggan, alamat'))->join('transaksi','pelanggan.id','=','transaksi.id_pelanggan')->get();
        
    //     return view('pelanggan0221',['pelanggan' => $pelanggan]);
    // }
    // public function create(){
        
        
    //     return view('tambah0221');
    // }
    // public function cari(Request $request)
    // {
        
    //     $cari = $request->cari;
    //     $pelanggan = DB::table('transaksi')
    //     ->select(DB::raw('pelanggan.id as id_pl,pelanggan.nama as nama_pl,pelanggan.alamat,barang.id as id_br,transaksi.id_barang,barang.nama as nama_br,barang.harga,transaksi.id,transaksi.id_pelanggan'))
    //     ->join('barang','transaksi.id','=','barang.id')  
    //     ->join('pelanggan','transaksi.id','=','pelanggan.id') 
    //     ->where('pelanggan.nama','like',"%".$cari."%")
    //     ->paginate();
     
            
    //     return view('home0221',['home' => $pelanggan]);
    // }
    
    public function export() 
    {
        return Excel::download(new UsersExport, 'DATA_1461900221.xlsx');
    }


    
    
    public function home(Request $request){
        
        // $home = DB::table('pelanggan')
        //         ->select('pelanggan.id','pelanggan.nama','pelanggan.alamat','transaksi.id_pelanggan')
        //         ->join('transaksi','pelanggan.id','=','transaksi.id_pelanggan')
        //         ->get();
        $home = DB::table('rak_buku')
                
                ->select(DB::raw('jenis_buku.id as id_jenis,jenis_buku.jenis,buku.id as id_buku,buku.judul,buku.tahun_terbit,rak_buku.id_buku,rak_buku.id,rak_buku.id_jenis_buku'))
                ->join('buku','rak_buku.id','=','buku.id')  
                ->join('jenis_buku','rak_buku.id','=','jenis_buku.id')  
                      
                // ->where('buku_judul','LIKE',"%Slider%")
                ->get();
    
                return view('home0221',['home' => $home]);
        }


        public function buku(){
            $buku = DB::table('buku')->get();
            
            return view('buku0221',['buku' => $buku]);
        }
        public function jenis(){
            $jenis = DB::table('jenis_buku')->get();
            
            return view('jenis0221',['jenis' => $jenis]);
        }
        public function rakbuku(){
            $rakbuku = DB::table('rak_buku')->get();
            
            return view('rakbuku0221',['rakbuku' => $rakbuku]);
        }

        // public function index()
        // {
        //     //Menampilkan data
        //     $home = pelanggan::all();
        //     return view('edit',['pelanggan' => $home]);
    
        // }
        // public function update(request $request){
        //     // $data = User::where('id',$request->id)->fir;
        //     DB::table('pelanggan')->where('id',$request->id)->update([
        //         'nama'=>$request->nama,
        //         'alamat'=>$request->alamat,
                
        //     ]);
        //     // dd($data->all());
        //     return redirect('/home0221');
        // }
        
}