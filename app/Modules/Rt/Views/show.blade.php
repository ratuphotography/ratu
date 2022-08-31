@extends('layouts.app')

@section('content')
    <div id="container">

        
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{$rt->getTitle()}}</h3>
                {!!create(['url'=> route('people.create', ['rt_id'=> $rt->id]), 'title'=> 'Tambah Jamaah', 'style'=> "float: right;"]) !!}
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="people" class="table table-bordered table-hover display standard" style="width: 100%" data-route="{{ route('people.getListAjax', ['rt_id'=> $rt->id]) }}">
                  <thead>
                  <tr>
                    <th data-name="id">No</th> 
                    <th data-name="full_name">Nama</th>
                    <th data-name="email">Email</th>
                    <th data-name="phone">Telepon</th>
                    <th data-name="mosque">Masjid</th>
                    <th data-name="mushola">Mushola</th>
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
    </div>
@stop
