@extends("layouts.app")
@section("page_title", "Chicken Order | Orders")
@section("content")
<div class="container">
    <div class="text-center" style="margin:0 0 1em 0;">
        <h1>Daily Orders</h1>
    </div>
    <div class="text-center">
        @if(session("msg"))
            <h4 class="alert alert-success">{{session("msg")}}</h4>
        @endif
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Customer Name</th>
                <th scope="col">Chicken</th>
                <th scope="col">Kind</th>
                <th scope="col">Quantity ##</th>
                <th scope="col">Price</th>
                <th scope="col">Residence</th>
                <th scope="col">Orderly Number</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->customer}}</td>
            <td>{{$order->chicken}}</td>
            <td>{{$order->type}}</td>
            <td>{{$order->number}}</td>
            <td>{{$order->cost}}</td>
            <td>{{$order->location}}</td>
            <td>{{$order->orderlyNumber}}</td>
            <td>
                <a href="/order/chicken/{{$order->id}}" class="text-decoration-none">
                    <button type="button"  class="btn btn-outline-primary btn-sm mr-2">Edit</button>
                </a>
                <form action="/orders/{{$order->id}}" method="post" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="completeOrder()" class="btn btn-sm btn-outline-success mr-2">Complete Order</button>
                </form>
            </td>
        </tr>        
        @endforeach
        </tbody>
    </table>   
</div>
<script>

function completeOrder(e) {
    swal({
        title: "Order Completed",
        text: "You have completed the order, Thank You!",
        icon: "success",
        /* button: "Close", */
    })
}
</script>
@endsection