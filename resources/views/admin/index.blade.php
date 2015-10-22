@extends('_layouts.admin')
@section("content")
<div class="page-content">
    <!-- /section:settings.box -->
    <div class="page-header">
        <h1>
            Dashboard
            <small>
                <i class="ace-icon fa fa-angle-double-right"></i>
                overview &amp; stats
            </small>
        </h1>
    </div><!-- /.page-header -->

    <div class="row">
        <div class="col-xs-12">
            <!-- PAGE CONTENT BEGINS -->
            <div class="alert alert-block alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    <i class="ace-icon fa fa-times"></i>
                </button>

                <i class="ace-icon fa fa-check green"></i>

                Welcome to
                <strong class="green">
                    Ace
                    <small>(v1.3.3)</small>
                </strong>,
                the lightweight, feature-rich and easy to use admin template.
            </div>
            <!-- PAGE CONTENT ENDS -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.page-content -->
@endsection