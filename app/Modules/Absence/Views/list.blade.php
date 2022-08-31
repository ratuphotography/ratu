<style>
    
    .has-search .form-control {
        padding-left: 2.375rem;
    }

    .has-search .form-control-feedback {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .nav-pills .nav-link {
        border: 0;
        border-radius: 0px;
        background-color: silver;
    }

    ul li.list-group-item a{
        text-decoration: none;
    }

    ul li.list-group-item a i {
        position: relative;
        float: right;
    }
</style>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-12">
                <div class="main">
                    <!-- Actual search box -->
                    <div class="form-group has-search">
                        <span class="fa fa-camera form-control-feedback"></span>
                        <input type="text" class="form-control photo" placeholder="Photo" readonly>
                        <input type="file" class="form-control d-none file" data-target="post-review" accept="image/*" capture="user">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="post-review"> 
                    <img src="" class="img-responsive" width="100%" onerror="this.onerror=null;this.src='{{ asset('icon/picture.png') }}';">
                    <br>
                </div>
                 
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
<!-- /.content --> 
<script src="{{ asset('plugins/jquery/jquery.js') }}"></script>
<script>
    $(function(){
        $(document).on("click", "input.photo", function(e){
            $("input.file").click();
        }).on("change", "input.file", function(e){
            console.log($(this))
            $("input.photo").val($(this).val());
        }); 
    });
</script>