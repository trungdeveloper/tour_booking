 
function doViewContentPixel(value, content_ids, cat_str, content_name) {
	if (value == 0)
		return false;
	var _username = document.getElementById('hdhdhdhhdhdhdhdhdhd').value != '' ? 'user' : 'kmudivivu';
	if (_username == "kmudivivu") {
		//console.log('ViewContent'); 
		var customData = {
			content_type: 'tour',
			content_ids: content_ids,
			content_name: content_name,
			content_category: cat_str,
			value: value,
			currency: 'VND'
		};
		//console.log(JSON.stringify(customData));
		fbq('track', 'ViewContent', customData);


	}
}
//function doSearchPixel(content_ids, cat_str, country, city, region) {
//	var _username = document.getElementById('hdhdhdhhdhdhdhdhdhd').value != '' ? 'user' : 'kmudivivu';
//	if (uatMode == 'true' && _username == "kmudivivu") {
//		var storage = LocalStorageManager.getValue('datakey');
//		var adults = storage != null ? storage.FilterRooms.RoomsRequest[0].Adults.value : 2;
//		var childs = storage != null ? storage.FilterRooms.RoomsRequest[0].Child.value : 0;
//		var cki = Static.convertDate(getCookie('di'));
//		var cko = Static.convertDate(getCookie('do'));
//		if (country == undefined || country == '') country = document.getElementById('countryAddress').value;
//		if (city == undefined || city == '') city = document.getElementById('cityAddress').value;
//		if (region == undefined || region == '') region = document.getElementById('regionAddress').value;
//		//content_ids: '["123", "234", "345", "456", "567"]',
//		var customData = { content_type: 'hotel', content_category: cat_str, checkin_date: cki, checkout_date: cko, content_ids: content_ids, city: city, region: region, country: country, num_adults: adults, num_children: childs };
//		//console.log(JSON.stringify(customData));
//		fbq('track', 'Search', customData);
//	}
//}


function doInitiateCheckoutPixel(content_ids, cat_str, value, quantity) {
	if (value == 0)
		return false;
	var _username = document.getElementById('hdhdhdhhdhdhdhdhdhd').value != '' ? 'user' : 'kmudivivu';
	
	if (_username == "kmudivivu") {
		//console.log('InitiateCheckout'); 
		var customData = {
			content_type: 'tour',
			contents: [
				{
					'id': content_ids,
					'quantity': quantity,
					'item_price': value
				}
			],
			content_category: cat_str,
			value: value * quantity,
			currency: 'VND'
		}; 
		//console.log(JSON.stringify(customData));
		fbq('track', 'InitiateCheckout', customData);
	}
}
//function doAddPaymentInfoPixel(value, content_category, content_ids) {
//	var _username = document.getElementById('hdhdhdhhdhdhdhdhdhd').value != '' ? dataLogin.username : 'kmudivivu';
//	if (uatMode == 'true' && _username == "kmudivivu") {
//		console.log('AddPaymentInfo');
//		var customData = { value: value, currency: 'VND', content_category: content_category, content_ids: content_ids };
//		//console.log(JSON.stringify(customData));
//		fbq('track', 'AddPaymentInfo', customData);
//	}
//}
function doPurchasePixel(value, content_ids, cat_str, quantity) {
	if (value == 0)
		return false;
	var _username = document.getElementById('hdhdhdhhdhdhdhdhdhd').value != '' ? 'user' : 'kmudivivu';
	if (_username == "kmudivivu") {
		//console.log('Purchase');  
		var customData = {
			content_type: 'tour',
			contents: [
				{
					'id': content_ids,
					'quantity': quantity,
					'item_price': value
				}
			],
			content_category: cat_str,
			value: value * quantity,
			currency: 'VND'
		};
		//console.log(JSON.stringify(customData));
		fbq('track', 'Purchase', customData);

	}
} 