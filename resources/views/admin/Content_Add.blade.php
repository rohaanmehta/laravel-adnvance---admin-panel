@extends('admin.app');
@section('content')
  <!-- summernote -->
  <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2" style='justify-content:center'>
          <div class="col-sm-6">
            <h1>Add Content</h1>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= url('/admin')?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?= url('/content_status')?>">Content Status</a></li>
              <li class="breadcrumb-item active">Add Content</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row" style="justify-content:center;">
        <div class="col-md-11">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Add Content
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form id='contentform'>
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Page Title</label>
                    <input type="text" class="form-control" id="pagetitle" name='pagetitle' placeholder="Enter Page Title" value='<?= isset($result) ? $result->page_title : ''?>'>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <textarea  id="content" name='content'>
                        <?= isset($result) ? $result->page_content : 'Place <em>some</em> <u>text</u> <strong>here</strong>'?>
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="title" name='title' placeholder="Enter Title" value='<?= isset($result) ? $result->title : ''?>'>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" id="desc" name='desc' placeholder="Enter Description" value='<?= isset($result) ? $result->description : ''?>'>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Keywords</label>
                    <input type="text" class="form-control" id="keywords" name='keywords' placeholder="Enter Keywords" value='<?= isset($result) ? $result->keywords : ''?>'>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control select2" id='status' name='status' style="width: 100%;">
                    <option value='ACTIVE' <?php if(isset($result) && $result->status == '1' ){ echo 'selected'; }?>>ACTIVE</option>
                    <option value='INACTIVE' <?php if(isset($result) && $result->status == '0' ){ echo 'selected'; }?> >INACTIVE</option>
                  </select>
                  <input type='hidden' name='autoid' id='autoid' value='<?= isset($result) ? $result->id : ''?>'/>
                </div>
            </div>
          </div>
        </div>
        <button type='submit' class='btn btn-primary col-lg-4 col-md-4 col-xs-12'>SAVE</button>
        </form>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>                                             
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>

<!-- CodeMirror -->
<!-- <script src="../../plugins/codemirror/codemirror.js"></script>
<script src="../../plugins/codemirror/mode/css/css.js"></script>
<script src="../../plugins/codemirror/mode/xml/xml.js"></script>
<script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="../../dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    let summernoteOptions = {
        height: 300
    }
    $('#content').summernote(summernoteOptions)
  })

  $(document).ready(function () {
    $('.select2').select2()
    $('#contentform').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?= url('/contentinsert')?>",
            data: new FormData(this) ,
            cache: false,
            processData: false,
            contentType: false,
            success: function(data) {
                if(data.status == '200'){
                    Toastify({
                        text: "Successfully Inserted",
                        style: {
                            background: 'green',
                        },
                        duration: 2000
                    }).showToast();
                    setTimeout(function() {
                        window.location.href = '<?= url('/content_status') ?>';
                    }, 2000);
                }
            }
        });
    });
  });
</script>
@endsection
