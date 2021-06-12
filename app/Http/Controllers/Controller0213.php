<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;
use App\Exports\UsersExport;
use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

class Controller0213 extends Controller

{
    public function buku(){
        $buku = DB::table('buku')->get();
        
        return view('buku0213',['buku' => $buku]);
    }
    public function jenisbuku(){
        $jenisbuku = DB::table('jenisbuku')->get();
        
        return view('jenisbuku0213',['jenisbuku' => $jenisbuku]);
    }
    public function rakbuku(){
        $rakbuku = DB::table('rak_buku')->get();
        
        return view('rakbuku0213',['rakbuku' => $rakbuku]);
    }
    public function cari(Request $request)
    {
        
        $cari = $request->cari;
        $buku = DB::table('buku')
        ->where('nama','like',"%".$cari."%")
        ->paginate();
     
            
        return view('buku0213',['buku' => $buku]);
    }
    public function user(){
        $user = DB::table('user')->get();
        
        return view('user0213',['user' => $user]);
    }
    public function home(){

            $home = DB::table('rak_buku')
                
                ->select(DB::raw('jenis_buku.id as id_jenis,jenis_buku.jenis,buku.id as id_buku,buku.judul,buku.tahun_terbit,rak_buku.id_buku,rak_buku.id,rak_buku.id_jenis_buku'))
                ->join('buku','rak_buku.id','=','buku.id')  
                ->join('jenis_buku','rak_buku.id','=','jenis_buku.id')  
                      
                // ->where('buku_judul','LIKE',"%Slider%")
                ->get();
    
                return view('home0213',['home' => $home]);
        }
        public function export() 
    {
        return Excel::download(new UsersExport, 'buku.xlsx');
    }
    public function exportUser() 
    {
        return Excel::download(new UserExport, 'user.xlsx');
    }
        
}