<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contoh1 Blade</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
{{--Assign data--}}
@php
   $nama = 'Gunawan Santoso';
   $idjenjang = 2;
   $uas = 55;
@endphp

{{--Proses & display output--}}   
Nama Mahasiswa : {{$nama}}
<BR> Jenjang Pendidikan :
@switch ($idjenjang)
   @case (0)
      {{'Diploma III'}}
	  @break
   @case (1)
      {{'Sarjana'}}
	  @break
   @case (2)
      {{'Magister'}}
	  @break
   @default
      {{'Data ngaco!'}}   
@endswitch

<BR> Nilai UAS : {{$uas}}
<BR> Status : 
@if ($uas > 60)
   {{'Lulus'}}
@else
   {{'Gagal'}}
@endif
</body>
</html>

