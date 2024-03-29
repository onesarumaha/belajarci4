
        
       
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
                  <h4 class="card-title">Data Kontak</h4>
               </div>
            </div>
            <div class="card-body">
              <a href="<?= base_url('contacts/new') ?>"> <button class="btn btn-primary btn-sm mb-2">Add Kontak</button></a>
              <div class="card-header-action float-right">
                 <a href="<?= base_url('groups/trash') ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Trush</a>
              </div>
                 <div class="card-header"> 
                     <form action="" method="get" autocomplete="off">
                        <div class="float-left">
                           <?php $request = \Config\Services::request(); ?>
                           <input type="text" name="keyword" class="form-control" style="width: 155pt;" placeholder="Keyword Pencarian" value="<?= $request->getGet('keyword'); ?>">
                        </div>
                        <div class="float-right ml-3">
                           <button class="btn btn-primary btn-sm" type="submit">Cari</button>
                        </div>
                     </form>

                  </div>   
               <div class="table-responsive">
                  <table id="basic-table" class="table table-striped mb-0" role="grid">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Name Kontak</th>
                           <th>Alias</th>
                           <th>Phone </th>
                           <th>Email </th>
                           <th>Address </th>
                           <th>Info Kontak </th>
                           <th>Group </th>
                           <th>Option </th>
                           
                        </tr>
                     </thead>
                      <tbody>
                        <?php 
                        $page = isset($_GET['page']) ? $_GET['page'] : 1;
                        $no = 1 + (5 * ($page - 1));
                        foreach($contacts as $key => $value ) : ?>
                        <tr>
                           <td><?= $no++ ?> </td>
                           <td><?= $value->name_contact; ?></td>
                           <td><?= $value->name_alias; ?></td>
                           <td><?= $value->phone; ?></td>
                           <td><?= $value->email; ?></td>
                           <td><?= $value->address; ?></td>
                           <td><?= $value->info_contact; ?></td>
                           <td><?= $value->name_group; ?></td>
                           <td>
                             
                             <form action="<?= base_url('contacts/'.$value->id_contact) ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin mau dihapus ?')">
                                 <?= csrf_field() ?>
                                 <input type="hidden" name="_method" value="DELETE">
                                 <button class="btn btn-danger btn-sm">Hapus</button>
                             </form>
                             <a href="<?= base_url('contacts/'.$value->id_contact.'/edit/') ?>"> <button class="btn btn-warning btn-sm">Edit</button></a>
                           </td>
                           
                        </tr>
                        <?php endforeach; ?>
                     </tbody>
                  </table>
                  <div class="float-left">
                     <i>Showing <?= 1 + (10 * ($page - 1)) ?> to <?= $no-1 ?> of <?= $pager->getTotal() ?> entries</i>
                  </div>
                  <div class="float-right"> 
                     <?= $pager->links('default', 'pagination') ?>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
      </div>
      
</main>
   
  

