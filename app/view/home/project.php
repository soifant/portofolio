
    
    
    <div class="rounded intro p-4 mb-5">
    Saya telah menyelesaikan beberapa project pengemabangan web, saya mengerjakannya mengunakan framework bootstrap dan laravel. Terkadang juga mengunakan bahasa native php, css, js dan html.
     </div>
    
    
    <?php foreach($data['project'] as $p) :?>
    <div class="mb-3 p-1 pt-2 bg-light border rounded border-1">
    
    <div class="row ps-2">
    <div class="col-4">
    <span class="border border-2 border-info rounded px-2" style="color:#0dcaf0;background:#fff;">
    <?= $p['project'] ;?>
    </span>
    <br>
    <small style="color:gray;">1 Day</small>
    </div>
    <div class="col-8">
    <b><?= $p['judul'] ;?></b>
    <br>
    <a href="?url=home/detail/<?= str_replace(' ', '-', trim($p['judul']));?>" >Detail</a>
    </div>
    </div>
    </div>
    
    <?php endforeach ;?>
    
    
    <!--
    <div class="p-1 pt-2 bg-light border rounded border-1">
    
    <div class="row">
    <div class="col-4">
    <span class="border border-2 border-info rounded px-2" style="color:#0dcaf0;background:#fff;">Laravel</span>
    <br>
    <small style="color:gray;" class="p-1">2 Day</small>
    </div>
    <div class="col-8">
    <b>Desain home, dasbord, huma chart dsb</b>
    </div>
    </div>
    </div>-->
    
    
    
    
    
    