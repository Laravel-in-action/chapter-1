class Customer extends Eloquent {}

...

class Shop extends Eloquent {

    public function customers()
    {
        return $this->hasMany('Customer');
    }
}

...

$customer = new Customer(array('name' => 'Prince Caspian'));

$customer = $shop->customers()->save($customer);