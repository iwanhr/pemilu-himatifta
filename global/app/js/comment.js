var ajaxku = buatAjax();
var tnama = 0;
var pesanakhir = 0;
var timer;

function buatAjax(){
	if(window.XMLHttpRequest){
		return new XMLHttpRequest();
	}else if(window.ActiveXObject){
		return new ActiveXObject("Microsoft.XMLHTTP");
	}
}


function ambilPesan(){
	if(ajaxku.readyState == 4 || ajaxku.readyState == 0){
		//ajaxku.open("GET","http://localhost/codeigniter/shoop/api/chat/ambilchat?akhir="+pesanakhir+"&id_prod="+product+"&sid="+Math.random(),true);
		//ajaxku.open("GET","http://shoop.mlopp.com/api/chat/ambilchat?akhir="+pesanakhir+"&id_prod="+product+"&sid="+Math.random(),true);
		ajaxku.open("GET","http://shoop.hubmeup.com/api/chat/ambilchat?akhir="+pesanakhir+"&id_prod="+product+"&sid="+Math.random(),true);
		ajaxku.onreadystatechange = aturAmbilPesan;
		ajaxku.send(null);
	}
}

function ambilPesan1(){
	product = document.getElementById("id_product").value
	if(ajaxku.readyState == 4 || ajaxku.readyState == 0){
		//ajaxku.open("GET","http://localhost/codeigniter/shoop/api/chat/ambilchat?akhir="+pesanakhir+"&id_prod="+product+"&sid="+Math.random(),true);
		//ajaxku.open("GET","http://shoop.mlopp.com/api/chat/ambilchat?akhir="+pesanakhir+"&id_prod="+product+"&sid="+Math.random(),true);
		ajaxku.open("GET","http://shoop.hubmeup.com/api/chat/ambilchat?akhir="+pesanakhir+"&id_prod="+product+"&sid="+Math.random(),true);
		ajaxku.onreadystatechange = aturAmbilPesan1;
		ajaxku.send(null);
	}
}

function loadPesan(){
	link = document.getElementById("link").value
	if(ajaxku.readyState == 4 || ajaxku.readyState == 0){
		//ajaxku.open("POST","http://localhost/codeigniter/shoop/api/chat/loadchat",true);
		//ajaxku.open("POST","http://shoop.mlopp.com/api/chat/loadchat",true);
		ajaxku.open("POST","http://shoop.hubmeup.com/api/chat/loadchat",true);
		ajaxku.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		ajaxku.send("link="+link);
		ajaxku.onreadystatechange = aturAmbilPesan1;
	}
}

