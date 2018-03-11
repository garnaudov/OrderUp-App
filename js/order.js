var productFinalPrice = 0;
var nameAndDescConcatenated = "";
var healthyOrder = ["Салата Витаминка - 4.50лв", "Овчарска салата - 5.50лв", "Шопска салата - 6.50лв", "Салата Капрезе - 3.99лв"];
var popupValue;
var oderOrder;
var hidden;
(function(){
	$(".product").click(function(event) {
		var dishId = $(".product").attr("id");
		var product = this.value;
		var hiddenDesc;
		var hideData = localStorage.getItem("hiddenData");
		console.log("hideData", hideData);
		popupValue = product;
		var re = /\s*;\s*/;
		var productId = this.id;
		var productList = product.split(re);
		var productName = productList[0];
		var productDescription = productList[1];
		var productPrice = productList[2];
		var productPriceInt = parseFloat(productPrice);
		hiddenDesc = productName.concat(" - " + productDescription + "; "); 
		if (hideData && hideData.length > 0) {
			hidden = hideData.concat(hiddenDesc);
		} else {
			hidden = hiddenDesc;
		}
		makeNameAndDesc(hidden);
		if ($(".burger").hasClass("product") || $(".pizza").hasClass("product")) {
			console.log("if");
			$(".healthy-hOne").css("display", "inherit");
			$(".healthy-hTwo").css("display", "inherit");
			$(".healthyInput").css("display", "inherit");
			$(".healthyInputTwo").css("display", "inline");
			
		} else {
			console.log("else");
			$(".healthy-hOne").css("display", "none");
			$(".healthy-hTwo").css("display", "none");
			$(".healthyInput").css("display", "none");
			$(".healthyInputTwo").css("display", "none");
		}
		var tableRowDynamic = "<tr><td class='title'><span class='name' data-toggle='modal'>" + productName + "</span><span class='caption text-muted'>" + productDescription + "</span></td><td class='price'>" + productPrice + " лв" + "</td></tr>";
		var cartTable = $('#cartTable > tbody:last-child').append(tableRowDynamic);
		var tBodyAsHtml = $(".table-body").html();
		localStorage.setItem("orderRow", tBodyAsHtml);
		calculatePrice(productPriceInt);
		showPopUp();
	});

	$(".move-order").click(function () {
		var difOrder;
		$(".popup-container").css("display", "none");
		$(".healthy-popup").css("display", "none");
		if($('#radioBtn').is(':checked')) { 
			difOrder = oderOrder;
		} else {
			difOrder = "няма допълнителна поръчка";
		}
		localStorage.setItem("oderOrder", oderOrder);
		$(".oder-order").text(difOrder);
	});

	$(".move-order-second").click(function () {
		$(".popup-container").css("display", "none");
		$(".healthy-popup").css("display", "none");
	});

	showPopUp = function () {
		$(".popup-container").css("display", "inherit");
		$(".healthy-popup").css("display", "inherit");
		var randomSalad = healthyOrder[Math.floor(Math.random() * healthyOrder.length)];
		var re = /\s*;\s*/;
		var productId = this.id;
		var productList = popupValue.split(re);
		var productName = productList[0];
		var productDescription = productList[1];
		oderOrder = randomSalad;
		$(".random-food").text(randomSalad);
		$(".ordered-food").text(productName + ": " + productDescription);
	}

	window.onload = function() {
		var storagePrice = localStorage.getItem("finalPrice");
		var orderRowInfo = localStorage.getItem("orderRow");
		var hiddenData = localStorage.getItem("hiddenData");
		console.log("hiddenData", hiddenData);
		if (storagePrice.length === 0 || storagePrice === null || storagePrice === undefined) {
			storagePrice = "0.00"
		}
		if ( orderRowInfo && orderRowInfo.length > 0) {
			$('#cartTable > tbody').html(orderRowInfo);
		} else {
			$('#cartTable > tbody').html("<tr></tr>");
		}
		if (localStorage.getItem("oderOrder") && localStorage.getItem("oderOrder").length > 0) {
			$(".oder-order").text(localStorage.getItem("oderOrder"));
		} else {
			$(".oder-order").text("Няма допълнителна поръчка");
		}
		if (hiddenData && hiddenData.length > 0) {
			$(".hide-description").val(hiddenData);
		} else {
			$(".hide-description").val("");
		}
		$(".hide-price").val(storagePrice);
	 	$(".product-final-price").text(storagePrice + " лв");
	}

	$(".send-order").click(function(event) {
		localStorage.setItem("finalPrice", "");
		localStorage.setItem("orderRow", "");
		localStorage.setItem("oderOrder", "");
		localStorage.setItem("hiddenData", "");
		$(".product-final-price").text("0.00 лв");
		$(".oder-order").text("");
		$('#cartTable > tbody:last-child').html("<tr><td class='title'><span class='name' data-toggle='modal'></span><span class='caption text-muted'></span></td><td class='price'></td></tr>");
	});

	function makeNameAndDesc (string) {
		console.log("string");
		var finalNameAndDescConcatenated,
			splitedNameAndDescConcatenated;
		nameAndDescConcatenated = nameAndDescConcatenated.concat(string);
		finalNameAndDescConcatenated = nameAndDescConcatenated;
		console.log("finalNameAndDescConcatenated", finalNameAndDescConcatenated);
		$(".hide-description").val(finalNameAndDescConcatenated);
		localStorage.setItem("hiddenData", finalNameAndDescConcatenated);
	} 

	function calculatePrice (productPrice) {
		var finalPrice;
		var price = localStorage.getItem("finalPrice");
		if (price && price.length > 0) {
			productFinalPrice = parseFloat(price) + productPrice;
			finalPrice = productFinalPrice.toFixed(2);
		} else {
			productFinalPrice = productFinalPrice + productPrice;
			finalPrice = productFinalPrice.toFixed(2);
		}
		localStorage.setItem("finalPrice", finalPrice);
		$(".hide-price").val(finalPrice);
		$(".product-final-price").text(finalPrice + " лв");
	}
})();