// I'll take a LG Thin Pepperoni with extra pepperoni's pizza. Light on the sauce.
// or a Monero donation to: 4Ah6e5exEWfNC9fGZV2zga6PGX79M7yX3jYytigs4XHubWfqnoLurHrNwtUp9tVWpdfQ2iZqnEyNA2ckq5iXJthLFvgBcxc
// -- CamTheGeek
getBlockInfo();
setInterval(getBlockInfo, 300000);
function getBlockInfo(){ 
$.ajax({
  type: "GET",
  url: "func.php",
  datatype: "html",
  success: function(results) {
	$("#diff").val($(results).filter('#difficulty').html());
	var preward = $(results).filter('#rewards').html();
	var reward = (preward * 0.000000000001).toFixed(4);
	$("#breward").val(reward);
  	console.log('Information successfully fetched from ChainRadar');
    }
});
}

getCryptStats();
setInterval(getCryptStats, 300000);
function getCryptStats(){
		$.ajaxSetup({cache:false})
			$(document).ready(function () {
				var cryptAPI = "https://api.cryptonator.com/api/full/xmr-usd";
				$.getJSON(cryptAPI, function(xmr) {
					var xmrBase = xmr.ticker.base;
					var xmrPrice1 = xmr.ticker.price;
					var xmrPrice = Math.round(xmrPrice1 * 100) / 100;
					$("#base").html(xmr.ticker.base);
					$("#dollars").val(xmrPrice);
				});

			});

}


getCryptBTCXMR();
setInterval(getCryptBTCXMR, 300000);

function getCryptBTCXMR() {
	$.ajaxSetup({cache:false})
	$(document).ready(function() {
		var btcxmrAPI = "https://api.cryptonator.com/api/full/xmr-btc";
		$.getJSON(btcxmrAPI,function(btc) {
			var btcValue = btc.ticker.markets[5].price;
			$("#btc-value").val(btc.ticker.price);
		});
	});
}

getCryptBTCUSD();
setInterval(getCryptBTCUSD, 300000);

function getCryptBTCUSD() {
	$.ajaxSetup({cache:false})
	$(document).ready(function() {
		var btcusdAPI = "https://api.cryptonator.com/api/full/btc-usd";
		$.getJSON(btcusdAPI,function(btcusd) {
			var btcWorth = btcusd.ticker.price;
			var btcWorth1 = Math.round(btcWorth*100)/100;
			$("#btc-worth").val(btcWorth1);
		});
	});
}