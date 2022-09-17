
    
    
    <?php foreach($data['artikel'] as $d) :?>
    <div class="mb-3 pb-3 border-bottom border-2">
    <h4><a class="black-a" href="?url=home/read/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" >
     <?= $d['judul'] ;?>
    </a>
    </h4>
    
    <div class="mb-3" >
    <span class="border rounded px-2 border-2 border-info" style="color:#0dcaf0;" >Learn</span>
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