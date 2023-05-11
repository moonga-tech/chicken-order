<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderChicken;

class OrderChickenController extends Controller
{
    public function orders() {
        $orders = OrderChicken::all();

        return view("page.orders",[
            "orders" => $orders,
        ]);
    }
    public function order() {
        return view('page.order_chicken');
    }
    public function make_order() {
        $order = new OrderChicken;
        $order->customer = request('customer');
        $order->chicken = request('chicken');
        $order->type = request('type');
        $order->number = request('number');
        $order->cost = request('cost');
        $order->location = request('location');
        $order->orderlyNumber = request('orderlyNumber');

        $order->save();

        return redirect("/")->with('status', 'Order Successful');
    }
    public function completeOrder($id) {
        $comOrders = OrderChicken::findOrFail($id);
        $comOrders->delete();
        return redirect()->back();
    }
    public function orderEdit($id) {
        $orderEdit = OrderChicken::find($id);

        return view('page.orders_edit', [
            "orderEdit" => $orderEdit,
        ]);
    }
    public function orderUpdate($id) {
        $orderUpdate = OrderChicken::find($id);
        $orderUpdate->customer = request('customer');
        $orderUpdate->chicken = request('chicken');
        $orderUpdate->type = request('type');
        $orderUpdate->number = request('number');
        $orderUpdate->cost = request('cost');
        $orderUpdate->location = request('location');
        $orderUpdate->orderlyNumber = request('orderlyNumber');
        $orderUpdate->update();

        return redirect("/orders")->with("msg", "Order Updated Successfully");
    }
}
