@extends('index')
@section('badan')
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <button style="margin-right :30px;margin-left :200px;margin-bottom :50px;" class="btn btn-primary" type="submit">Tambah Data</button>
    <a href="user0213/export"><button style="margin-bottom :50px;"
 class="btn btn-primary" type="submit">Convert</button>
     <title>Data User</title>
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

                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>

@endsection