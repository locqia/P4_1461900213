@extends('index')
@section('badan')
    <meta name="viewport" content="width+device-width,
    initial-scale=1">



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
                      <td><a href="#">Edit</a> | 
                          <a href="#">Hapus</a>
                      </td>
                      
                      
                      
                    

                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
    @endsection