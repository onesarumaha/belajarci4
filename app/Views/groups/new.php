

      <div class="conatiner-fluid content-inner mt-n5 py-0">
      
       <div class="row">
        <div class="col-sm-12 col-lg-12">
            <?php $validation = \Config\Services::validation(); ?>

            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Tambah Data Group</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('groups') ?>" method="POST">
                    	<?= csrf_field() ?>
                        <div class="form-group">
                            <label class="form-label" for="text">Nama Group : *</label>
                            <input type="text" class="form-control <?= $validation->hasError('name_group') ? 'is-invalid' : null ?> " id="text1" name="name_group" value="<?= old('name_group') ?>">
                            <div class="invalid-feedback">
                                <?=$validation->getError('name_group'); ?>
                           </div>
                        </div>


                        <div class="form-group">
                            <label class="form-label" for="text">Info Group: *</label>
                            <textarea class="form-control" name="info_group"></textarea>
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-secondary">cancel</button>
                    </form>
                </div>
            </div>
	    </div>
	      </div>
      
</main>
   
  

