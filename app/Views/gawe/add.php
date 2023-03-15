

      <div class="conatiner-fluid content-inner mt-n5 py-0">
            <?php $validation = \Config\Services::validation(); ?>
      
       <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Tambah Data Gawe</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('gawe') ?>" method="POST">
                    	<?= csrf_field() ?>
                        <div class="form-group">
                            <label class="form-label" for="text">Nama Gawe : *</label>
                            <input type="text" class="form-control <?= $validation->hasError('name_gawe') ? 'is-invalid' : null ?>" id="text1" name="name_gawe" value="<?= old('name_gawe') ?>">
                             <div class="invalid-feedback">
                                <?=$validation->getError('name_gawe'); ?>
                           </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="text">Tanggal Acara : *</label>
                            <input type="date" class="form-control <?= $validation->hasError('date_gawe') ? 'is-invalid' : null ?>" id="text1" name="date_gawe" value="<?= old('date_gawe') ?>">
                             <div class="invalid-feedback">
                                <?=$validation->getError('date_gawe'); ?>
                           </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="text">Info : *</label>
                            <textarea class="form-control" name="info_gawe"></textarea>
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-secondary">cancel</button>
                    </form>
                </div>
            </div>
	    </div>
	      </div>
      
</main>
   
  

