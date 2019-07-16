<! DOCTYPE html>
<html>
<cabeça>
	<title> Exemplo de validação de formulário Php Ajax </ title>
	<script type = "text / javascript" src = "https://code.jquery.com/jquery-1.9.1.min.js" > </ script>  
  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
</ head>
<body>


<div class = "container" > 
  <h1> Exemplo de validação de formulário Php Ajax </ h1>
  <formulário role = "formulário" id = "contactForm" class = "formulário de contato" data-toggle = "validador" class = "shake" >     
    <div class = "alert alerta-perigo erro de exibição" style = " display : none " >  
    </ div>
    <div class = "form-group" > 
      <div class = "controls" > 
        <input type = "text" id = "nome" class = "forma-controle" espaço reservado = "Nome" >    
      </ div>
    </ div>
    <div class = "form-group" > 
      <div class = "controls" > 
        <input type = "email" class = "email formulário-controle" id = "email" placeholder = "Email" >     
      </ div>
    </ div>
    <div class = "form-group" > 
      <div class = "controls" > 
        <input type = "text" id = "msg_subject" class = "forma-controle" espaço reservado = "Assunto" >     
      </ div>
    </ div>
    <div class = "form-group" > 
      <div class = "controls" > 
        <textarea id = "message" rows = "7" espaço reservado = "Massagem" class = "controle de formulário" > </ textarea>    
      </ div>  
    </ div>
    <button type = "submit" id = "enviar" class = "btn btn-sucesso" > <i class = "fa fa-check" > </ i> Enviar Mensagem </ button>    
  </ form>
</ div>


</ body>


<script type = "text / javascript" > 
  $ ( documento ). pronto ( function () { 


      $ ( '#submit' ). clique ( função ( e ) {
        e . preventDefault ();


        nome do var = $ ( "#name" ). val ();
        var email = $ ( "#email" ). val ();
        var msg_subject = $ ( "#msg_subject" ). val ();
        var message = $ ( "#message" ). val ();


        $ . ajax ({
            tipo : "POST" , 
            url : "/formProcess.php" , 
            dataType : "json" , 
            dados : { nome : nome , email : email , msg_subject : msg_subject , mensagem : mensagem }, 
            success : function ( data ) { 
                if ( dados . código == "200" ) {  
                    alert ( "Sucesso:" + dados . msg ); 
                } mais {  
                    $ ( ".display-error" ). html ( "<ul>" + dados . msg + "</ ul>" );
                    $ ( ".display-error" ). css ( "display" , "block" );
                }
            }
        });


      });
  });
</ script>
</ html>
