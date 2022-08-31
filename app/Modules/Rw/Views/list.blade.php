
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar RW</h3> 
                <?php 
                if(isset($parent)){
                  $subdistrict = $parent;
                }
                $url = ($subdistrict)?route('rw.create',['subdistrict_id'=> $subdistrict->id]):route('rw.create');
                $ajax_url = ($subdistrict)?route('rw.getListAjax',['subdistrict_id'=> $subdistrict->id]):route('rw.getListAjax');
                ?>
                {!!create(['url'=> $url, 'title'=> 'Tambah RW', 'style'=> "float: right;"]) !!} 
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="rw" class="table table-bordered table-hover display standard" style="width: 100%" data-route="{{$ajax_url}}">
                  <thead>
                  <tr>
                    <th data-name="id">No</th> 
                    <th data-name="name">Nama</th> 
                    <th data-name="subdistrict.name">Kelurahan</th>   
                    <th data-name="action" nowrap="nowrap">Action</th> 
                  </tr>
                  </thead>
                  <tbody>
                     
                  </tbody> 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content --> 