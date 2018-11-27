$(document).ready(function() { 
	cat();
	brand();
	product();

	function cat(){
		$.ajax({
				url   : "action.php",
				method: "POST",
				data   : {category:1},
				success: function (data) {
					$("#get_category").html(data);
				}
			})
	}
	
	function brand(){
		$.ajax({
				url   : "action.php",
				method: "POST",
				data   : {brand:1},
				success: function (data) {
					$("#get_brand").html(data);
				}
			})
	}

	function product(){
				$.ajax({
				url   : "action.php",
				method: "POST",
				data   : {get_mensproduct:1},
				success: function (data) {
					$("#get_mensproduct").html(data);
				}
			})
	}

	$("body").delegate(".category","click",function(event){
		event.preventDefault();
		var cid = $(this).attr('cid');
			$.ajax({
					url: "action.php",
					type: "POST",
					data: {get_selected_category:1, cat_id:cid},
					success: function (data) {
						$("#get_mensproduct").html(data);
					}
				})
		})
	

	$("body").delegate(".selectBrand","click",function(event){
		event.preventDefault();
		var bid = $(this).attr('bid');
			$.ajax({
					url: "action.php",
					type: "POST",
					data: {selectBrand:1, brand_id:bid},
					success: function (data) {
						$("#get_mensproduct").html(data);
					}
				})
		})



//	$("#search_btn").click(function(){
//		var keyword = $("#search").val();
//		if(keyword ! = ""){
//
//			$.ajax({
//					url: "action.php",
//					type: "POST",
//					data: {search:1,keyword:keyword},
//					success: function (data) {
//						$("#get_mensproduct").html(data);
//					}
//				})
//
//		}
//	})





	
})


	


