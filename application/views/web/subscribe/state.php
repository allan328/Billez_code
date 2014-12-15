<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Billez 業者訂閱狀態更改</title>
<meta http-equiv="Content-Type" content="application/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="<?=$base_css ?>" />
<script type="text/javascript" src="<?=$jquery_js ?>"></script>
<script type="text/javascript" src="<?=$validate_js ?>"></script>
<script type="text/javascript" src="<?=$function_js ?>"></script>
<script type="text/javascript" src="<?=$js_path ?><?=$now_use ?>"></script>
<script type="text/javascript">
var ajax_path = '<?=$index_url ?>';
var class_name = '<?=$class_name ?>';
</script>
</head>
<body>
	<div id="content_div">
		<p class="title_p">業者訂閱狀態更改</p>
		<h4 id="tip_h4" style="color:red">* 號為必填</h4>
		<table cellpadding="10">
			<tr>
				<td>*業者 : </td>	
				<td><select id="trader" class="required"></select></td>
				<td>*帳單種類 : </td>	
				<td><select id="bill_kind" class="required"><option value="">請選擇</option></select></td>	
				<td>*狀態更改 : </td>	
				<td><select id="state" class="required"><option value="">請選擇</option><option value="4">不服務</option></select></td>			
				<td><input id="update_btn" type="button" value="更改" /></td>
			</tr>
		</table>
	</div>
<div id="query_div">
</div>
</body>
</html>