<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @php
    $data = 1000;
    $status = 100;
    @endphp

    <h1>Ini Adalah Halaman Profile {{ $data }}</h1>
    <br>
    @for ($i = 1; $i <= 10; $i++)
      @if ($i % 2==0) Angka ke-{{ $i }} Bilangan Genap <br>
        @else
        Angka ke-{{ $i }} Bilangan Ganjil <br>
      @endif
    @endfor

    @php
      $warna = '<div style="color: red">saasas</div>'
    @endphp
    {{-- s --}}
    {{-- {{ $warna }} --}}
    {!! $warna !!}
</body>

</html>
