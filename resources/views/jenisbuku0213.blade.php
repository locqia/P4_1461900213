@extends('index')
@section('badan')
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <button style="margin-right :30px;margin-left :200px;margin-bottom :50px;" class="btn btn-primary" type="submit">Tambah Data</button>
    <a href="/export"><button style="margin-bottom :50px;"
 class="btn btn-primary" type="submit">Convert</button>
     <title>Data Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #f2f2f2;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #f2f2f2}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
    
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
                      <td style= "text-allign:center;">{{->id_rak}}</td>
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