<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/


//$route['news/(:any)'] = "news/view/$1";
//$route['news'] = "news";
//$route['default_controller'] = 'pages/view';
//$route['(:any)'] = 'pages/view/$1';

//$route['default_controller'] = 'cherish/index';
// $route['default_controller'] = 'cherish/car_ex';
/*
$route['cherish/(:any)'] = 'cherish/view/$1';
$route['car_new'] = 'cherish/car_new';					// 중고차 판매 테스트 페이지
$route['car_ex'] = 'cherish/car_ex';
$route['car_old'] = 'cherish/car_old';
$route['car_admin'] = 'admin/car_admin';
$route['car_madmin'] = 'admin/car_madmin';
$route['car_padmin'] = 'admin/car_padmin';
*/

// 
// if($_SERVER['SERVER_NAME'] == 'admin.cardam.co.kr'){
// 	$route['default_controller'] = "admin_r/car_admin";
// }else if($_SERVER['SERVER_NAME'] == 'dhlottery.shop'){
// 	$route['default_controller'] = "lottosatto/lotto";
// }else if($_SERVER['SERVER_NAME'] == 'm.dhlottery.shop'){
// 	$route['default_controller'] = "lottosatto/lotto";
// }else{
// 	$route['default_controller'] = 'cherish/car_allnewm';
// }

$route['default_controller'] = "lottosatto/lotto";

$route['mobile'] = 'cherish/car_allnewm';

$route['car_purchase'] = 'cherish/car_purchase';

$route['car_admin'] = 'admin/car_admin';
$route['car_madmin'] = 'admin/car_madmin';
$route['car_padmin'] = 'admin/car_padmin';
$route['car_myadmin'] = 'admin/car_myadmin';
$route['car_puradmin'] = 'admin/car_puradmin';
$route['car_dsadmin'] = 'admin/car_dsadmin';
$route['car_jadmin'] = 'admin/car_jadmin';

$route['json_car'] = 'json_car/encar';

$route['json_cardam'] = 'json_cardam/set_cs';
$route['get_cs/(:any)'] = 'json_cardam/get_cs_list/$1';
$route['get_rv/(:any)'] = 'json_cardam/get_rv_list/$1';
$route['set_adm_memo/(:any)'] = 'json_cardam/set_adm_memo/$1';

$route['sub_buy'] = 'cherish/sub_buy';
$route['sub_sell'] = 'cherish/sub_sell';
$route['sub_ensure'] = 'cherish/sub_ensure';

$route['sell'] = 'cherish/cardam_sell';
$route['buy'] = 'cherish/cardam_buy';

$route['info'] = 'cherish/cardam_info';

$route['review'] = 'cherish/cardam_review';

$route['cs'] = 'cherish/cardam_customer';
$route['get_num/(:any)'] = 'json_cardam/getCar/$1';


$route['get_card'] = 'json_cardam/getCard_list';
$route['get_lotto'] = 'json_cardam/getLotto';
$route['get_lotto2'] = 'json_cardam/getLotto2';

//$route['get_lotto3'] = 'json_cardam/getLotto3';
//$route['get_lotto4'] = 'json_cardam/getLotto4';
//$route['get_lotto5'] = 'json_cardam/getLotto5';
//$route['get_lotto6'] = 'json_cardam/getLotto6';  // form 
//$route['get_lmyinfo'] = 'json_cardam/getMyInfo'; 


$route['get_lotto3'] = 'lottosatto/getLotto3';
$route['get_lotto4'] = 'lottosatto/getLotto4';
$route['get_lotto5'] = 'lottosatto/getLotto5';
$route['get_lotto6'] = 'lottosatto/getLotto6';  // form 
$route['get_lmyinfo'] = 'lottosatto/getMyInfo';
$route['order_lotto'] = 'lottosatto/orderLotto';
$route['645paper'] = 'lottosatto/paper';

$route['testpaper'] = 'lottosatto/testpaper';


$route['nicepay'] = 'lottosatto/nicepay';


$route['nicePayToDh'] = 'lottosatto/nicePayToDh';

$route['chargeDeposit'] = 'lottosatto/chargeDeposit'; // 충전 금액 수집
$route['payInit'] = 'lottosatto/payInit';   // 동행복권 결제 초기화 통신 후 바로 나이스페이로 리다이렉트

$route['join'] = 'lottosatto/ljoin';

$route['charge_ok'] = 'lottosatto/sample_charge';

$route['main'] = 'lottosatto/index';

$route['lottobuylist'] = 'lottosatto/lottoBuyList';

$route['lotto_buy'] = 'lottosatto/lotto_buy';
$route['lotto_buy_abs'] = 'lottosatto/lotto_buy_abs';

$route['lotto_buy_absence'] = 'lottosatto/absenceRandom';

$route['detailpop'] = 'lottosatto/lottoDetailPop';

$route['testpay'] = 'lottosatto/testpay';





$route['lotto'] = 'cherish/lotto';

//$route['registry'] = 'cherish/registry';
//$route['registry/complete'] = 'cherish/complete';
//$route['biz'] = 'biz/index';
//$route['with'] = 'biz/with';



$route['test/(:any)'] = 'test/view/$1';

// $route['inha/(:any)'] = 'inha/cherish/view/$1';



/* End of file routes.php */
/* Location: ./application/config/routes.php */