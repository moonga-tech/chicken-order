@extends("layouts.app")
@section("page_title", "Chicken Order | Home")
@section("content")
<div class="container">
        <div class="chicken-box">
        <div class="card chicken-card">
            <div class="card-header text-center">
                <h1>Broilers</h1>
            </div>
                <div class="text-center">
                    <img src="assets/images/boiler.png" alt="broiler" srcset="" width="200px" />
                </div>
            <div class="card-body">Broiler chickens are grown for commercial and home consumption.</div>
            <div class="text-center">
                <a href="{{route('order')}}"><button type="button" class="btn btn-dark btn-md" style="width:15rem; margin:1em;">Order</button></a>
            </div>
        </div>
        <div class="card chicken-card">
            <div class="card-header text-center">
                <h1>Layers</h1>
            </div>
                <div class="text-center">
                    <img src="assets/images/layers.png" alt="layers" srcset="" width="200px" />
                </div>
            <div class="card-body">They lay eggs at a high scale for business purpose.</div>
            <div class="text-center">
                <a href="{{route('order')}}"><button type="button" class="btn btn-dark btn-md" style="width:15rem; margin:1em;">Order</button></a>
            </div>
        </div>
        <div class="card chicken-card">
            <div class="card-header text-center">
                <h1>Village</h1>
            </div>
                <div class="text-center">
                    <img src="assets/images/village.jpg" alt="village" srcset="" width="132px" />
                </div>
            <div class="card-body">Most recommended bird for home domestic and easy to keep.</div>
            <div class="text-center">
                <a href="{{route('order')}}"><button type="button" class="btn btn-dark btn-md" style="width:15rem; margin:1em;">Order</button></a>
            </div>
        </div>
        </div>
        <div style="margin:1em auto;" class="text-center">
            <h2 class="text-success" id="order-status">{{session('status')}}</h2>
        </div>

        <p>Edit Your Order within 1 hour click <a href="">here</a></p>
</div>
@endsection