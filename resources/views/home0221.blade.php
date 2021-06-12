<head>
    <meta name="viewport" content="width+device-width,
    initial-scale=1">
    <title>Data Buku</title>
    <style>
        table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
        border: 1px solid #ddd;
        }
        thead {
        background-color: #00FFFF;
        }
        th, td {
        text-align: left;
        padding: 8px;
        }
        tr:nh-child(even){background-color: #00FFFF}
        .tambah{
        padding: 8px 16px ;
        text-decoration: none;
        }
    </style>
</head>

<body>
    <div style="overflow-x: auto">
          <table>
              <thead>
                  <tr>
                      <th>No Buku</th>
                      <th>No Jenis Buku</th>
                      <th>Judul</th>
                      <th>Jenis</th>
                      <th>Tahun Terbit</th>
                      <th>Action</th>


                      
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($home as $Home)
                  <tr>
                      <td>{{ $Home->id_buku }}</td>
                      <td>{{ $Home->id_jenis }}</td>
                      <td>{{ $Home->judul }}</td>
                      <td>{{ $Home->jenis }}</td>
                      <td>{{ $Home->tahun_terbit }}</td>
                      
                      
                      <td><a href="#">Edit</a> | 
                      <a href="#">Hapus</a></td>
                      
                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>

<br><a href="{{url('/export0221')}}">Export</a>
<br/>