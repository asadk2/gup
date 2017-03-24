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
  <div class="col-sm-3">
    <canvas id="canvas" height=500 width=400  ></canvas>
  </div>
    <div class="col-sm-offset-2 col-sm-7">
    	<form class="form-horizontal" name="addProductForm" 
      action="/addProduct" method="post" enctype="multipart/form">
    	{{csrf_field()}}
<fieldset>

<!-- Form Name -->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Enter product name</label>  
  <div class="col-md-8">
  <input id="product_name" name="product_name" type="text" placeholder="Enter product name" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_description">product description</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="product_description" name="product_description"></textarea>
  </div>
</div>

<!--Product Category -->
  
<!-- product category -->

<!-- Prepended checkbox -->
<div class="form-group">
  <label class="col-md-4 control-label" for="freeShipping">Free Shipping</label>
  <div class="col-md-8">
    <div class="input-group">
      <span class="input-group-addon">     
          <input type="checkbox" name="product_freeShipping">     
      </span>
      <input id="freeShipping" name="product_shipping_charges" class="form-control" type="number" placeholder="Free Shipping" readonly>
    </div>
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="product_image">product image
  </label>
  <div class="col-md-8">
    <input id="product_image" name="product_image" class="input-file" type="file" >
    

  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="product_text">product text</label>
  <div class="col-md-8">
    <input id="product_text" name="product_text" class="input-file" type="file" >
    

  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="product_background_image">product background image</label>
  <div class="col-md-8">
    <input id="product_background_image" name="product_background_image" class="input-file" type="file" >
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">Text on Image</label>  
  <div class="col-md-8">
<input type="text" id="textForImage" name="product_image_text" placeholder="Text for Image" class="form-control input-md" />
    
  </div>
</div>




    <button id="addText" type="button" class="btn btn-default pull-right">Add Text</button>

  
  
  <button type="button" class="btn btn-default col-sm-offset-1" id="removeObject">Remove object</button>
  

  <button type="button" class="btn btn-default col-sm-offset-1" id="clearCanvas">Clear canvas</button>

</div>

<div class="form-group">
  <div class="col-md-7">
    <input id="submit" name="submit" class="btn btn-primary pull-right" type="submit" style="margin-top: 10px">
  </div>
</div>

<input type="hidden" name="product_image_json" id ="product_image_json"/>


</fieldset>
</div>
</div>
</form>          
@endsection


@section('customScripts')
<script src="/admin/custom/product.js"></script>
<script type="text/javascript"> 
var canvas = new fabric.Canvas('canvas',{

  backgroundColor:"#e5dede"
});
var handleImage = function(e) {
    var reader = new FileReader();
    reader.onload = function (event) { 
        var imgObj = new Image();
        imgObj.src = event.target.result;
        imgObj.onload = function () {
            // start fabricJS stuff
            
            var image = new fabric.Image(imgObj);
            image.set({
                
                padding: 10,
                cornersize: 10
            });
            
            //image.scale(getRandomNum(0.1, 0.25)).setCoords();
            canvas.add(image);
            
            // end fabricJS stuff
        }
        
    }
    reader.readAsDataURL(e.target.files[0]);
}

var product_background_image= document.getElementById('product_background_image');
var product_text = document.getElementById('product_text');
var  product_image = document.getElementById('product_image');


product_background_image.onchange = handleImage
product_text.onchange = handleImage
product_image.onchange = handleImage

$('#clearCanvas').on('click',function(){
  canvas.clear();
canvas.set('backgroundColor',"#e5dede");
canvas.renderAll();
});

$('#addText').on('click',function(){
  var text = $('#textForImage').val()
  if(text == undefined) return;
  
  var imageText = new fabric.Text(text);
  canvas.add(imageText);
});

$('#removeObject').on('click',function(){
   canvas.getActiveObject() && canvas.getActiveObject().remove();

});

$('#submit').on('click', function(e){
  e.preventDefault();
  $("#product_image_json").val(JSON.stringify(canvas));
  $('#clearCanvas').click();

});

</script>

@endsection