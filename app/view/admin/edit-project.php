
  <?php foreach($data['project'] as $d) :?>
    <div class="row input-group">
    <form action="?url=tambah/edit" method="post" >
    <input value="<?= $d['id'] ;?>" type="hidden" name="id" required="required" >
    <input value="<?= $d['judul'] ;?>" class="col-12 mb-1 form-control" name="judul" placeholder="Judul" required="required" >
    <input value="<?= $d['project'] ;?>" class="col-12 mb-1 form-control" name="project" placeholder="Project" required="required" >
    
    <button type="submit"  class="border border-2 btn btn-light col-12">Add</button>
    </form>
    
    </div>
   <?php endforeach ;?>