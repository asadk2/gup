@extends('admin.index')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
        <!-- /.col-lg-12 -->
</div>
    <!-- /.row -->
<div class="row">
    <form name="requestAddForm" action="/addProduct" >
    {{csrf_field()}}
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add new product </button>

    </form>
</div>
          
@endsection