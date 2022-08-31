

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Daftar RT</h3> 
                <?php 
                if(isset($parent)){
                  $rw = $parent;
                }
                $url = ($rw)?route('rt.create',['rw_id'=> $rw->id]):route('rt.create');
                $ajax_url = ($rw)?route('rt.getListAjax',['rw_id'=> $rw->id]):route('rt.getListAjax');
                ?>
                {!!create(['url'=> $url, 'title'=> 'Tambah RW', 'style'=> "float: right;"]) !!} 
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="rt" class="table table-bordered table-hover display standard" style="width: 100%" data-route="{{$ajax_url}}">
                  <thead>
                  <tr>
                    <th data-name="id">No</th> 
                    <th data-name="name">Nama</th>  
                    <th data-name="rw.name">Nama RW</th> 
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