<?php

	//網頁傳過來的陣列
	$post = array('id'=>'USAA00001', 'email'=>'dasd@sad', 'name'=>'watson', 'kind'=>'2', 'insert_trader'=>'y');

	//不要的陣列(包含email, name..等等)
	$ignore_array = array();
	
	//功能權限的陣列
	$function_array = array();
	
	//現在要從$post抓出不要的參數
	foreach ($post as $item => $value) {
		//跳過不要的,之後把要的丟進去
		switch ($item) {
			case 'id':
			case 'email':
			case 'name':
			case 'kind':
				break;
			default:
				$function_array[$item] = $value;
				break;
		}
	}

	//結果是Array ( [insert_trader] => y ) 1
echo print_r($function_array);