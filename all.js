$(function(){
    // Executa assim que o botão de salvar for clicado
    $('#informacoes_pessoais').click(function(e){
        
        // Cancela o envio do formulário
        e.preventDefault();

        // Pega os valores dos inputs e coloca nas variáveis
        var nome = $('#nome').val();
        var sobrenome = $('#sobrenome').val();
        var apelido = $('#apelido').val();
        var nascimento = $('#nascimento').val();
        var telefone = $('#telefone').val();
        var cep = $('#cep').val();
        var bairro = $('#bairro').val();
        var cidade = $('#cidade').val();
        var estado = $('#estado').val();
        var tipo = $('#tipo').val();
        var sexo = $('#sexo').val();
        var sobre = $('#sobre').val();
        var link_facebook = $('#link_facebook').val();
        var link_twitter = $('#link_twitter').val();
        var link_instagram = $('#link_instagram').val();
        var perfil_completo = $('#perfil_completo').val();

        // Método post do Jquery
        $.post('salvar_informacoes_pessoais.php', {
            nome:nome,
            sobrenome:sobrenome,
            apelido:apelido,
            nascimento:nascimento,
            telefone:telefone,
            cep:cep,
            bairro:bairro,
            cidade:cidade,
            estado:estado,
            tipo:tipo,
            sexo:sexo,
            sobre:sobre,
            link_facebook:link_facebook,
            link_twitter:link_twitter,
            link_instagram:link_instagram,
            perfil_completo:perfil_completo
        }, function(resposta){
            // Valida a resposta
            if(resposta == 1){
                // Limpa os inputs
                $('input, textarea').val('');
                alert('Mensagem enviada com sucesso.');
            }else {
                alert(resposta);
            }
        });
        
    });
});

$(function(){
    // Executa assim que o botão de salvar for clicado
        $('#postar').click(function(e){
        
        // Cancela o envio do formulário
        e.preventDefault();

        // Pega os valores dos inputs e coloca nas variáveis
        var post_text = $('#post_text').val();
        var post_multimidia = $('#post_multimidia').val();

        // Método post do Jquery
        $.post('salvar_post.php', {
            post_text:post_text,
            post_multimidia:post_multimidia
        }, function(resposta){
            // Valida a resposta
            if(resposta == 1){
                // Limpa os inputs
                $('input, textarea').val('');
                alert('Mensagem enviada com sucesso.');
            }else {
                alert(resposta);
                header("Refresh:0");
            }
        });
        
    });
});