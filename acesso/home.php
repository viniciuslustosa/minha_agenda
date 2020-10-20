<?php
    session_start();
    include("php/valida_sessao.php");
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″>
    <title>Minha Agenda - Home</title>
    <link rel="shortcut icon" href="../img/favicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="../css/pesquisa.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
    <script>
      var _0x2ee1=['setAttribute','input-telF-add','add-area','stopTimer','input-name-add','addEventListener','fire','Contato\x20excluído!','input-cidade','input-telM-add','input-estado-add','input-sobrenome-add','post','onclick','email','done','#input-busca','send-area','top-end','style','input-name','mouseenter','input-email','ajax','split','edt-area','input-telM','value','deletarUser(\x27','mouseleave','php/adicionar_contato.php','flex','success','\x27);','php/buscar_campos.php','center','input-sobrenome','editarUser(\x27','fail','input-cidade-add','display','input-endereco','delete-area','Contato\x20editado!','btn-deletar','input-estado','php/buscar_email.php','php/editar_contato.php','error','input-pais','none','mixin','input-pais-add','add','input-bairro','resumeTimer','php/excluir_contato.php','getElementById'];(function(_0x45cb83,_0x2ee143){var _0x5ac241=function(_0x586853){while(--_0x586853){_0x45cb83['push'](_0x45cb83['shift']());}};_0x5ac241(++_0x2ee143);}(_0x2ee1,0xe9));var _0x5ac2=function(_0x45cb83,_0x2ee143){_0x45cb83=_0x45cb83-0x0;var _0x5ac241=_0x2ee1[_0x45cb83];return _0x5ac241;};var _0x6a7067=_0x5ac2,arrayCampos,availableTags=_0x6a7067('0xd');function exibeForm(_0x586853,_0x158ac5){var _0x11b554=_0x6a7067;if(_0x586853=='edt-area'){document['getElementById'](_0x586853)[_0x11b554('0x12')][_0x11b554('0x27')]=_0x11b554('0x1e'),document[_0x11b554('0x38')]('btn-editar')[_0x11b554('0x39')](_0x11b554('0xc'),_0x11b554('0x24')+_0x158ac5+_0x11b554('0x20'));var _0x2c94b1=_0x158ac5,_0x4197d4={'id':_0x2c94b1};$[_0x11b554('0xb')](_0x11b554('0x21'),_0x4197d4,function(_0x248489){var _0x54e6fb=_0x11b554;arrayCampos=_0x248489[_0x54e6fb('0x17')](';'),document[_0x54e6fb('0x38')](_0x54e6fb('0x13'))[_0x54e6fb('0x1a')]=arrayCampos[0x0],document[_0x54e6fb('0x38')](_0x54e6fb('0x23'))[_0x54e6fb('0x1a')]=arrayCampos[0x1],document[_0x54e6fb('0x38')]('input-email')[_0x54e6fb('0x1a')]=arrayCampos[0x2],document['getElementById']('input-endereco')[_0x54e6fb('0x1a')]=arrayCampos[0x3],document['getElementById'](_0x54e6fb('0x35'))[_0x54e6fb('0x1a')]=arrayCampos[0x4],document[_0x54e6fb('0x38')](_0x54e6fb('0x7'))[_0x54e6fb('0x1a')]=arrayCampos[0x5],document[_0x54e6fb('0x38')]('input-estado')['value']=arrayCampos[0x6],document['getElementById']('input-pais')[_0x54e6fb('0x1a')]=arrayCampos[0x7],document[_0x54e6fb('0x38')]('input-telF')['value']=arrayCampos[0x8],document['getElementById'](_0x54e6fb('0x19'))[_0x54e6fb('0x1a')]=arrayCampos[0x9];});}if(_0x586853==_0x11b554('0x29')){document['getElementById'](_0x586853)[_0x11b554('0x12')][_0x11b554('0x27')]=_0x11b554('0x1e');var _0x4ac674=document[_0x11b554('0x38')](_0x11b554('0x2b'));_0x4ac674[_0x11b554('0x39')](_0x11b554('0xc'),_0x11b554('0x1b')+_0x158ac5+_0x11b554('0x20'));}_0x158ac5==_0x11b554('0x34')&&(document[_0x11b554('0x38')](_0x586853)[_0x11b554('0x12')][_0x11b554('0x27')]=_0x11b554('0x1e')),_0x586853==_0x11b554('0x10')&&(document[_0x11b554('0x38')](_0x586853)['style'][_0x11b554('0x27')]=_0x11b554('0x1e'));}function hideDiv(_0x19c486,_0x1e7008){var _0xd816fe=_0x6a7067;document[_0xd816fe('0x38')](_0x19c486)[_0xd816fe('0x12')][_0xd816fe('0x27')]=_0xd816fe('0x31');}function deletarUser(_0x32fc4b){var _0xb3f0e2=_0x6a7067,_0x3953c8=_0x32fc4b,_0x1b619d={'id':_0x3953c8};$['post'](_0xb3f0e2('0x37'),_0x1b619d,function(_0x407c0e){var _0x40f8bf=_0xb3f0e2;buscarCtt();const _0xb2b869=Swal[_0x40f8bf('0x32')]({'toast':!![],'position':_0x40f8bf('0x11'),'showConfirmButton':![],'timer':0x7d0,'timerProgressBar':![],'didOpen':_0x106423=>{var _0x2fe06c=_0x40f8bf;_0x106423[_0x2fe06c('0x4')](_0x2fe06c('0x14'),Swal[_0x2fe06c('0x2')]),_0x106423[_0x2fe06c('0x4')](_0x2fe06c('0x1c'),Swal[_0x2fe06c('0x36')]);}});_0xb2b869[_0x40f8bf('0x5')]({'icon':'success','title':_0x40f8bf('0x6')});}),hideDiv(_0xb3f0e2('0x29'));}function editarUser(_0x47260c){var _0x2ee718=_0x6a7067;nome=document[_0x2ee718('0x38')]('input-name')[_0x2ee718('0x1a')],sobrenome=document[_0x2ee718('0x38')]('input-sobrenome')['value'],email=document[_0x2ee718('0x38')](_0x2ee718('0x15'))[_0x2ee718('0x1a')],endereco=document[_0x2ee718('0x38')](_0x2ee718('0x28'))[_0x2ee718('0x1a')],bairro=document[_0x2ee718('0x38')](_0x2ee718('0x35'))[_0x2ee718('0x1a')],cidade=document[_0x2ee718('0x38')]('input-cidade')[_0x2ee718('0x1a')],estado=document[_0x2ee718('0x38')](_0x2ee718('0x2c'))[_0x2ee718('0x1a')],pais=document[_0x2ee718('0x38')](_0x2ee718('0x30'))[_0x2ee718('0x1a')],telF=document[_0x2ee718('0x38')]('input-telF')['value'],telM=document[_0x2ee718('0x38')](_0x2ee718('0x19'))[_0x2ee718('0x1a')];var _0x529e03={'id':_0x47260c,'nome':nome,'sobrenome':sobrenome,'email':email,'endereco':endereco,'bairro':bairro,'cidade':cidade,'estado':estado,'pais':pais,'telF':telF,'telM':telM};$[_0x2ee718('0x16')]({'url':_0x2ee718('0x2e'),'type':_0x2ee718('0xb'),'data':_0x529e03})[_0x2ee718('0xe')](function(_0x2edf6f){var _0xf902e3=_0x2ee718;document[_0xf902e3('0x38')](_0xf902e3('0x18'))['style']['display']=_0xf902e3('0x31');const _0x5e242f=Swal['mixin']({'toast':!![],'position':'top-end','showConfirmButton':![],'timer':0x7d0,'timerProgressBar':![],'didOpen':_0x22336d=>{var _0x51764e=_0xf902e3;_0x22336d[_0x51764e('0x4')](_0x51764e('0x14'),Swal[_0x51764e('0x2')]),_0x22336d[_0x51764e('0x4')](_0x51764e('0x1c'),Swal[_0x51764e('0x36')]);}});_0x5e242f[_0xf902e3('0x5')]({'icon':'success','title':_0xf902e3('0x2a')});})['fail'](function(_0x11173e,_0x283053,_0x2f9b28){var _0x2b160d=_0x2ee718;Swal['fire']({'position':_0x2b160d('0x22'),'icon':'error','title':_0x2f9b28,'showConfirmButton':![],'timer':0x5dc});}),buscarCtt();}function adicionarContato(){var _0x3652e9=_0x6a7067;nome=document[_0x3652e9('0x38')](_0x3652e9('0x3'))[_0x3652e9('0x1a')],sobrenome=document[_0x3652e9('0x38')](_0x3652e9('0xa'))[_0x3652e9('0x1a')],email=document['getElementById']('input-email-add')[_0x3652e9('0x1a')],endereco=document[_0x3652e9('0x38')]('input-endereco-add')[_0x3652e9('0x1a')],bairro=document[_0x3652e9('0x38')]('input-bairro-add')[_0x3652e9('0x1a')],cidade=document[_0x3652e9('0x38')](_0x3652e9('0x26'))[_0x3652e9('0x1a')],estado=document[_0x3652e9('0x38')](_0x3652e9('0x9'))[_0x3652e9('0x1a')],pais=document[_0x3652e9('0x38')](_0x3652e9('0x33'))['value'],telF=document['getElementById'](_0x3652e9('0x0'))[_0x3652e9('0x1a')],telM=document['getElementById'](_0x3652e9('0x8'))[_0x3652e9('0x1a')];var _0x4199fc={'nome':nome,'sobrenome':sobrenome,'email':email,'endereco':endereco,'bairro':bairro,'cidade':cidade,'estado':estado,'pais':pais,'telF':telF,'telM':telM};$[_0x3652e9('0x16')]({'url':_0x3652e9('0x1d'),'type':_0x3652e9('0xb'),'data':_0x4199fc})[_0x3652e9('0xe')](function(_0x5338af){var _0x16bd8b=_0x3652e9;document['getElementById'](_0x16bd8b('0x18'))[_0x16bd8b('0x12')][_0x16bd8b('0x27')]=_0x16bd8b('0x31');const _0x39d0ba=Swal['mixin']({'toast':!![],'position':_0x16bd8b('0x11'),'showConfirmButton':![],'timer':0x7d0,'timerProgressBar':![],'didOpen':_0x43c962=>{var _0x25acb7=_0x16bd8b;_0x43c962[_0x25acb7('0x4')](_0x25acb7('0x14'),Swal[_0x25acb7('0x2')]),_0x43c962['addEventListener']('mouseleave',Swal[_0x25acb7('0x36')]);}});_0x39d0ba[_0x16bd8b('0x5')]({'icon':_0x16bd8b('0x1f'),'title':'Contato\x20adicionado!'});})[_0x3652e9('0x25')](function(_0x49e0e7,_0x48dada,_0x3ec497){var _0x490cc0=_0x3652e9;Swal[_0x490cc0('0x5')]({'position':_0x490cc0('0x22'),'icon':_0x490cc0('0x2f'),'title':_0x3ec497,'showConfirmButton':![],'timer':0x5dc});}),document[_0x3652e9('0x38')](_0x3652e9('0x1'))[_0x3652e9('0x12')]['display']=_0x3652e9('0x31'),buscarCtt();}$(function(){var _0x24abf4=_0x6a7067;$[_0x24abf4('0x16')]({'url':_0x24abf4('0x2d'),'type':'post','data':{'email':''}})[_0x24abf4('0xe')](function(_0x3b49cb){var _0x3ad170=_0x24abf4;availableTags=_0x3b49cb[_0x3ad170('0x17')](';'),$(_0x3ad170('0xf'))['autocomplete']({'source':availableTags});})[_0x24abf4('0x25')](function(_0x54c5ee,_0x5aed7a,_0x5617be){var _0x32621f=_0x24abf4;Swal[_0x32621f('0x5')](_0x5617be);});});
    </script>
    <style>
      body.swal2-toast-shown .swal2-container.swal2-top-end, body.swal2-toast-shown .swal2-container.swal2-top-right{
        top: 55px !important;
      }
    </style>
    <?php 
      if (isset($_GET['envio'])) {
        echo "<script>";
        echo "$( function() {";
        if($_GET['envio'] == "true") {
          echo "Swal.fire({icon: 'sucess',title: 'Pronto!',text: 'Email enviado com sucesso'});";
          
        } else {
          echo "Swal.fire({icon: 'error',title: 'Ops!',text: 'Falha no envio do email'});";
        }
        echo "});";
        echo "</script>";
      }
    ?>
