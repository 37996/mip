<? php


$ errorMSG = "" ; 


/ * NAME * /
if ( empty ( $ _POST [ "nome" ]))) {  
    $ errorMSG = "<li> O nome é obrigatório </ <li>" ; 
} mais {  
    $ name = $ _POST [ "nome" ];
}


/* O EMAIL */
if ( empty ( $ _POST [ "email" ])) {  
    $ errorMSG . = "<li> E-mail é necessário </ li>" ; 
} else if (! filter_var ( $ _POST [ "email" ], FILTER_VALIDATE_EMAIL )) {   
    $ errorMSG . = "<li> Formato de email inválido </ li>" ; 
} mais { 
    $ email = $ _POST [ "email" ];
}


/ * MSG SUBJECT * /
if ( empty ( $ _POST [ "msg_subject" ])) {  
    $ errorMSG . = "<li> Assunto é obrigatório </ li>" ; 
} mais {  
    $ msg_subject = $ _POST [ "msg_subject" ];
}


/* MENSAGEM */
if ( empty ( $ _POST [ "mensagem" ])) {  
    $ errorMSG . = "<li> A mensagem é necessária </ li>" ; 
} mais {  
    $ message = $ _POST [ "message" ];
}


if ( vazio ( $ errorMSG )) {
	$ msg = "Nome:" . $ name . ", Email:" . $ email . "Assunto:" . $ msg_subject . ", Mensagem:" . $ message ; 
	echo json_encode ([ 'código' => 200 , 'msg' => $ msg ]); 
	saída ;
}


echo json_encode ([ 'code' => 404 , 'msg' => $ errorMSG ]); 


?>
