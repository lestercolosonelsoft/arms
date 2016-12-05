<pre>
<?php

class Hello{
	
	public function tang($parameter){
		echo $parameter;
		
	}
	
}

$get = explode('/',$_GET['method']);
$obj = "Hello";
$method_name = "tang";
$parameter = "tangs";
$param2 = "tangs2";

// $parameter[0] = 'tang';
// $parameter[1] = 'tang1';

call_user_func(array($obj, $method_name), $parameter /* , ... */);

?>