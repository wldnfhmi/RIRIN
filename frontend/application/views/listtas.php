<a href="http://localhost/frontend/tas/create">Tambah Data</a>
<table border="1">
<tr>
<th>KODE TAS</th>   
<th>MERK</th>  
<th>UKURAN</th>  
<th>WARNA</th> 
<th>HARGA</th> 
<th>OPSI</th> 
</tr> 
<?php
foreach($tas as $t){
    $kd_tas= $t['kd_tas'];
    $merk= $t['merk'];
    $ukuran= $t['ukuran'];
    $warna= $t['warna'];
    $harga= $t['harga'];

 echo" <tr>
 <td>$kd_tas</td>
 <td>$merk</td>
 <td>$ukuran</td>
 <td>$warna</td>
 <td>$harga</td>
 <td>". anchor('http://localhost/frontend/tas/edit/'.$kd_tas,'EDIT' )."
 ".anchor('http://localhost/frontend/tas/delete/'.$kd_tas,'Delete')."
 </td>
 </tr> ";  

}
?>
</table>