<?php
	require_once('helper.php');
// class Hello{
	
// 	public function tang($parameter){
// 		echo $parameter;
		
// 	}
	
// }

	$method = $_GET['method'];
	unset($_GET['method']);
	require_once('routes.php');
	$path = explode('/',$method);

	
	$controller = ($path[0])? $path[0] : 'main';
	$function   = ($path[1])? $path[1] : 'index';
	
	$file = './controller/'.$controller.'.php';

		if(file_exists($file)){
			require_once($file);
		}else{
			$error = 100;
			die('error');
		}

	$file = '';
	$path = '';
	$method = '';



	// foreach($routes as $pattern => $new_path){
	// $pattern = str_replace(':arg', '.+', $pattern);
	// 	if(preg_match('#^' . $pattern . '$#',$get)){
	// 		die('yes');
	// 		break;
	// 	}
	// }


// print_r($routes);
// $get = explode('/',$_GET['method']);
// $obj = "Hello";
// $method_name = "tang";
// $parameter = "tangs";
// $param2 = "tangs2";

// $parameter[0] = 'tang';
// $parameter[1] = 'tang1';

// call_user_func(array($obj, $method_name), $parameter /* , ... */);




?>