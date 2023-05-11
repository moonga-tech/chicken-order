@extends("layouts.app")
@section("page_title", "Chicken Order | Make Orders")
@section("content")
<div class="container">
    <a href="{{url('/')}}"><button type="button" class="btn btn-primary mr-lg-2 btn-md" style="width: 8em;">Go Back</button></a>
    <div class="order-form shadow">
    <form action="" method="post">
        <h1 class="text-center">Make Orders</h1>
        @csrf
        @method("PUT")
        <label for="full-name">Full Name</label>
        <input type="text" class="form-control" name="customer" placeholder="yourname.........." value="{{$orderEdit->customer}}" required>

        <label for="">Chicken</label><br>
        <select name="chicken" id="chicken" class="form-select">
            <option value="{{$orderEdit->chicken}}">{{$orderEdit->chicken}}</option>
            <option value="broilers">Broilers</option>
            <option value="layers">Layers</option>
            <option value="bomola">Bomola</option>
            <option value="village">Village</option>
        </select>

        <label for="chicken-type">Chicken Type</label><br>
        <select name="type" id="chickenType" class="form-select">
            <option value="{{$orderEdit->type}}">{{$orderEdit->type}}</option>
            <option value="dressed">Dressed</option>
            <option value="undressed">Undressed</option>
            <option value="other">Dressed and Spicy</option>
        </select>

        <label for="costValue">Number of Chickens</label>
        <input value="{{$orderEdit->number}}" type="text" id="costValue" class="form-control" name="number" placeholder="type the number of birds you need..."> 

        <label for="cost">Total Cost</label>
        <input value="{{$orderEdit->cost}}" type="text" id="cost" class="form-control" name="cost"> 

        <label for="resident">Resident</label>
        <input value="{{$orderEdit->location}}" type="text" class="form-control" name="location" placeholder="Your Location"> 

        <label for="orderly-number">Orderly Number | <span class="text-warning">Take it Safe</span></label>
        <input value="{{$orderEdit->orderlyNumber}}" type="text" class="form-control" name="orderlyNumber" readonly>

        <div class="text-center">
            <button type="submit" class="btn btn-outline-success" style="margin: 1em 0; width: 13em;">Update Order</button>
        </div>
    </form>
    </div>
</div>
@endsection