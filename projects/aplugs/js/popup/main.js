function bclose() {
	$("#popup_vk").bPopup().close();
	return false;
}

function bopen() {
	$('#popup_vk').bPopup();
	return false;
}

// $( document ).ready(function() {
// 	//localStorage.removeItem("vk_popup_modal");

// 	setTimeout(function() {
// 		//if(!localStorage.getItem('vk_popup_modal') || localStorage.getItem('vk_popup_modal') != new Date().getDate()) {
// 			VK.Widgets.Group("vk_groups_popup", {mode: 0, width: "220", height: "400"}, 85339831);
// 			$('#popup_vk').bPopup();	
// 			//localStorage.setItem('vk_popup_modal', new Date().getDate());
// 		//}
// 	}, 1000);
// });

