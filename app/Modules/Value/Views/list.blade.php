 
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('value.create')}}"><i class="fa fa-plus fa-2x add-value" style="float: right"></i></a>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-md-12">
                <div class="main">
                    <!-- Actual search box -->
                    <div class="form-group has-search">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation" style="width: 50%;">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                            aria-selected="true" style="width: 100%;border-top-left-radius: 5px; border-bottom-left-radius: 5px;">Semua</button>
                    </li>
                    <li class="nav-item" role="presentation" style="width: 50%;">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                            aria-selected="false" style="width: 100%;border-bottom-right-radius: 5px; border-top-right-radius: 5px;">Favorit</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                        tabindex="0">
                        <ul class="list-group"> 
                            <li class="list-group-item">
                                <i class="fas fa-male text-info mx-2"></i>
                                <a href="#">Mawar <i
                                        class="fa fa-angle-right"></i></a> </li>
                            <li class="list-group-item">
                                <i class="fas fa-male text-info mx-2"></i>

                            <a href="#">Melati <i
                                        class="fa fa-angle-right"></i></a> </li>
                            <li class="list-group-item">
                                <i class="fas fa-male text-info mx-2"></i>
                                <a href="#">Dahlia <i
                                        class="fa fa-angle-right"></i></a> </li>
                            <li class="list-group-item">
                                <i class="fas fa-male text-info mx-2"></i>
                                <a href="#">Kenanga <i
                                        class="fa fa-angle-right"></i></a> </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <ul class="list-group"> 
                            <li class="list-group-item"><a href="#">
                                <i class="fas fa-male text-info mx-2"></i>
                                    Nanas 
                                    <i
                                        class="fa fa-angle-right"></i></a> </li>
                            <li class="list-group-item">
                                <i class="fas fa-male text-info mx-2"></i>
                                    <a href="#">Semangka <i
                                        class="fa fa-angle-right"></i></a> </li>
                            <li class="list-group-item">
                                <i class="fas fa-male text-info mx-2"></i>
                                    <a href="#">Jeruk <i
                                        class="fa fa-angle-right"></i></a> </li>
                            <li class="list-group-item">
                                <i class="fas fa-male text-info mx-2"></i>
                                    <a href="#">mangga <i
                                        class="fa fa-angle-right"></i></a> </li>
                        </ul>
                    </div>
                </div> 
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content --> 