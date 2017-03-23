@extends('admin.index')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Add Product</h1>
    </div>
        <!-- /.col-lg-12 -->
</div>
    <!-- /.row -->
<div class="row">
    <form name="addProductForm" action="/addProduct" method="post">
    {{csrf_field()}}
    	<input type="text" name="">
    </form>
</div>
          
@endsection