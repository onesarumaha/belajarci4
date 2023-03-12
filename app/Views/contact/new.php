

      <div class="conatiner-fluid content-inner mt-n5 py-0">
      
       <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">Tambah Data Kontak</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('contacts') ?>" method="POST">
                    	<?= csrf_field() ?>
                        <div class="form-group">
                            <label class="form-label" for="text">Group : *</label>
                            <select name="id_group" class="form-control" required> 
                                <option value="" hidden></option>
                                <?php foreach($groups as $gr ) : ?>
                            <option value="<?= $gr->id_group ?>"><?= $gr->name_group ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="text">Nama Kontak : *</label>
                            <input type="text" class="form-control" id="text1" name="name_contact">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="text">Nama Alias : *</label>
                            <input type="text" class="form-control" id="text1" name="name_alias">
                        </div>


                        <div class="form-group">
                            <label class="form-label" for="text">Phone : *</label>
                            <input type="number" class="form-control" id="text1" name="phone">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="text">Email: *</label>
                            <input type="email" class="form-control" id="text1" name="email">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="text">Info Group: *</label>
                            <input type="text" class="form-control" id="text1" name="info_contact">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="text">Address: *</label>
                            <textarea class="form-control" name="address"></textarea>
                        </div>
                        
                       
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-secondary">cancel</button>
                    </form>
                </div>
            </div>
	    </div>
	      </div>
      
</main>
   
  

