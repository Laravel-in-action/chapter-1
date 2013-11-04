class Shop extends Eloquent {}

...

$shop = new Shop;

$shop->name = 'Best Coffee Co';
$shop->city = 'Los Angeles';
	
$shop->save();		
