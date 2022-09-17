
    
    <div class="row">
    <a href="?url=admin/add/articel" class="btn btn-light border border-2" >
    Add
    </a>
    </div>
    
    <?php foreach($data['artikel'] as $d) : ?>
    <div class="mt-4 pb-3 border-bottom border-3">
    <h4>
    <a class="black-a" href="?url=home/read/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" >
    <?= $d['judul'] ;?>
    </a>
    </h4>
    <div class="mb-3" >
    <span class="border rounded px-2 border-2 border-info" style="color:#0dcaf0;" >
    <?= $d['kategori'] ;?>
    </span>
    <span class="mx-2" style="color:gray;">
    <?= $d['date'] ;?>
    </span>
    </div>
    
    <?= $d['deskripsi'] ;?>
    
    <div class="mt-3 mb-3">
    <a href="?url=home/read/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" >Read Articel</a>
    </div>
    <a href="?url=admin/edit/articel/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" class="text-decoration-none" >
    <button class="btn btn-warning py-0">Edit</button>
    </a>
    
    <?php if($d['status'] == 'public') : ;?>
    <button type="button" class="py-0 btn btn-success" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '_', trim($d['judul'])) ;?><?= $d['id'] ;?>">
    Public
    </button>
    <?php else :?>
    <button type="button" class="py-0 btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '_', trim($d['judul'])) ;?><?= $d['id'] ;?>">
    Private
    </button>
    <?php endif;?>
  
    <div class="modal fade" id="<?= str_replace(' ', '_', trim($d['judul'])) ;?><?= $d['id'] ;?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="staticBackdropLabel">Status <?= $d['status'] ;?></h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
    Apakah anda yakin ingin mem<?= $d['status'] == 'public' ? 'private' : 'public' ;?> <b><?= $d['judul'] ;?></b>.
    </div>
    <div class="modal-footer">
    <a href="?url=tambah/statusArticel/<?= $d['id'] ;?>/<?= $d['status'] == 'public' ? 'private' : 'public' ;?>" >
    <button type="button" class="btn btn-danger">Ya</button>
    </a>
    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tidak</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    
    <?php endforeach ;?>
    
  