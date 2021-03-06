/**
 * 查詢寄發簡訊失敗紀錄
 */
$(document).ready(function() {
	init();

	$("#search_btn").click(function() {
		search_page_num(1);
	});
});

//初始化
function init() {
	//將寄發簡訊事件初始化
	select_ajax(ajax_path + 'common/init_sms_event', 'event', '');
	
	//將寄發簡訊時間初始化
	select_ajax(ajax_path + 'common/init_sms_time', 'time', '');
}

//查詢其他頁面
function search_page_num(page) {
	search_ajax(ajax_path + class_name + '/search_sms', new Array("id", "event", "mobile_phone", "time"), 'query_div', page)
}