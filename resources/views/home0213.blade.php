@extends('index')
@section('badan')
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Pelanggan</title>
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
                
                  @foreach ($home as $Home)
                  <tr>
                      
                    <td>{{ $Home->id_buku }}</td>
                      
                      <td>{{ $Home->id_jenis}}</td>
                      <td>{{ $Home->judul }}</td>
                      <td>{{ $Home->jenis }}</td>
                      <td>{{ $Home->tahun_terbit }}</td>
                      <td><a href="#">Edit</a> | 
                          <a href="#">Hapus</a>
                      </td>
                    
                    
                      
                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
@endsection