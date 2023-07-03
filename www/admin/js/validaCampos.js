/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

    function validaCampo(){
        if(document.getElementById('cad_visitante').getElementsByTagName('nome').value == ""){
                  document.getElementById('nome').focus();
                  document.getElementById( 'span_msg' ).innerHTML = "&nbsp;Informe o nome do visitante";
                  return false;
        }
        if(document.getElementById('cad_visitante').getElementById('cpf').value == ""){
                  document.getElementById('cpf').focus();
                  document.getElementById( 'span_msg' ).innerHTML = "&nbsp;Informe o cpf do visitante";
                  return false;
        }
        if(document.getElementById('cad_visitante').getElementById('fone').value == ""){
                  document.getElementById('fone').focus();
                  document.getElementById( 'span_msg' ).innerHTML = "&nbsp;Informe o telefone do visitante";
                  return false;
        }
        if(document.getElementById('cad_visitante').getElementById('sexo').value == ""){
                  document.getElementById('sexo').focus();
                  document.getElementById( 'span_msg' ).innerHTML = "&nbsp;Informe o sexo do visitante";
                  return false;
        }

        return true;
    }


