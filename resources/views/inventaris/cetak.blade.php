<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ url('/favicon.png') }}" type="image/x-icon" />
    <title>Print Barcode {{ $data->kode }}</title>
</head>
<body>
    <div class="fill-black bg-black text-black">
        <img src="data:image/png;base64, {{ DNS1D::getBarcodePNG($data->kode,'C128') }}" height="60" width="180" />
    </div>
    <script type='text/javascript'>
    window.onload = function() {
        window.print();
    }
</script> 
</body>
</html>