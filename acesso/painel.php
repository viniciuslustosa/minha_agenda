<?php
    session_start();
    include("php/valida_sessao");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/painel2.css">
    <link rel="shortcut icon" href="../img/favicon.png" type="image/png">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <title>Minha Agenda - Painel</title>
    <script>
        var _0x5d4e=['none','php/excluir_usuario.php','input-telM','editarUser(\x27','btn-editar','input-pais','input-email','input-senha-add','add','flex','input-estado','php/novo_usuario.php','\x27);','php/buscar_campos_user.php','input-name','post','edt-area','getElementById','split','input-sobrenome','reload','onclick','input-bairro','deletarUser(\x27','input-senha-repet-add','input-endereco','erroPassword','style','value','input-cidade','setAttribute','Contato\x20adicionado\x20com\x20sucesso!','input-senha','input-telF','display','erroPassword_add'];(function(_0x11382b,_0x5d4e6b){var _0x66296a=function(_0x294025){while(--_0x294025){_0x11382b['push'](_0x11382b['shift']());}};_0x66296a(++_0x5d4e6b);}(_0x5d4e,0x107));var _0x6629=function(_0x11382b,_0x5d4e6b){_0x11382b=_0x11382b-0x0;var _0x66296a=_0x5d4e[_0x11382b];return _0x66296a;};var arrayCampos;function exibeForm(_0x294025,_0x349746){var _0x4499dc=_0x6629;if(_0x294025==_0x4499dc('0x5')){document[_0x4499dc('0x6')](_0x294025)['style']['display']=_0x4499dc('0x22'),document['getElementById'](_0x4499dc('0x1d'))[_0x4499dc('0x13')](_0x4499dc('0xa'),_0x4499dc('0x1c')+_0x349746+_0x4499dc('0x1'));var _0xd1236d=_0x349746,_0x929eef={'id':_0xd1236d};$[_0x4499dc('0x4')](_0x4499dc('0x2'),_0x929eef,function(_0x2502da){var _0x3eb8f3=_0x4499dc;arrayCampos=_0x2502da[_0x3eb8f3('0x7')](';'),document[_0x3eb8f3('0x6')]('input-name')[_0x3eb8f3('0x11')]=arrayCampos[0x0],document['getElementById'](_0x3eb8f3('0x1f'))['value']=arrayCampos[0x1];});}if(_0x294025=='delete-area'){document[_0x4499dc('0x6')](_0x294025)[_0x4499dc('0x10')]['display']=_0x4499dc('0x22');var _0x830673=document[_0x4499dc('0x6')]('btn-deletar');_0x830673['setAttribute']('onclick',_0x4499dc('0xc')+_0x349746+'\x27);');}_0x349746==_0x4499dc('0x21')&&(document[_0x4499dc('0x6')](_0x294025)['style'][_0x4499dc('0x17')]='flex');}function hideDiv(_0x3bfc68){var _0x4c87eb=_0x6629;document['getElementById'](_0x3bfc68)[_0x4c87eb('0x10')][_0x4c87eb('0x17')]=_0x4c87eb('0x19'),document[_0x4c87eb('0x6')](_0x4c87eb('0xf'))[_0x4c87eb('0x10')][_0x4c87eb('0x17')]='none',document[_0x4c87eb('0x6')](_0x4c87eb('0x18'))[_0x4c87eb('0x10')]['display']=_0x4c87eb('0x19'),document[_0x4c87eb('0x6')](_0x4c87eb('0x3'))[_0x4c87eb('0x11')]='',document[_0x4c87eb('0x6')](_0x4c87eb('0x1f'))[_0x4c87eb('0x11')]='',document[_0x4c87eb('0x6')](_0x4c87eb('0x20'))['value']='',document[_0x4c87eb('0x6')](_0x4c87eb('0xd'))[_0x4c87eb('0x11')]='',document[_0x4c87eb('0x6')](_0x4c87eb('0x15'))[_0x4c87eb('0x11')]='',document['getElementById']('input-senha-repet')['value']='';}function deletarUser(_0x49a512){var _0xbf7655=_0x6629,_0x5048e7=_0x49a512,_0x489b31={'id':_0x5048e7};$[_0xbf7655('0x4')](_0xbf7655('0x1a'),_0x489b31,function(_0x3d0ffc){var _0x21a632=_0xbf7655;location[_0x21a632('0x9')]();}),hideDiv('delete-area');}function adicionarContato(){var _0x11e0a3=_0x6629;nome=document[_0x11e0a3('0x6')](_0x11e0a3('0x3'))['value'],sobrenome=document[_0x11e0a3('0x6')](_0x11e0a3('0x8'))['value'],email=document[_0x11e0a3('0x6')](_0x11e0a3('0x1f'))[_0x11e0a3('0x11')],endereco=document[_0x11e0a3('0x6')](_0x11e0a3('0xe'))[_0x11e0a3('0x11')],bairro=document[_0x11e0a3('0x6')](_0x11e0a3('0xb'))[_0x11e0a3('0x11')],cidade=document[_0x11e0a3('0x6')](_0x11e0a3('0x12'))[_0x11e0a3('0x11')],estado=document[_0x11e0a3('0x6')](_0x11e0a3('0x23'))[_0x11e0a3('0x11')],pais=document['getElementById'](_0x11e0a3('0x1e'))['value'],telF=document[_0x11e0a3('0x6')](_0x11e0a3('0x16'))[_0x11e0a3('0x11')],telM=document[_0x11e0a3('0x6')](_0x11e0a3('0x1b'))[_0x11e0a3('0x11')];var _0xd5cd7e={'nome':nome,'sobrenome':sobrenome,'email':email,'endereco':endereco,'bairro':bairro,'cidade':cidade,'estado':estado,'pais':pais,'telF':telF,'telM':telM};$['post'](_0x11e0a3('0x0'),_0xd5cd7e,function(_0x4d0866){}),alert(_0x11e0a3('0x14'));}
    </script>