function aturAmbilPesan(){
	if(ajaxku.readyState == 4){
		var chat_div = document.getElementById("comment");
		var data = eval("("+ajaxku.responseText+")");
		product = data.messages.id_product;
		for(i=0;i<data.messages.pesan.length;i++){
			//chat_div.innerHTML += "<div class='row-fluid' style='background:#DEEAF5'><img class='span' style='width:50px; height:50px;' src='"+data.messages.pesan[i].avatar+"' /><div class='span6'><p><b><span style='color:#6060ff; font-size:14px;'>"+data.messages.pesan[i].nama+"</span></b></p><p>"+data.messages.pesan[i].teks+"</p><p><span style='color:#888; font-size:9px;'>"+data.messages.pesan[i].date+" ("+data.messages.pesan[i].sebagai+")</span></p></div></div><hr>";
			chat_div.innerHTML += "<section class='c_list'><section class='clearfix'><div class='c_photo_wrap'><img class='c_photo' src='"+data.messages.pesan[i].avatar+"' alt=''></div><section class='c_wrap'><p class='c_comment'><a href=''>"+data.messages.pesan[i].nama+"</a> "+data.messages.pesan[i].teks+"</p><br><span class='grey'>"+data.messages.pesan[i].date+" | "+data.messages.pesan[i].sebagai+"</span></section></section></section>";
			// chat_div.innerHTML += "<div class='avatar'></div>";
			//chat_div.innerHTML += "<div class='name'>"+data.messages.pesan[i].nama+"</div>";
			//chat_div.innerHTML += "<div class='date'>"+data.messages.pesan[i].date+"("+data.messages.pesan[i].sebagai+")</div>";
			//chat_div.innerHTML += "<p>"+data.messages.pesan[i].teks+"</p>";
			chat_div.scrollTop = chat_div.scrollHeight;
			pesanakhir = data.messages.pesan[i].id;
		}
	}
	timer = setTimeout("ambilPesan()",1000);
}
function aturAmbilPesan1(){
	if(ajaxku.readyState == 4){
		var chat_div = document.getElementById("comment");
		var data = eval("("+ajaxku.responseText+")");
		product = data.messages.id_product;
		for(i=0;i<data.messages.pesan.length;i++){
			//chat_div.innerHTML += "<div class='row-fluid' style='background:#DEEAF5'><img class='span' style='width:50px; height:50px;' src='"+data.messages.pesan[i].avatar+"' /><div class='span6'><p><b><span style='color:#6060ff; font-size:14px;'>"+data.messages.pesan[i].nama+"</span></b></p><p>"+data.messages.pesan[i].teks+"</p><p><span style='color:#888; font-size:9px;'>"+data.messages.pesan[i].date+" ("+data.messages.pesan[i].sebagai+")</span></p></div></div><hr>";
			chat_div.innerHTML += "<section class='c_list'><section class='clearfix'><div class='c_photo_wrap'><img class='c_photo' src='"+data.messages.pesan[i].avatar+"' alt=''></div><section class='c_wrap'><p class='c_comment'><a href=''>"+data.messages.pesan[i].nama+"</a> "+data.messages.pesan[i].teks+"</p><br><span class='grey'>"+data.messages.pesan[i].date+" | "+data.messages.pesan[i].sebagai+"</span></section></section></section>";
			// chat_div.innerHTML += "<div class='avatar'></div>";
			//chat_div.innerHTML += "<div class='name'>"+data.messages.pesan[i].nama+"</div>";
			//chat_div.innerHTML += "<div class='date'>"+data.messages.pesan[i].date+"("+data.messages.pesan[i].sebagai+")</div>";
			//chat_div.innerHTML += "<p>"+data.messages.pesan[i].teks+"</p>";
			chat_div.scrollTop = chat_div.scrollHeight;
			pesanakhir = data.messages.pesan[i].id;
		}
	}
	FocusOnInput();
	timer = setTimeout("ambilPesan()",1000);
}

function kirimPesan(){
	pesannya = document.getElementById("pesan").value
	email = document.getElementById("email").value
	namaku = document.getElementById("nama").value
	avatar = document.getElementById("avatar").value
	if(pesannya != "" && document.getElementById("nama").value !=""){
		//ajaxku.open("POST","http://localhost/codeigniter/shoop/api/chat/kirimchat",true);
		//ajaxku.open("POST","http://shoop.mlopp.com/api/chat/kirimchat",true);
		ajaxku.open("POST","http://shoop.hubmeup.com/api/chat/kirimchat",true);
		ajaxku.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		ajaxku.onreadystatechange = aturAmbilPesan1;
		ajaxku.send("nama="+namaku+"&email="+email+"&pesan="+pesannya+"&id_prod="+product+"&avatar="+avatar);
		document.getElementById("pesan").value = "";
	}else{
		alert("Pesan masih kosong");
	}
}


function aturKirimPesan(){
	clearInterval(timer);
	ambilPesan();
}
function blockSubmit() {
	kirimPesan();
	return false;
}

function FocusOnInput() {
	$(document).ready(function(){
		var n = $(document).height();
	$('html, body').animate({ scrollTop: n },'50');
	});
}
