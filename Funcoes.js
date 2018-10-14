function obterHora(){
	var data = new Date();
//	var dia     = data.getDate();           // 1-31
//	var dia_sem = data.getDay();            // 0-6 (zero=domingo)
//	var mes     = data.getMonth();          // 0-11 (zero=janeiro)
//	var ano2    = data.getYear();           // 2 dígitos
//	var ano4    = data.getFullYear();       // 4 dígitos
	var hora    = data.getHours();          // 0-23
	if(hora < 10){hora = '0' + hora;}
	var minu     = data.getMinutes();        // 0-59
	if(minu < 10){minu = '0' + minu;}
	var seg     = data.getSeconds();        // 0-59
	if(seg < 10){seg = '0' + seg;}
//	var mseg    = data.getMilliseconds();   // 0-999
//	var tz      = data.getTimezoneOffset(); // em minutos

//	var str_data = dia + '/' + (mes+1) + '/' + ano4;
	var str_hora = hora + ':' + minu + ':' + seg;

	document.getElementById("hora").innerHTML = str_hora;
	setTimeout("obterHora()",1000);
}

function zebrar(id, classePar, classeImpar) {
	var tabela = document.getElementById(id);
	var linhas = tabela.getElementsByTagName("tr");
	for (var i = 0; i < linhas.length; i++) {
		if((i%2) == 0)
			linhas[i].className = classePar;
		else
			linhas[i].className = classeImpar;
	}
}
function exibe(id,opcao) {
	document.getElementById(id).style.display = opcao;
}
function validaEmail(campoEmail) {
	// ^[\w!#$%&amp;'*+\/=?^`{|}~-]+(\.[\w!#$%&amp;'*+\/=?^`{|}~-]+)*2@(([\w-]+\.)+[A-Za-z]{2,6}|\[\d{1,3}(\.\d{1,3}){3}\])$
	// ^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$
	// ^[A-Za-z0-9_\-\.]+@[A-Za-z0-9_\-\.]{2,}\.[A-Za-z0-9]{2,}(\.[A-Za-z0-9])?
	// ^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2}
    emailRE = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");
    return emailRE.test(campoEmail);
}