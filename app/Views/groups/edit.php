

      <div class="conatiner-fluid content-inner mt-n5 py-0">
      
       <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Edit Data Groups</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('groups/update/'.$group->id_group) ?>" method="POST">
                    	<?= csrf_field() ?>
                        <div class="form-group">
                            <label class="form-label" for="text">Nama Group : *</label>
                            <input type="text" class="form-control" id="text1" name="name_group" value="<?= $group->name_group; ?>">
                        </div>


                        <div class="form-group">
                            <label class="form-label" for="text">Info : *</label>
                            <textarea class="form-control" name="info_group"><?= $group->info_group; ?></textarea>
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-secondary">cancel</button>
                    </form>
                </div>
            </div>
	    </div>
	      </div>
      
</main>
   
  

