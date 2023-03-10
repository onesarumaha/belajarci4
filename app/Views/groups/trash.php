
        
       
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
                  <h4 class="card-title">Data Trash Gawe</h4>
               </div>
            </div>
            <div class="card-body">
              <div class="card-header-action float-right">
                 <a href="<?= base_url('groups/restore') ?>" class="btn btn-danger btn-sm">Restore All</a>

                 <form action="<?= site_url('groups/delete2') ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                        <?= csrf_field() ?>
                     <button class="btn btn-danger btn-sm">Hapus All</button>
                 </form>
              </div>
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
                             
                             <form action="<?= base_url('groups/delete2/'.$group->id_group) ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                                 <?= csrf_field() ?>
                                 <button class="btn btn-danger btn-sm">Hapus Permanent</button>
                             </form>
                             <a href="<?= base_url('groups/restore/'.$group->id_group) ?>"> <button class="btn btn-primary btn-sm">Restore</button></a>
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
   
  

