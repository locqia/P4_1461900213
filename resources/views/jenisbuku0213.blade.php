@extends('index')
@section('badan')
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <div>
    <button style="margin-right :5px;margin-left :0px;margin-bottom :5px;" class="btn btn-primary" type="submit">Tambah Data</button>
    <a href="jenisbuku0213/export"><button style="margin-bottom :5px;"
 class="btn btn-primary" type="submit">EXPORT</button></a>
    </div>

    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                  
                      <th>Id </th> 
                      <th>Jenis Buku</th>
                      
                    
                  </tr>
              </thead>
              <tbody style="color:white;">
                
                @foreach ($jenisbuku as $Jenisbuku)
                  <tr>
                      
                      <td>{{ $Jenisbuku->id}}</td>
                      <td>{{ $Jenisbuku->jenis}}</td>
                      <td><a href="#">Edit</a> | 
                          <a href="#">Hapus</a>
                      </td>
                      
                      
                      
                    

                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>

@endsection