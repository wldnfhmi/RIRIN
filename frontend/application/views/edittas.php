<?php
echo form_open('http://localhost/frontend/tas/edit/');
?>
<table border='1'>
<tr>
    <td>Kode Tas</td>
    <td><?php echo form_input('kd_tas',$tas['kd_tas'],"readonly"); ?></td>
</tr> 
<tr>
    <td>Merk</td>
    <td><?php echo form_input('merk',$tas['merk']); ?></td>
</tr>  
<tr>
    <td>Ukuran</td>
    <td><?php echo form_input('ukuran',$tas['ukuran']); ?></td>
</tr>  
<tr>
    <td>Warna</td>
    <td><?php echo form_input('warna',$tas['warna']); ?></td>
</tr>   
<tr>
    <td>Harga</td>
    <td><?php echo form_input('harga',$tas['harga']); ?></td>
</tr>   
<tr>
    <td colspan="2"><?php echo form_submit('submit','Update'); ?>
    <?php echo anchor('http://localhost/frontend/tas','Kembali'); ?>
</td>
</tr>     
</table>
<?php
echo form_close();
?>