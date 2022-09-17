
    
<div>
<?php foreach($data['project'] as $p) :?>
<span class="border border-2 border-info rounded px-2" style="color:#0dcaf0;background:#fff;">
  <?= $p['project'] ;?>
  </span> <b class="fs-4 ps-1">
  <?= $p['judul'] ;?>
  </b>
  <?php endforeach ;?>
  
  <?php foreach($data['read'] as $dr) :?>
  <div class="mb-2 mt-4"><u><b>
  Descripsi project</b></u>
  </div>
  
  <article>
  <?= $dr['deskripsi'] ;?>
  </article>
  <?php endforeach ;?>
  
  
  <?php foreach($data['detail'] as $dp) :?>
  
  <div class="mb-2 mt-4"><u><b>
  Detail project</b></u>
  </div>
 
<table class="table table-bordered">
 
   <tbody>
    <tr>
   
      <td class="bg-light">Dikerjakan</td>
      <td><?= $dp['start'] ;?></td>
  
    </tr>
    <tr>
   
      <td class="bg-light">Selesai</td>
      <td><?= $dp['end'] ;?></td>
    
    </tr>
    <tr>
   
      <td class="bg-light">Waktu pengerjaan</td>
      <td><?= $dp['full'] ;?></td>
    </tr>
    <tr>
    
    <td class="bg-light">Bahasa kode</td>
    <td><?= $dp['code'] ;?></td>
    </tr>
    <tr>
    
    <td class="bg-light">Frontend</td>
    <td><?= $dp['front'] ;?></td>
    </tr>
    
    <tr>
    
    <td class="bg-light">Backend</td>
    <td><?= $dp['back'] ;?></td>
    </tr>
    
    <tr>
    
    <td class="bg-light">Harga</td>
    <td><?= $dp['price'] ;?></td>
    </tr>
  </tbody>
  
  
</table>
<?php endforeach ;?>

<?php foreach($data['harga'] as $hp) :?>
  
<div class="mb-2 mt-5"><u><b>
  Rincian biaya</b></u>
  </div>
  
<table class="table table-bordered">
  
  <tbody>
    <tr>
   
      <td class="bg-light">Development</td>
      <td><?= $hp['dev'] ?></td>
  
    </tr>
    <tr>
    
    <td class="bg-light">Desain UI</td>
    <td><?= $hp['ui'] ?></td>
    
    </tr>
    <tr>
    
    <tr>
    
    <td class="bg-light">Desain UX</td>
    <td><?= $hp['ux'] ?></td>
    
    </tr>
    <tr>
   
      <td class="bg-light">Domain</td>
      <td><?= $hp['domain'] ?></td>
    
    </tr>
    <tr>
   
      <td class="bg-light">Server</td>
      <td><?= $hp['server'] ?></td>
    </tr>
    <tr>
    
    
    <tr>
    
    <td class="bg-light">Total</td>
    <td><?= $hp['total'] ?></td>
    </tr>
  </tbody>
</table>
<?php endforeach ;?>

<div class="row">
<div class="text-end">
<small><u>Simpan PDF</u></small>
</div>
</div>
</div>

