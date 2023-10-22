$(document).ready(function() {
  $("#cnpj").focusout(function(event) {
      event.preventDefault();

      const cnpj = $("#cnpj").val();
      const url = "corretores.php?cnpj=" + cnpj;

      $.ajax({
          url: url,
          type: 'POST',
          dataType: 'json',
          success: function(data) {
            if (data.code === 200 && data.data.length > 0) {
                const corretor = data.data[0];
                $("#nome").val(corretor.nome);
                $("#numero_corretor").val(corretor.numero_corretor);
                $("#produtos").val(corretor.produtos);
                $("#situacao").val(corretor.situacao);
                $("#site").val(corretor.site_receipt ? corretor.site_receipt : "não fornecido");
                
                // Mostrar os campos
                $("#resultado").show();
            } else {
                $("#resultado").hide(); // Esconder os campos se a resposta estiver vazia ou houver um erro
                alert("Erro ao buscar informações da SUSEP ou nenhum resultado encontrado.");
            }
        }
        
      });
  });
});