<!DOCTYPE html>
<html lang='en'>
<head>
  <title>Contoh3 Blade</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href='{{asset("css/bootstrap.min.css")}}' rel='stylesheet'>
  <script src='{{asset("js/bootstrap.bundle.min.js")}}'></script>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top"> 
   <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">First Link Null</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Second Link Null</a>
        </li>  
      </ul>
   </div>
</nav>

@php
   $npm = '2020110202';
   $nama = 'Brad Pitt';
   $nilai = 
   [['matkul'=>'Sistem Basis Data','uts'=>50,'uas'=>78], 
    ['matkul'=>'Etika Profesi','uts'=>30,'uas'=>65], 
	['matkul'=>'Expert System','uts'=>80,'uas'=>90], 
	['matkul'=>'Data Mining','uts'=>63,'uas'=>47]];
@endphp

<div class="container-fluid" style="margin-top:80px">
  <p class="h3">TRANSKRIP NILAI </p>
  <p class="h6">NPM : {{$npm}} </p>
  <p class="h6">Nama : {{$nama}} </p>

  <table class="table table-striped"> 
  <thead class="table-primary"> 
     <tr><th>Mata Kuliah</th><th>UTS</th><th>UAS</th>
	     <th>NA</th><th>Status</th></tr> 
  </thead> 
  <tbody> 
     @foreach ($nilai as $item) 
     <tr><td>{{$item['matkul']}}</td> 
         <td>{{$item['uts']}}</td> 
	     <td>{{$item['uas']}}</td> 
		 @php 
		    $na = number_format(($item['uts']*0.4)+($item['uas']*0.6),1);
			if ($na > 60)
			  {$stat = 'Lulus';}
			else
              {$stat = 'Gagal';} 			
		 @endphp 	
		 <td>{{$na}}</td>
		 <td>{{$stat}}</td>    
     </tr> 
     @endforeach 
  </tbody>
  </table>
</div>
</body>
</html>

