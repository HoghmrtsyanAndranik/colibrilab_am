$(document).ready(function () {
	var arr = ['a10.jpg', 'b10.jpg', 'c10.jpg', 'd10.jpg','a9.jpg', 'b9.jpg', 'c9.jpg', 'd9.jpg'];
	var count=0;
	arr.forEach(function(img) {
		var empty = $("td:empty");
		var i, j;

		do {
			i = Math.floor(Math.random() * empty.length);
			j = Math.floor(Math.random() * empty.length);
		} while(i == j);
	
		empty.eq(i).html("<img src='" + img + "'>");
		empty.eq(j).html("<img src='" + img + "'>");
	});

	var choosed = false;
	var choosedElement;
	var i = 0;

	$("td").click(function() {
		count++
		$(this).find("img").css("visibility", "visible");

		if(choosed == false) {
			choosed = true;
			choosedElement = $(this);
			$("td:not(.a)>img").css("visibility", "hidden");
			$(this).find("img").css("visibility", "visible");
		} else {
			if(choosedElement[0] == this) {
				return;
			}

			if(choosedElement.find("img").attr("src") == $(this).find("img").attr("src")) {
				i++;
				$(this).hide();
				choosedElement.hide();
				if(i == arr.length) {
					alert(`Win / qayleri qanaky:+${count/2}`);
					
				}
			} else {
				let k = choosedElement;
				setTimeout(() => {
					$(this).find("img").css("visibility", "hidden");
					k.find("img").css("visibility", "hidden");
				}, 500);
			}
			choosed = false;
		}
	});
});


