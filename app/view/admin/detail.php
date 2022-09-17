
<div>
<?php foreach($data['project'] as $p) :?>
<span class="border border-2 border-info rounded px-2" style="color:#0dcaf0;background:#fff;">
  <?= $p['project'] ;?>
  </span> <b class="fs-4 ps-1">
  <?= $p['judul'] ;?>
  </b>
  <?php endforeach ;?>
  <div class="mb-2 mt-4"><u><b>
  Descripsi project</b></u> 
  
  <a href="?url=admin/<?= $data['read'] == FALSE ? 'add/articel/1/'.str_replace(' ', '-', trim($data['project'][0]['judul'])).'' : 'edit/articel/'.str_replace(' ', '-', trim($data['read'][0]['judul'])).'' ;?>">
 <button class="btn btn-secondary py-0"> <?= $data['read'] == NULL ? 'Tambah' : 'Edit' ;?></button>
  </a>
  </div>
  <?php foreach($data['read'] as $dr) :?>
  
  <article>
  <?= $dr['deskripsi'] ;?>
  </article>
  <?php endforeach ;?>
  
  <div class="mb-2 mt-4"><u><b>
  Detail project</b></u>
  <a href="?url=admin/<?= $data['detail'] == NULL ? 'add/detail/'.$data['project'][0]['id'].'/'.str_replace(' ', '-', trim($data['project'][0]['judul'])).'' : 'edit/detail/'.$data['detail'][0]['id_project'].'' ;?>">
  <button class="btn btn-secondary py-0"> <?= $data['detail'] == NULL ? 'Tambah' : 'Edit' ;?></button>
  </a>
  
  </div>
  <?php foreach($data['detail'] as $dp) :?>
  
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
<?= var_dump($data['project'][0]['id']) ;?>
<div class="mb-2 mt-4"><u><b>
  Rincian biaya</b></u>
    <a href="?url=admin/<?= $data['harga'] == NULL ? 'add/harga/'.$data['project'][0]['id'].'/'.str_replace(' ', '-', trim($data['project'][0]['judul'])).'' : 'edit/harga/'.$data['harga'][0]['id_project'].'' ;?>">
  
  <button class="btn btn-secondary py-0"> <?= $data['harga'] == NULL ? 'Tambah' : 'Edit' ;?></button>
  </a>
  
  </div>
  
<?php foreach($data['harga'] as $hp) :?>
  

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