@extends('index')
@section('badan')
    <meta name="viewport" content="width+device-width,
    initial-scale=1">

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
                  
                      <th>id </th> 
                      <th>id Buku</th>
                      
                      <th>id Jenis Buku</th>
         
                     
                    
                  </tr>
              </thead>
              <tbody style="color:white;">
                
                @foreach ($rakbuku as $Rakbuku)
                  <tr>
                      
                      <td>{{ $Rakbuku->id }}</td>
                      <td>{{ $Rakbuku->id_buku}}</td>
                      <td>{{ $Rakbuku->id_jenis_buku }}</td>
                      
                      
                    

                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
    @endsection