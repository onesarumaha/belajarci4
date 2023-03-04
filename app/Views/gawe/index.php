

    
        
       
      <div class="conatiner-fluid content-inner mt-n5 py-0">
         <div class="row">
      <div class="col-sm-12">
         <div class="card">
            <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title">Tabel Gawe</h4>
               </div>
            </div>
            <div class="card-body">
            
               <div class="table-responsive">
                  <table id="datatable" class="table table-striped" data-toggle="data-table">
                     <thead>
                        <tr>
                           <th>No</th>
                           <th>Name Gawe</th>
                           <th>Date Gawe</th>
                           <th>Info Gawe</th>
                           <th>Option</th>
                           
                        </tr>
                     </thead>
                     <tbody>
                        <?php 
                        $no = 1;
                        foreach($gawe as $ga) : ?>
                        <tr>
                           <td><?= $no++; ?> </td>
                           <td><?= $ga->name_gawe; ?></td>
                           <td><?= $ga->date_gawe; ?></td>
                           <td><?= $ga->info_gawe; ?></td>
                           <td>
                              <button class="btn btn-danger btn-sm">Hapus</button>
                              <button class="btn btn-warning btn-sm">Edit</button>
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
   
  

