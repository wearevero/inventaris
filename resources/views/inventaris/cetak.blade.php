<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('/favicon.png') }}" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Print Barcode {{ $data->kode }}</title>
</head>
<body>
    <div class="container my-5">
        <h3 class="text-center mb-3">PT. VERONIQUE INDONESIA</h3>
        <table class="table table-bordered border-dark">
            <tbody>
                <tr class="">
                    <th scope="row">KODE</th>
                    <td>{{ $data->kode }}</td>
                </tr>
                <tr>
                    <th scope="row">NAMA</th>
                    <td>{{ $data->nama_user }}</td>
                </tr>
                <tr>
                    <th scope="row">TH. PEMBELIAN</th>
                    <td>
                        @if($data->th_pembelian != null)
                            {{ $data->th_beli }}
                        @else
                            -
                        @endif
                    </td>

                </tr>
                <tr>
                    <th scope="row">MERK</th>
                    <td>{{ $data->merk }}</td>
                </tr>
                <tr>
                    <th scope="row">BAGIAN</th>
                    <td>{{ $data->bagian->nama }}</td>
                </tr>
                <tr>
                    <th scope="row">BARCODE</th>
                    <td>
                        <img src="data:image/png;base64, {{ DNS1D::getBarcodePNG($data->kode,'C128') }}" height="30" width="180" />
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
    <script type='text/javascript'>
        window.onload = function() {
            window.print();
        }
    </script> 
</body>
</html>