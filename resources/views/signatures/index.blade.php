<!DOCTYPE html>
<html>
<head>
    <title>Signature</title>
</head>
<body>
    <h1>List of Signature</h1>
    <ul>
        @foreach ($signatures as $signature)
            <li>{{ $signature->branch }} - {{ $signature->no_rekening }} - {{ $signature->nama_rekening }}</li>
        @endforeach
    </ul>
</body>
</html>

