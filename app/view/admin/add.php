
  	<?php if($data['page'] == 'articel') : ?>
    <div class="row">
    
    <h3>Tambah artikel untuk <u><?= str_replace('-', ' ', $data['judul']) ;?></u></h3>
    <form class="mt-3" action="?url=tambah/articel" method="post" >
    <input class="mb-1 form-control" name="judul" value="<?= str_replace('-', ' ', $data['judul']) ;?>" placeholder="Judul" required="required" >
    <input class="mb-1 form-control" name="kategori" placeholder="kategori" required="required" >
    <textarea class="mb-1 form-control" name="deskripsi" placeholder="Deskripsi" required="required" ></textarea>
    <textarea style="height:270px;" class="mb-2 form-control" name="kontent" placeholder="Kontent" required="required" ></textarea>
    
    <button type="submit" class="border border-2 btn btn-light col-12">Add</button>
    </form>
    
    </div>
    
    <?php elseif($data['page'] == 'detail') : ?>
    
    <div class="row">
    <h3>Tambah detail untuk <u><?= str_replace('-', ' ', $data['judul']) ;?></u></h3>
    
    <form class="mt-3" action="?url=tambah/detail" method="post" >
	<input type="hidden" name="id_project" value="<?= $data['id'] ;?>" required="required" >
	<input class="col-12 mb-1 form-control" name="start" placeholder="Dikerjakan" required="required" >
    <input class="col-12 mb-1 form-control" name="end" placeholder="Selesai" required="required" >
    <input class="col-12 mb-1 form-control" name="full" placeholder="Waktu pengerjaan" required="required" >
    <input class="col-12 mb-1 form-control" name="code" placeholder="Bahasa kode" required="required" >
    <input class="col-12 mb-1 form-control" name="front" placeholder="Frontend" required="required" >
    <input class="col-12 mb-1 form-control" name="back" placeholder="Backend" required="required" >
    <input class="col-12 mb-1 form-control" name="price" placeholder="Harga" required="required" >
    
    <button type="submit" class="border border-2 btn btn-light col-12">Add</button>
    </form>
    
    </div>
    
    <?php elseif($data['page'] == 'harga') : ?>
    
    <div class="row">
    <h3>Tambah rincian harga untuk <u><?= str_replace('-', ' ', $data['judul']) ;?></u></h3>
    
    <form class="mt-3" action="?url=tambah/harga" method="post" >
    <input type="hidden" name="id_project" value="<?= $data['id'] ;?>" required="required" >
    <input class="col-12 mb-1 form-control" name="dev" placeholder="Development" required="required" >
    <input class="col-12 mb-1 form-control" name="ui" placeholder="Desain UX" required="required" >
    <input class="col-12 mb-1 form-control" name="ux" placeholder="Desain UI" required="required" >
    <input class="col-12 mb-1 form-control" name="domain" placeholder="Domain" required="required" >
    <input class="col-12 mb-1 form-control" name="server" placeholder="Server" required="required" >
    <input class="col-12 mb-1 form-control" name="total" placeholder="Total" required="required" >
    
    <button type="submit" class="border border-2 btn btn-light col-12">Add</button>
    </form>
    
    </div>
    
    
    <?php elseif($data['page'] == 'project') : ?>
    
    
    <div class="row input-group">
    <form action="?url=tambah/project" method="post" >
    <input class="col-12 mb-1 form-control" name="judul" placeholder="Judul" required="required" >
    <input class="col-12 mb-1 form-control" name="project" placeholder="Project" required="required" >
    
    <button type="submit"  class="border border-2 btn btn-light col-12">Add</button>
    </form>
    
    </div>
    
    
    
    <?php endif;?>
   
    </div>