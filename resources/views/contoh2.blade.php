<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Contoh2 Blade</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
@php
   $awal = 1;
   $akhir = 20;
   $nilai = 
   [['matkul' => 'Sistem Basis Data', 'uts' => 50, 'uas' => 78], 
    ['matkul' => 'Etika Profesi', 'uts' => 70, 'uas' => 65], 
	['matkul' => 'Expert System', 'uts' => 80, 'uas' => 90], 
	['matkul' => 'Data Mining', 'uts' => 63, 'uas' => 87]];
@endphp

LOOP FOR : <BR>
@for ($i=$awal; $i<=$akhir; $i++)
   {{$i}}
@endfor

<BR><BR>LOOP WHILE : <BR>  
@php $i=$awal; @endphp 
@while ($i<=$akhir)
   {{$i}} 
   @php $i++; @endphp
@endwhile

<BR><BR>LOOP FOREACH :
<table border=1> 
  <thead> 
     <tr><th>Mata Kuliah</th><th>UTS</th><th>UAS</th></tr> 
  </thead> 
  <tbody> 
     @foreach ($nilai as $item) 
     <tr><td>{{$item['matkul']}}</td> 
         <td>{{$item['uts']}}</td> 
	     <td>{{$item['uas']}}</td> 
     </tr> 
     @endforeach 
  </tbody>
</table>
</body>
</html>

