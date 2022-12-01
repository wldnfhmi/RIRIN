<?php
echo form_open_multipart('http://localhost/frontend/tas/create');
?>
<table border='1'>
<tr>
    <td>Kode Tas</td>
    <td><?php echo form_input('kd_tas'); ?></td>
</tr> 
<tr>
    <td>Merk</td>
    <td><?php echo form_input('merk'); ?></td>
</tr>  
<tr>
    <td>Ukuran</td>
    <td><?php echo form_input('ukuran'); ?></td>
</tr>  
<tr>
    <td>Warna</td>
    <td><?php echo form_input('warna'); ?></td>
</tr>   
<tr>
    <td>Harga</td>
    <td><?php echo form_input('harga'); ?></td>
</tr>   
<tr>
    <td colspan="2"><?php echo form_submit('submit','Simpan'); ?>
    <?php echo anchor('http://localhost/frontend/tas','Kembali'); ?>
</td>
</tr>     
</table>
<?php
echo form_close();
?>