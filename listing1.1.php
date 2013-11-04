$order = array(‘customer’ => ‘Prince Caspian’, ‘product’ => ‘Laravel in Action’);
Session::put(‘order’,$order);						

...

$orderInDB = Order::create(Session::get(‘order’));

Session::forget('order');						

$ordersForCaspian = Order::where(‘customer’, ‘Prince Caspian’)->get();

...

$ordersQuantity = Order::where(‘product’, ‘Laravel in Action’)->count();
