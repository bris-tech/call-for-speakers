$("button").on("click", function() {
	$.post("http://bristech-cfs.herokuapp.com/", $("#call-for-speakers").serialize(), function() {
		$("#submitted").show().delay(2000).hide(500);
	});
});