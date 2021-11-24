# ezoom_front
Ezoom teste front
- link do site hospedado: https://55shop.com.br/ezoom_front/
- Criaçao do layout conforme psd
- Foi utilizado o plugin js swiper para slide
- na pasta _html está todo o site sem utilizaçao do codeigniter
- fiz a aplicação local do json-server, mas devido limitação do servidor que está hospedado nao foi possivel funcionar.
- Utilizei o fetch para obtenção dos dados
- Segue modelo utilizado: 
//Funcionamento somente local
jQuery.ajax({
    type: "GET",
    url: "http://localhost:3000/clients",
    dataType: 'json',
    success: function(res) {
        if (res)
        {
            for(i = 0; i < res.length; i++){
                $("#img_"+i).attr("src", res[i].image);
                $('#img_'+i).attr("alt",res[i].title);
                $('#clt_'+i).attr("href",res[i].link);
            }
        }
    }
  });

  fetch("https://55shop.com.br/ezoom_front/_html/api/db.json")
	.then( (response) => {
		return response.json() })   
			.then( (res) => {
				for(i = 0; i < res["clients"].length; i++){
					$("#img_"+i).attr("src", res["clients"][i].image);
					$('#img_'+i).attr("alt",res["clients"][i].title);
					$('#clt_'+i).attr("href",res["clients"][i].link);
				}

				for(i = 0; i < res["services"].length; i++){
					$('#img_integrado'+i).addClass(res["services"][i].image);
					$('#h5_integrado'+i).html(res["services"][i].title);
					$('#p_integrado'+i).html(res["services"][i].description);
				}
			});