@extends('index')
@section('badan')
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <button style="margin-right :5px;margin-left :0px;margin-bottom :5px;" class="btn btn-primary" type="submit">Tambah Data</button>
    <a href="buku0213/export"><button style="margin-bottom :5px;"
 class="btn btn-primary" type="submit">EXPORT</button></a>

     <title>Data Buku</title>
    
    
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                  
                      <th>Id Buku</th> 
                      <th>Judul Buku</th>
                      
                      <th>Tahun Terbit</th>
                
                     
                    
                  </tr>
              </thead>
              <tbody style="color:white;">
                
                @foreach ($buku as $Buku)
                    <tr> 
                      <td>{{ $Buku->id }}</td>
                      <td>{{ $Buku->judul}}</td>
                      <td>{{ $Buku->tahun_terbit }}</td>
                      <td><a href="#">Edit</a> | 
                          <a href="#">Hapus</a>
                      </td>
                      


                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>

@endsection