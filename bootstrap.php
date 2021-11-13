<?php
require_once 'model/status/Status.php';
require_once 'model/status/StatusRepository.php';

require_once 'model/orderItem/OrderItem.php';
require_once 'model/orderItem/OrderItemRepository.php';

require_once 'model/order/Order.php';
require_once 'model/order/OrderRepository.php';

require_once 'model/transport/Transport.php';
require_once 'model/transport/TransportRepository.php';

require_once 'model/district/District.php';
require_once 'model/district/DistrictRepository.php';

require_once 'model/ward/Ward.php';
require_once 'model/ward/WardRepository.php';

require_once 'model/province/Province.php';
require_once 'model/province/ProvinceRepository.php';

require_once 'model/cart/Cart.php';
require_once 'model/cart/CartStorage.php';

require_once 'model/imageItem/ImageItem.php';
require_once 'model/imageItem/ImageItemRepository.php';

require_once 'model/brand/Brand.php' ;
require_once 'model/brand/BrandRepository.php';

require_once "model/base/BaseRepository.php";

require_once 'model/product/ProductRepository.php' ;
require_once 'model/product/Product.php' ;

require_once 'model/category/Category.php';
require_once 'model/category/CategoryRepository.php';

require_once "model/customer/Customer.php";
require_once "model/customer/CustomerRepository.php";

require_once 'service/MailService.php';
// require_once 'model/brand/Brand.php' ;
// require_once 'model/brand/Brand.php' ;

//godashop.com
function get_host_name() {
	return $_SERVER['HTTP_HOST'];
}
//http://
function getProtocol() {
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return $protocol;
}

//http://godashop.com
function get_domain(){
	$protocol = getProtocol();
    return $protocol . $_SERVER['HTTP_HOST'];
}
//http://godashop.com/site
function get_domain_site(){
    return get_domain() . "/site";
}
?>

