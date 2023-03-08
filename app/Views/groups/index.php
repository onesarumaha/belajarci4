
        
       
      <div class="conatiner-fluid content-inner mt-n5 py-0">
      <?php if(session()->getFlashdata('success')) : ?>
            <div class="bd-example">
              <div class="alert alert-solid alert-success rounded-0 alert-dismissible fade show " role="alert">
                  <span> Success !</span>
                  <?= session()->getFlashdata('success'); ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          </div>
      <?php endif; ?>
      <?php if(session()->getFlashdata('error')) : ?>
            <div class="bd-example">
              <div class="alert alert-solid alert-danger rounded-0 alert-dismissible fade show " role="alert">
                  <span> Error !</span>
                  <?= session()->getFlashdata('error'); ?>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
          </div>
      <?php endif; ?>
         <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Data Acara Gawe</h4>
               </div>
            </div>
            <div class="card-body">
              <a href="<?= base_url('groups/new') ?>"> <button class="btn btn-primary btn-sm mb-2">Add New</button></a>
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Name Group</th>
                           <th>Info Group</th>
                           <th>Option</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                        $no = 1;
                        foreach($groups as $group) : ?>
                        <tr>
                           <td><?= $no++; ?> </td>
                           <td><?= $group->name_group; ?></td>
                           <td><?= $group->info_group; ?></td>
                           <td>
                             
                             <form action="<?= base_url('gawe/'.$group->id_group) ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                                 <?= csrf_field() ?>
                                 <input type="hidden" name="_method" value="DELETE">
                                 <button class="btn btn-danger btn-sm">Hapus</button>
                             </form>
                             <a href="<?= base_url('groups/edit/'.$group->id_group) ?>"> <button class="btn btn-warning btn-sm">Edit</button></a>
                           </td>
                           
                        </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
      </div>
      
</main>
   
  