</head>
<body id="body" style="height: 100% !important;">
  <div id="edt-area" class="hidden-area">
    <div class="card-form">
      <div class="header-form">
        <h1 id="h1-edt">EDITAR CONTATO</h1>
        <h2 id="h2-edt">Altere os campos desejados para redefinir as informações do contato</h2>
      </div>
      <form action="" method="post">
        <div id="fields-form">
          <div class="linha">
              <div class="div-2"><p>Nome:</p><input id="input-name" type="text" name="nome" class="campo-texto"></div>
              <div class="div-2"><p>Sobrenome:</p><input id="input-sobrenome" type="text" name="sobrenome" class="campo-texto"></div>
          </div>
          <div class="linha">
              <div class="div-1"><p>E-mail:</p><input id="input-email" type="text" name="email" class="campo-texto"></div>
          </div>
          <div class="linha">
              <div class="div-2"><p>Endereço:</p><input id="input-endereco" type="text" name="endereco" class="campo-texto"></div>
              <div class="div-2"><p>Bairro:</p><input id="input-bairro" type="text" name="bairro" class="campo-texto"></div>
          </div>
          <div class="linha">
              <div class="div-3"><p>Cidade:</p><input id="input-cidade" type="text" name="cidade" class="campo-texto"></div>
              <div class="div-3"><p>Estado:</p><input id="input-estado" type="text" name="estado" class="campo-texto"></div>
              <div class="div-3"><p>País:</p><input id="input-pais" type="text" name="pais" class="campo-texto"></div>
          </div>
          <div class="linha">
              <div class="div-2"><p>Tel. fixo:</p><input id="input-telF" type="tel" name="telefoneFixo" class="campo-texto"></div>
              <div class="div-2"><p>Tel. Móvel:</p><input id="input-telM" type="tel" name="telefoneMovel" class="campo-texto"></div>
          </div>
        </div>
        <div id="btn-form">
            <a class="btn-action-edt btn-editar" id="btn-editar" onclick="editarUser();" style="display: flex;">Editar</a>
            <input class="btn-action-edt btn-redefinir" type="reset" value="Redefinir" id="btn-redefinir" name="redefinir">
            <a class="btn-action-edt btn-cancelar" onclick="hideDiv('edt-area');" id="btn-cancel" style="display: flex;">Cancelar</a>
        </div>
      </form>
    </div>
  </div>

  <div id="add-area" class="hidden-area">
    <div class="card-form">
      <div class="header-form">
        <h1 id="h1-add">ADICIONAR CONTATO</h1>
        <h2 id="h2-add">Insiras as informações do contato</h2>
      </div>
      <form action="" method="post">
        <div id="fields-form-add">
          <div class="linha">
              <div class="div-2"><p>Nome:</p><input id="input-name-add" type="text" name="nome" class="campo-texto"></div>
              <div class="div-2"><p>Sobrenome:</p><input id="input-sobrenome-add" type="text" name="sobrenome" class="campo-texto"></div>
          </div>
          <div class="linha">
              <div class="div-1"><p>E-mail:</p><input id="input-email-add" type="text" name="email" class="campo-texto"></div>
          </div>
          <div class="linha">
              <div class="div-2"><p>Endereço:</p><input id="input-endereco-add" type="text" name="endereco" class="campo-texto"></div>
              <div class="div-2"><p>Bairro:</p><input id="input-bairro-add" type="text" name="bairro" class="campo-texto"></div>
          </div>
          <div class="linha">
              <div class="div-3"><p>Cidade:</p><input id="input-cidade-add" type="text" name="cidade" class="campo-texto"></div>
              <div class="div-3"><p>Estado:</p><input id="input-estado-add" type="text" name="estado" class="campo-texto"></div>
              <div class="div-3"><p>País:</p><input id="input-pais-add" type="text" name="pais" class="campo-texto"></div>
          </div>
          <div class="linha">
              <div class="div-2"><p>Tel. fixo:</p><input id="input-telF-add" type="tel" name="telefoneFixo" class="campo-texto"></div>
              <div class="div-2"><p>Tel. Móvel:</p><input id="input-telM-add" type="tel" name="telefoneMovel" class="campo-texto"></div>
          </div>
        </div>
        <div id="btn-form">
            <a class="btn-action-edt btn-editar" id="btn-add" onclick="adicionarContato();">Adicionar</a>
            <input class="btn-action-edt btn-redefinir" type="reset" value="Redefinir" id="btn-redefinir" name="redefinir">
            <a class="btn-action-edt btn-cancelar" onclick="hideDiv('add-area');"  style="display: flex;">Cancelar</a>
        </div>
      </form>
    </div>
  </div>

  <div id="send-area" class="hidden-area">
    <div class="card-form">
      <div class="header-form">
        <h1 id="h1-send">ENVIAR EMAIL</h1>
        <h2 id="h2-add">Preencha os campos para enviar um email.</h2>
      </div>
      <form action="php/processa_envio.php" method="post">
            <div id="fields-form-mail">
                <div class="linha div-1">
                  <input id="input-busca" class="campo-texto" type="text" name="para" placeholder="Para...">
                </div>
                <div class="linha div-1">
                  <input id="input-assunto" class="campo-texto" type="text" id="assunto" name="assunto" placeholder="Assunto">
                </div>
                <div class="linha div-1">
                  <textarea id="input-mensagem" class="campo-texto" type="text" id="mensagem" name="mensagem" placeholder="Mensagem" style="margin: 0px; height: 356px; max-height: 200px; width: 822px;"></textarea>
                </div>
            </div> 
            <br>
            <div id="btn-form">
                <input class="btn-action-edt btn-editar" type="submit" value="Enviar" id="btn-add" name="editar">
                <input class="btn-action-edt btn-redefinir" type="reset" value="Redefinir" id="btn-redefinir" name="redefinir">
                <a class="btn-action-edt btn-cancelar" onclick="hideDiv('send-area');" style="display: flex;">Cancelar</a>
            </div>
      </form>
    </div>
  </div>

  <div id="delete-area" class="hidden-area">
    <div class="card-form-delete">
      <h1 id="h1-delete">EXCLUIR CONTATO</h1>
        <h2 class="h2-delete">Tem certeza que quer excluir o contato?</h2>
        <div class="button-items">
          <button class="btn-action-delete btn-deletar" id="btn-deletar">Deletar</button>
          <button class="btn-action-delete btn-cancelar" id="btn-cancelar" onclick="hideDiv('delete-area');">Cancelar</button>
        </div>
    </div>
  </div>

  <header class="header">
    <div id="divBusca">
      <a class="logo" href="#"></a>
      <input type="text" id="txtBusca" placeholder="Buscar..."/>
      <button id="btnBusca"></button>
      <a class="sair-btn" href="php/logoff.php">SAIR</a>
    </div>
  </header>

  <div class="content">
    <div class="item_info">
      <div class="nome_ctt">
        Nome
      </div>
      <div class="telefone_ctt">
        Telefone
      </div>
      <div class="cidade_ctt">
        Cidade
      </div>
      <div style="width: 25px;height: 25px;margin-right: 8px;"></div>
      <div style="width: 25px;height: 25px;margin-right: 8px;"></div>
    </div>
    <div class="content_ctt">
    </div>
  </div>
  <div class="content_button">
      <div class="conj_button">
        <button class="btn-action-adicionar" onclick="exibeForm('add-area','add');">Adicionar Contato</button>
        <button class="btn-action-email" onclick="exibeForm('send-area','send')">Novo Email</button>
      </div>
  </div>
  <footer>
    <p class="footer-copy">Copyright 2020 @ SENAI - Vinicius Lustosa, Pedro Augusto e Matheus Henrique</p>
  </footer>
  <script>
    var _0xa6a5=['keyup','html','home','php/busca.php','post','#txtBusca','.content_ctt','href'];(function(_0xe67eb8,_0xa6a506){var _0x2dab56=function(_0x247404){while(--_0x247404){_0xe67eb8['push'](_0xe67eb8['shift']());}};_0x2dab56(++_0xa6a506);}(_0xa6a5,0x16e));var _0x2dab=function(_0xe67eb8,_0xa6a506){_0xe67eb8=_0xe67eb8-0x0;var _0x2dab56=_0xa6a5[_0xe67eb8];return _0x2dab56;};$(function(){var _0x4efc84=_0x2dab;$('#body')['ready'](function(){var _0x45c1ff=_0x2dab,_0x247404=$(this)['val'](),_0xebcc15={'palavra':_0x247404};$[_0x45c1ff('0x6')](_0x45c1ff('0x5'),_0xebcc15,function(_0x5c840a){var _0x5b0206=_0x45c1ff;$('.content_ctt')[_0x5b0206('0x3')](_0x5c840a);});}),$(_0x4efc84('0x7'))[_0x4efc84('0x2')](function(){var _0x7a3db3=$(this)['val'](),_0x2a4bc4={'palavra':_0x7a3db3};$['post']('php/busca.php',_0x2a4bc4,function(_0x4a9326){var _0x746011=_0x2dab;$(_0x746011('0x0'))[_0x746011('0x3')](_0x4a9326);});});});function buscarCtt(){var _0x49d66b=_0x2dab,_0x1b3c3c='',_0x33c678={'palavra':_0x1b3c3c};$[_0x49d66b('0x6')](_0x49d66b('0x5'),_0x33c678,function(_0xf83875){setTimeout(function(){var _0x4b766f=_0x2dab;window['location'][_0x4b766f('0x1')]=_0x4b766f('0x4');},0x4b0);});}
  </script>
</body>
</html>