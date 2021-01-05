function searchbox(key)
{
	if(key=="open")
	{
		document.getElementById("search_close").style.display="none";
		document.getElementById("search_open").style.display="";
	}
	else
	{
		document.getElementById("search_close").style.display="";
		document.getElementById("search_open").style.display="none";
	}
	
}



function tM(key,symbol)
{
	document.getElementById("tM1").classList.remove("tOn");
	document.getElementById("tM2").classList.remove("tOn");
	document.getElementById("tM3").classList.remove("tOn");
	document.getElementById("tM4").classList.remove("tOn");

	if(key==1)
	{
		document.getElementById("tM1").classList.add("tOn");  //classList.add
		var FIQurl="tabA.html";
	}
	else if(key==2)
	{
		document.getElementById("tM2").classList.add("tOn");
		var FIQurl="tabB.html";
	}
	else if(key==3)
	{
		document.getElementById("tM3").classList.add("tOn");
		var FIQurl="tabC.html";
	}
	else if(key==4)
	{
		document.getElementById("tM4").classList.add("tOn");
		var FIQurl="tabD.html";
	}

	//console.log(FIQurl);

	$.ajax({
		type: "POST",
		url: "./module/"+FIQurl,
		contentType: 'application/x-www-form-urlencoded; charset=utf-8;', 
		dataType: "html",
		timeout : 30000,
		async: false,
		cache : false,
		data: {
				 key1        : ""
				,symbol      : symbol
		},
		success: function(msg) {
			$('#MainContent').empty();
			$('#MainContent').append(msg);
		}
	});
}

function st1_6(key)
{
	if(key =="A")
	{
			document.getElementById("st1_6_tab1").classList.remove("offTab");
			document.getElementById("st1_6_tab2").classList.remove("onTab");
			document.getElementById("st1_6_tab1").classList.add("onTab");
			document.getElementById("st1_6_tab2").classList.add("offTab");
	}
	else
	{
			document.getElementById("st1_6_tab1").classList.remove("onTab");
			document.getElementById("st1_6_tab2").classList.remove("offTab");
			document.getElementById("st1_6_tab1").classList.add("offTab");
			document.getElementById("st1_6_tab2").classList.add("onTab");

	}
	$.ajax({
		type: "POST",
		url: "./module/st1_6_chart.php",
		contentType: 'application/x-www-form-urlencoded; charset=utf-8;', 
		dataType: "html",
		timeout : 30000,
		async: false,
		cache : false,
		data: {
				 key        : key
		},
		success: function(msg) {
			$('#st1_6_chart').empty();
			$('#st1_6_chart').append(msg);
		}
	});

}


function st1_7_chart(pkey,key)
{
	console.log(key);
	$.ajax({
		type: "POST",
		url: "./module/st1_7_chart.php",
		contentType: 'application/x-www-form-urlencoded; charset=utf-8;', 
		dataType: "html",
		timeout : 30000,
		async: false,
		cache : false,
		data: {
				 key        : key
		},
		success: function(msg) {
			$('#st1_7_chart'+pkey).empty();
			$('#st1_7_chart'+pkey).append();
			$('#st1_7_chart'+key).empty();
			$('#st1_7_chart'+key).append(msg);
		}
	});

}