</head>
<body id="body">
    <div id="edt-area" class="hidden-area">
        <div class="card-form">
            <div class="header-form">
                <h1 id="h1-edt">EDITAR USUÁRIO</h1>
                <h2 id="h2-edt">Altere os campos desejados para redefinir as informações do usuário</h2>
            </div>
            <form action="php/editar_usuario.php" method="post">
                <div id="fields-form">
                    <div class="linha">
                        <div class="div-2"><p>Nome:</p><input id="input-name" type="text" name="nome" class="campo-texto" required="true"></div>
                    </div>
                    <div class="linha">
                        <div class="div-1"><p>E-mail:</p><input id="input-email" type="text" name="email" class="campo-texto" style="color: #616161;" required="true" readonly="true"></div>
                    </div>
                    <div class="linha">
                        <div class="div-1"><p>Novo E-mail:</p><input id="input-new-email" type="text" name="email-new" class="campo-texto"></div>
                    </div>
                    <div class="linha erroEmail" style="color: white;background-color: #da3d3d;border-radius: 5px;padding: 5px;width: 170px;font-weight: bold;font-size: 14px;display: none;"></div>
                    <div class="linha">
                        <div class="div-1"><p>Nova Senha:</p><input id="input-senha" type="password" name="senha" class="campo-texto"></div>
                    </div>
                    <div class="linha">
                        <div class="div-1"><p>Repetir Senha:</p><input id="input-senha-repet" type="password" name="rep_senha" class="campo-texto"></div>
                    </div>
                    <div id="erroPassword" class="linha" style="color: white;background-color: #da3d3d;border-radius: 5px;padding: 5px;width: 170px;font-weight: bold;font-size: 14px;display: none;">
                        As senhas não coincidem!
                    </div>
                </div>
                <div id="btn-form">
                    <input class="btn-action-edt btn-editar" type="submit" value="Editar" id="btn-editar" name="editar" onclick="editarUser();">
                    <input class="btn-action-edt btn-redefinir" type="reset" value="Redefinir" id="btn-redefinir" name="redefinir">
                    <a class="btn-action-edt btn-cancelar" onclick="hideDiv('edt-area');" id="btn-cancel">Cancelar</a>
                </div>
          </form>
        </div>
    </div>
    
    <div id="add-area" class="hidden-area">
        <div class="card-form">
          <div class="header-form">
            <h1 id="h1-add">ADICIONAR USUÁRIO</h1>
            <h2 id="h2-add">Insiras as informações do usuário</h2>
          </div>
          <form action="php/novo_usuario.php" method="post">
            <div id="fields-form-add">
                <div class="linha">
                    <div class="div-2"><p>Nome:</p><input id="input-name-add" type="text" name="nome" class="campo-texto" required="true"></div>
                </div>
                <div class="linha">
                    <div class="div-1"><p>E-mail:</p><input id="input-email-add" type="text" name="email" class="campo-texto" required="true"></div>
                </div>
                <div class="linha erroEmail_add" style="color: white;background-color: #da3d3d;border-radius: 5px;padding: 5px;width: 170px;font-weight: bold;font-size: 14px;display: none;">
                </div>
                <div class="linha">
                    <div class="div-1"><p>Senha:</p><input id="input-senha-add" type="password" name="senha_add" class="campo-texto" required="true"></div>
                </div>
                <div class="linha">
                    <div class="div-1"><p>Repetir Senha:</p><input id="input-senha-repet-add" type="password" name="rep_senha_add" class="campo-texto" required="true"></div>
                </div>
                <div id="erroPassword_add" class="linha" style="color: white;background-color: #da3d3d;border-radius: 5px;padding: 5px;width: 170px;font-weight: bold;font-size: 14px;display: none;">
                    As senhas não coincidem!
                </div>
            </div>
            <div id="btn-form">
                <input class="btn-action-edt btn-editar" type="submit" value="Cadastrar" id="btn-add" name="editar">
                <input class="btn-action-edt btn-redefinir" type="reset" value="Redefinir" id="btn-redefinir" name="redefinir">
                <a class="btn-action-edt btn-cancelar" onclick="hideDiv('add-area');">Cancelar</a>
            </div>
          </form>
        </div>
    </div>
    
    <div id="delete-area" class="hidden-area">
        <div class="card-form-delete">
          <h1 id="h1-delete">EXCLUIR USUÁRIO</h1>
            <h2 class="h2-delete">Tem certeza que quer excluir este usuário?</h2>
            <div class="button-items">
              <button class="btn-action-delete btn-deletar" id="btn-deletar">Deletar</button>
              <button class="btn-action-delete btn-cancelar" id="btn-cancelar" onclick="hideDiv('delete-area');">Cancelar</button>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="content-header">
            <a class="logo" href="#"></a>
            <a class="sair-btn" href="php/logoff.php">SAIR</a>
        </div>
    </header>
    <main class="main">
        <div class="content">
            <div id="divBusca">
                <input type="text" id="txtBusca" placeholder="Buscar..."/>
                <button id="btnBusca"></button>
            </div>
            <div class="content-list">

            </div>
            <div class="content-button">
                <button class="btn-add" onclick="exibeForm('add-area','add');">Novo Usuário</button>
            </div>
        </div>
    </main>
    <footer>
        <p class="footer-copy">Copyright 2020 @ SENAI - Vinicius Lustosa, Pedro Augusto e Matheus Henrique</p>
    </footer>
    <script>
        var _0x4e08=['Email\x20Válido','ready','#btn-add','attr','style','php/valida_email.php','keyup','val','html','#input-email-add','#txtBusca','input-senha','.content-list','#btn-editar','css','removeAttr','getElementById','disabled','block','input-senha-repet-add','erroPassword_add','.erroEmail','input-senha-add','.erroEmail_add','none','value','post','display','#input-senha-repet-add','#body','php/busca_usuarios.php','erroPassword'];(function(_0x51ac1a,_0x4e0874){var _0x55463b=function(_0x4474a1){while(--_0x4474a1){_0x51ac1a['push'](_0x51ac1a['shift']());}};_0x55463b(++_0x4e0874);}(_0x4e08,0xd5));var _0x5546=function(_0x51ac1a,_0x4e0874){_0x51ac1a=_0x51ac1a-0x0;var _0x55463b=_0x4e08[_0x51ac1a];return _0x55463b;};$(function(){var _0x1edb40=_0x5546;$(_0x1edb40('0x8'))[_0x1edb40('0xc')](function(){var _0x430bf5=_0x1edb40,_0x4474a1=$(this)[_0x430bf5('0x12')](),_0x4b539b={'palavra':_0x4474a1};$['post'](_0x430bf5('0x9'),_0x4b539b,function(_0x13a4cc){var _0x475c9d=_0x430bf5;$(_0x475c9d('0x17'))[_0x475c9d('0x13')](_0x13a4cc);});}),$(_0x1edb40('0x15'))[_0x1edb40('0x11')](function(){var _0x4ef8b6=_0x1edb40,_0x559245=$(this)[_0x4ef8b6('0x12')](),_0x25720b={'palavra':_0x559245};$[_0x4ef8b6('0x5')](_0x4ef8b6('0x9'),_0x25720b,function(_0x5c2452){var _0x1f6fd5=_0x4ef8b6;$(_0x1f6fd5('0x17'))[_0x1f6fd5('0x13')](_0x5c2452);});}),$('#input-senha-repet')[_0x1edb40('0x11')](function(){var _0x24da39=_0x1edb40,_0x2a90b8=document[_0x24da39('0x1b')](_0x24da39('0x16'))['value'],_0x3f15ac=document[_0x24da39('0x1b')]('input-senha-repet')['value'];_0x2a90b8!=_0x3f15ac?(document[_0x24da39('0x1b')](_0x24da39('0xa'))['style'][_0x24da39('0x6')]='block',$(_0x24da39('0x18'))[_0x24da39('0xe')](_0x24da39('0x1c'),_0x24da39('0x1c'))):(document[_0x24da39('0x1b')](_0x24da39('0xa'))[_0x24da39('0xf')][_0x24da39('0x6')]='none',$(_0x24da39('0x18'))['removeAttr']('disabled'));}),$(_0x1edb40('0x7'))[_0x1edb40('0x11')](function(){var _0x362f91=_0x1edb40,_0x33499e=document[_0x362f91('0x1b')](_0x362f91('0x1'))[_0x362f91('0x4')],_0x312e62=document[_0x362f91('0x1b')](_0x362f91('0x1e'))[_0x362f91('0x4')];_0x33499e!=_0x312e62?(document[_0x362f91('0x1b')](_0x362f91('0x1f'))['style']['display']=_0x362f91('0x1d'),$('#btn-add')[_0x362f91('0xe')](_0x362f91('0x1c'),_0x362f91('0x1c'))):(document['getElementById'](_0x362f91('0x1f'))[_0x362f91('0xf')]['display']='none',$(_0x362f91('0xd'))[_0x362f91('0x1a')](_0x362f91('0x1c')));}),$(_0x1edb40('0x14'))[_0x1edb40('0x11')](function(){var _0x370cce=_0x1edb40,_0x5d2931=$(this)[_0x370cce('0x12')](),_0xd76fc7={'email':_0x5d2931};$[_0x370cce('0x5')](_0x370cce('0x10'),_0xd76fc7,function(_0x361b51){var _0x7e1174=_0x370cce;_0x361b51!=_0x7e1174('0xb')?($(_0x7e1174('0x2'))['css'](_0x7e1174('0x6'),_0x7e1174('0x1d')),$('.erroEmail_add')['html'](_0x361b51),$(_0x7e1174('0xd'))[_0x7e1174('0xe')](_0x7e1174('0x1c'),_0x7e1174('0x1c'))):($('.erroEmail_add')['css'](_0x7e1174('0x6'),_0x7e1174('0x3')),$(_0x7e1174('0xd'))[_0x7e1174('0x1a')]('disabled'));});}),$('#input-new-email')['keyup'](function(){var _0x48b0ba=_0x1edb40,_0x7de3ad=$(this)[_0x48b0ba('0x12')](),_0x35236d={'email':_0x7de3ad};$[_0x48b0ba('0x5')](_0x48b0ba('0x10'),_0x35236d,function(_0xf37358){var _0x3aa481=_0x48b0ba;_0xf37358!=_0x3aa481('0xb')?($(_0x3aa481('0x0'))[_0x3aa481('0x19')](_0x3aa481('0x6'),_0x3aa481('0x1d')),$(_0x3aa481('0x0'))[_0x3aa481('0x13')](_0xf37358),$(_0x3aa481('0x18'))[_0x3aa481('0xe')](_0x3aa481('0x1c'),_0x3aa481('0x1c'))):($(_0x3aa481('0x0'))['css']('display','none'),$(_0x3aa481('0x18'))[_0x3aa481('0x1a')]('disabled'));});});});
    </script>
</body>
</html>