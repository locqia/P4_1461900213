@extends('index')
@section('badan')
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <button style="margin-right :5px;margin-left :0px;margin-bottom :5px;" class="btn btn-primary" type="submit">Tambah Data</button>
    <a href="user0213/export"><button style="margin-bottom :5px;"
 class="btn btn-primary" type="submit">EXPORT</button></a>
     <title>Data User</title>
    
    
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                  
                      <th>Id</th> 
                      <th>Nama</th>
                      <th>User Name</th>
                      <th>Password</th>
                    
                  </tr>
              </thead>
              <tbody style="color:white;">
                
                @foreach ($user as $User)
                  <tr>
                      <td>{{ $User->id }}</td>
                      <td>{{ $User->nama}}</td>
                      <td>{{ $User->username}}</td>
                      <td>{{ $User->password}}</td>
                      <td><a href="#">Edit</a> | 
                          <a href="#">Hapus</a>
                      </td>

                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>

@endsection