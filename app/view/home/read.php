
    
    <?php foreach($data['read'] as $d) :?>
    <div class="mt-5 pb-4 border-bottom border-3">
    <h4>
    <?= $d['judul'] ;?>
    </h4>
    <div class="mb-3" >
    <span class="border rounded px-2 border-2 border-info" style="color:#0dcaf0;" >
    <?= $d['kategori'] ;?>
    </span>
    <span class="mx-2" style="color:gray;">
    <?= $d['date'] ;?>
    </span>
    </div>
    
    <?= $d['kontent'] ;?>
    
    </div>
    <?php endforeach ;?>
    
    
    <?php foreach($data['artikel'] as $d) :?>
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
    <div class="mt-3">
    <a href="?url=home/read/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" >Read Articel</a>
    </div>
    </div>
    
    <?php endforeach ;?>
    
    <div class="row py-2" style="color:gray;">
    <div class="col-6" style="text-align:left;">
    ©2020 Soifant
    </div>
    <div class="col-6" style="text-align:right;">
    Dibuat mengunakan <a href="#" >Bootstrap</a>
    </div>
    </div>
    