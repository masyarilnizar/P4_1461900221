<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<div class="navbar navbar-expand-md navbar-dark bg-dark mb-4" role="navigation">
    <a class="navbar-brand" href="#">JENIS BUKU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home0221">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/buku0221" target="_blank">Buku</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/jenis0221" target="_blank">Jenis Buku</a>
            </li>
            
                            
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
        
    </div>
</div>


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
                      <th>No Jenis Buku</th>
                      
                      <th>Jenis Buku</th>
                      
                      
                      


                      
                  </tr>
              </thead>
              <tbody>
                
                @foreach ($jenis as $Jenis)
                  <tr>
                      <td>{{ $Jenis->id }}</td>
                      
                      <td>{{ $Jenis->jenis }}</td>
                      
                      
                      
                      
                      
                      
                  </tr>
                @endforeach
              </tbody>
          </table>

    </div>
</body>

