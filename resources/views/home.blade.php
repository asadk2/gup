@extends('partials.layout')

@section('content')
<div class="container">
    <div class="row">   
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img class="d-block img-fluid" src="slider.jpg" alt="First slide" width="100%" height="500"     >
                </div>
            </div>
        </div>
    </div>
  </div>
<div class="container" >
    <div class="row" >
        <div class="col-sm-3">
            <div class="list-group">
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Fridge Magnets</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Stickers</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Decals</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Posters</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Calender</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Envelopes</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Labels</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Tags</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Wrapping paper</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Vinyl Lettering</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Cling Stickers</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Cards</a>
            <a href="#" button type="button" class="list-group-item " data-toggle="collapse">Cards</a>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-3">
                <a href="#">
                <img src="slider.jpg" width="200" height="100" style="margin-top:5px; min-height:300px" class="img-responsive pull-right"></a>      
                <a href="#">
                <img src="slider.jpg" width="200" height="100" style="margin-top:5px; min-height:200px" class="img-responsive pull-right"></a>
                </div>  
                <div class="col-sm-3" style="min-height: 200px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin-top:5px; min-height:500px" class="img-responsive pull-right"></a>
                </div>
                <div class="col-sm-3">
                <a href="#">
                <img src="slider.jpg" width="200" height="100   " style="margin-top:5px; min-height:200px" class="img-responsive pull-left"></a>
                <a href="#">
                <img src="slider.jpg" width="200" height="100" style="margin-top:5px; min-height:300px" class="img-responsive pull-left"></a>
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="productheading">
    <div class="container">
        <div class="row">
        <div style="border-bottom: 3px solid pink;color:pink; font-size: 25px"><h1> Top Category </h1>
        <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>stickers</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>cards</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>birthday</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>school</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>wedding</figcaption>
            </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div style="border-bottom: 3px solid lightblue;color:lightblue; font-size: 25px"><h1> Top Products </h1>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>brand stickers</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>foodlabels</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>magnet</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>tag</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>wallpapers</figcaption>
            </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
        <div style="border-bottom: 3px solid yellow;color:orange; font-size: 25px"><h1> Featured </h1>
        <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>decals</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>foodlabels</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>logostickers</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>magnet</figcaption>
            </div>
            <div class="col-sm-2" style="margin-right: 30px">
                <a href="#">
                <img src="slider.jpg" width="200" height="200" style="margin:5px" ></a> 
                <figcaption>winelabels</figcaption>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-3">
        <div class="card " style="width: 20rem;">
            <a href="#">
            <img class="card-img-top" src="slider.jpg" height="150" width="150" alt="Card image cap"></a>
            <div class="card-block">
                <h4 class="card-title">BABYSHOWER</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>  
        </div>
        </div>
        <div class="col-sm-3">  
            <div class="card" style="width: 20rem;">
            <a href="#">
            <img class="card-img-top" src="slider.jpg" height="150" width="150" alt="Card image cap"></a>
            <div class="card-block">
                <h4 class="card-title">BIRTHDAYS</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            </div>
            </div>  
            <div class="col-sm-3">
            <div class="card" style="width: 20rem;">
            <a href="#">
            <img class="card-img-top" src="slider.jpg" height="150" width="150" alt="Card image cap"></a>
            <div class="card-block">
                <h4 class="card-title">BOTTLE LABELS</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>  
            </div>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 20rem;">
            <a href="#">
            <img class="card-img-top" src="slider.jpg" height="150" width="150" alt="Card image cap"></a>
            <div class="card-block">
                <h4 class="card-title">DECALS</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>  
            </div>
            </div>
        </div>
    </div>
</div>


@endsection