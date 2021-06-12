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