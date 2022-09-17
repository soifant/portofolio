
    <div class="row mb-4">
    <a href="?url=admin/add/project" >
    <button class="col-12 btn btn-light border border-2">Add</button>
    </a>
    </div>
    
   <?php foreach($data['project'] as $d) :?>
    
    <div class="mb-2 p-1 pt-2 bg-light border rounded border-1">
    
    <div class="row">
    <div class="col-4">
    <span class="border border-2 border-info rounded px-2" style="color:#0dcaf0;background:#fff;">
    <?= $d['project'] ;?>
    </span>
    
    </div>
    <div class="col-8">
    <b>
    <?= $d['judul'] ;?>
    </b>
    <br>
    <a href="?url=admin/edit/project/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" class="text-decoration-none" >
    <button class="btn btn-warning py-0">Edit</button>
    </a>
    
    <?php if($d['status'] == 'private') :?>
    <a href="?url=tambah/status/<?= $d['id'] ;?>/public">
    <button type="button" class="py-0 btn btn-danger" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '_', trim($d['judul'])) ;?><?= $d['id'] ;?>">
    Private
    </button>
    </a>
    <?php else : ?>
    <a href="?url=tambah/status/<?= $d['id'] ;?>/private">
    <button type="button" class="py-0 btn btn-success" data-bs-toggle="modal" data-bs-target="#<?= str_replace(' ', '_', trim($d['judul'])) ;?><?= $d['id'] ;?>">
    Public
    </button>
    </a>
    <?php endif ;?>
    
    
    <a href="?url=admin/detail/index/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" class="text-decoration-none" >
    <button class="btn btn-secondary py-0">Detail</button>
    </a>
    
    
    </div>
    </div></div>
    
    <?php endforeach ;?>
    
    
    
    
    
    