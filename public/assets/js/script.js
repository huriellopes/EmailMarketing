
$(document).ready(function () {

	$("#textNome").prop("required", true);
	$("#textEmail").prop("required", true);
	$("#textAssunto").prop("required", true);
	$("#textMensagem").prop("required", true);
	$("#inicio").prop("required", true);
	$("#final").prop("required", true);

	// Mascara
	$("#incio").mask('00/00/0000', {reverse: true});
	$("#final").mask('00/00/0000', {reverse: true});

	$("#textEmail").blur(function () {
		email = $("#textEmail").val();
		valida = /^[a-z0-9][a-z0-9\._-]+@([a-z]+.)([a-z]+.)[a-z]{2,3}$/;

		// Verifica se está no padrão do regex
		if (valida.test(email)) {
			$("#textEmail").removeClass('is-invalid');
			$("#textEmail").addClass('is-valid');
			$("#retorno").html("E-Mail Válido");
		} else {
			$("#textEmail").removeClass('is-valid');
			$("#textEmail").addClass('is-invalid');
			$("#retorno").html("E-Mail Inválido");
			$("#textEmail").prop("required", true);
		}
	});

	$('#imprime').on("click",function(){
        var imprime = $('#imprime').val();
        var relatorio = $('#relatorio').val();
    });
});


// Função para retornar o json
$(document).ready(function () {
	$("#submit").on("click", function () {
		var url = "http://localhost:8000/salva";

		$.ajax({
			type: "GET",
			url: url,
			datatype: "JSON",
			contetType: "application/json; charset=utf-8",
			cache: false,
			success: function (retorno) {
				if (retorno) {
					swal('Sucesso','E-Mail Cadastrado com Sucesso!','success',document.location.href="http://localhost:8000/cadastro");
				} else {
					swal('Atenção','Ops... Deu algo errado!','error',document.location.href="http://localhost:8000/cadastro");
				}
			}
		});
	});

	$("#enviaEmail").on("click", function () {
		var url = "http://localhost:8000/envia";

		$.ajax({
			type: "GET",
			url: url,
			datatype: "JSON",
			contetType: "application/json; charset=utf-8",
			cache: false,
			success: function (retorno) {
				if (retorno) {
					swal('Sucesso','Campanha enviada com sucesso!','success',document.location.href="http://localhost:8000/disparos");
				} else {
					swal('Atenção','Ops... Deu algo errado!','error',document.location.href="http://localhost:8000/disparos");
				}
			}
		});
	});
});

$(document).ready(function () {
	$("#emails").DataTable({
		"destroy": true,
        "pageLength": 3,
		"processing": true, //Exibe a informação de que o conteúdo está sendo processado
        "serverSide": false, //Define se a busca e a paginação serão a nivel server-side ou client-side
        "dom": 'Bfrtip',
        "aoColumnDefs": [
           {"bSortable": false, "aTargets": [0]}
        ],
        "aaSorting": [[0, 'asc']],
        "oLanguage": {
            "sProcessing": "Aguarde enquanto os dados são carregados ...",
        	"sZeroRecords": "Nenhum registro correspondente ao criterio encontrado",
            "sInfoEmpty": "Exibindo 0 a 0 de 0 registros",
            "sInfo": "Exibindo de _START_ até _END_ de _TOTAL_ registros",
            "sInfoFiltered": "",
            "sSearch": "Buscar: ",
            "oPaginate": {
                "sFirst": "Início",
                "sPrevious": "Anterior",
                "sNext": "Próximo",
                "sLast": "Último"
            }
        }
	});
});

$(document).ready(function () {
	var today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
	//var today = new Date(new Date().getDate(), new Date().getMonth(), new Date().getFullYear());
	$("#inicio").datepicker({
			format: 'dd/mm/yyyy',
          	clearDates: true,
         	language: 'pt-BR',
          	//weekStart: 0,
          	minDate: 1, 
          	maxDate: "+1M",
          	autoclose: true,
          	todayHighlight: true,
          	showOtherMonths: true,
          	selectOtherMonths: true,
          	datesDisabled: false
    });

   	$("#final").datepicker({
            format: 'dd/mm/yyyy',
          	clearDates: true,
         	language: 'pt-BR',
          	//weekStart: 0,
          	minDate: 1, 
          	maxDate: "+1M",
          	autoclose: true,
          	todayHighlight: true,
          	showOtherMonths: true,
          	selectOtherMonths: true,
          	datesDisabled: false
    });
});