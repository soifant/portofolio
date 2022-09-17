
    
    
    <div class="rounded intro p-4">
    <h2>Hai, Saya Soifant</h2>
    <br>
    Saya seorang web development, saat ini saya bekerja sebagai freelancer.
    Di waktu luang saya memanfaatkanya untuk belajar skill baru dan membuat projek saya sendiri, saat ini saya sedang belajar Laravel. 
    Biasanya saya mengunakan PHP dan Bootstrap untuk mengembangkan website.
    </div>
    
    
    <div class="mt-5 border-bottom border-4">
    <h3>My Articel</h3>
    
    
    </div>
    
    <?php foreach($data['artikel'] as $d) :?>
    <div class="mt-4 pb-3 border-bottom border-3">
    <h4>
    <a class="black-a" href="?url=home/read/<?= str_replace(' ', '-', trim($d['judul'])) ;?>" >
     <u>
     <?= $d['judul'] ;?>
     </u>
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
    
    
    
    
 
   
    
    