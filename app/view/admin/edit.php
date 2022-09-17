<?php 

if($data['page'] == 'articel') : ?>
    <div class="row">
    
    <?php foreach($data['articel'] as $d) :?>
    
    <h3>Edit artikel <u><?= $d['judul'] ;?></u></h3>
    <form class="mt-3" action="?url=tambah/editArticel" method="post" >
    <input type="hidden" name="id" value="<?= $d['id'] ;?>" required="required" >
    <input class="mb-1 form-control" name="judul" value="<?= $d['judul'] ;?>" placeholder="Judul" required="required" >
    <input class="mb-1 form-control" name="kategori" value="<?= $d['kategori'] ;?>" placeholder="kategori" required="required" >
    <textarea class="mb-1 form-control" name="deskripsi" placeholder="Deskripsi" required="required" ><?= $d['deskripsi'] ;?></textarea>
    <textarea style="height:270px;" class="mb-2 form-control" name="kontent" placeholder="Kontent" required="required" ><?= $d['kontent'] ;?></textarea>
    
    <button type="submit" class="border border-2 btn btn-light col-12">Edit</button>
    </form>
    
    <?php endforeach ;?>
    </div>
    
    
    <?php elseif($data['page'] == 'project') : ?>
    <?php foreach($data['project'] as $d) :?>
    <div class="row">
    <h3>Edit project <u><?= $d['judul'] ;?></u></h3>
    
    <form class="mt-3" action="?url=tambah/editProject" method="post" >
	<input type="hidden" name="id" value="<?= $d['id'] ;?>" required="required" >
	<input value="<?= $d['judul'] ;?>" class="col-12 mb-1 form-control" name="judul" placeholder="Judul" required="required" >
    <input value="<?= $d['project'] ;?>" class="col-12 mb-1 form-control" name="project" placeholder="Project" required="required" >    
    <button type="submit" class="border border-2 btn btn-light col-12">Edit</button>
    </form>
    
    </div>
    <?php endforeach ;?>
    
    <?php elseif($data['page'] == 'harga') : ?>
    <?php foreach($data['harga'] as $d) :?>
    <div class="row">
    
    <form class="mt-3" action="?url=tambah/editHarga" method="post" >
    <input type="hidden" name="id_project" value="<?= $d['id_project'] ;?>" required="required" >
    <input class="col-12 mb-1 form-control" value="<?= $d['dev'] ;?>" name="dev" placeholder="Development" required="required" >
    <input class="col-12 mb-1 form-control" value="<?= $d['ui'] ;?>" name="ui" placeholder="Desain UX" required="required" >
    <input class="col-12 mb-1 form-control" value="<?= $d['ux'] ;?>" name="ux" placeholder="Desain UI" required="required" >
    <input class="col-12 mb-1 form-control" value="<?= $d['domain'] ;?>" name="domain" placeholder="Domain" required="required" >
    <input class="col-12 mb-1 form-control" value="<?= $d['server'] ;?>" name="server" placeholder="Server" required="required" >
    <input class="col-12 mb-1 form-control" value="<?= $d['total'] ;?>" name="total" placeholder="Total" required="required" >
    
    <button class="border border-2 btn btn-light col-12">Edit</button>
    </form>
    
    </div>
    <?php endforeach ;?>
   
   	
   	<?php elseif($data['page'] == 'detail') : ?>
   	<?php foreach($data['detail'] as $d) :?>
   	<div class="row">
   	
   	<form class="mt-3" action="?url=tambah/editDetail" method="post" >
   	<input type="hidden" name="id_project" value="<?= $d['id_project'] ;?>" required="required" >
   	<input class="col-12 mb-1 form-control" value="<?= $d['start'] ;?>" name="start" placeholder="Development" required="required" >
   	<input class="col-12 mb-1 form-control" value="<?= $d['end'] ;?>" name="end" placeholder="Desain UX" required="required" >
   	<input class="col-12 mb-1 form-control" value="<?= $d['full'] ;?>" name="full" placeholder="Desain UI" required="required" >
   	<input class="col-12 mb-1 form-control" value="<?= $d['code'] ;?>" name="code" placeholder="Domain" required="required" >
   	<input class="col-12 mb-1 form-control" value="<?= $d['front'] ;?>" name="front" placeholder="Server" required="required" >
   	<input class="col-12 mb-1 form-control" value="<?= $d['back'] ;?>" name="back" placeholder="Total" required="required" >
   	<input class="col-12 mb-1 form-control" value="<?= $d['price'] ;?>" name="price" placeholder="Total" required="required" >
   	
   	<button class="border border-2 btn btn-light col-12">Edit</button>
   	</form>
   	
   	</div>
   	<?php endforeach ;?>
   
   
    <?php endif;?>
   
    </div>
    