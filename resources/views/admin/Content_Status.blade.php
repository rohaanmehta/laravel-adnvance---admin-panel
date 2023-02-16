@extends('admin.app');
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row" style='justify-content:center'>
                <div class="col-sm-6">
                    <div class='col mb-2'>
                        <h1>Content Status</h1>
                    </div>
                    <div class='col'>
                        <a href='<?= url('/content')?>' class=''>
                            <button class='btn btn-primary'> Add New Content</button>
                        </a>
                    </div>
                </div>
                <div class="col-sm-5">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= url('/admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active">Content Status</li>
                    </ol>
                </div>
            </div>
            <div class='row mb-2'>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row" style="justify-content:center;">
            <div class="col-md-11">
                <div class="card card-outline">
                    <div class="card-body">
                        <div class="table-responsive-sm">
                            <table class="table table-striped table-bordered" style="width:100%" id='myTable'>
                                <thead>
                                    <tr>
                                        <th scope="col">Page Title</th>
                                        <th scope="col">Page Content</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Keywords</th>
                                        <th scope="col">Status</th>
                                        <th scope="col" width="120">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($result) && !empty($result)){ $i = 0;
                                        foreach($result as $row){?>
                                            <tr>
                                                <td><?= $result[$i]['page_title']?></td>
                                                <td><?= $result[$i]['page_content']?></td>
                                                <td><?= $result[$i]['title']?></td>
                                                <td><?= $result[$i]['description']?></td>
                                                <td><?= $result[$i]['keywords']?></td>
                                                <td><?= $result[$i]['status'] == '1' ?  'ACTIVE' :  'INACTIVE'; ?></td>
                                                <td><div>
                                                        <a href='<?= url('/content_edit/'.$result[$i]['id'])?>' id='<?= $result[$i]['id']?>' class="btn btn-primary">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a style='color:#fff' onclick= 'deleteid(this.id)' id='<?= $result[$i]['id']?>' class="btn btn-danger">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                    <?php $i++;} }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- <script src="<?= url('plugins/jquery/jquery.min.js')?>"></script> -->
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    });

    function deleteid(id) {
        $.ajax({
            url: '<?= url('/delete_content'); ?>/' + id,
            Type: 'GET',
            success: function(data) {
                Toastify({
                    text: "Deleted Succesfully !",
                    style: {
                        background:'green',
                    },
                    duration: 1000
                }).showToast();
                setTimeout(function() {
                    location.href = "<?= url('content_status'); ?>";
                }, 2000);
            }
        });
    }

</script>
@endsection