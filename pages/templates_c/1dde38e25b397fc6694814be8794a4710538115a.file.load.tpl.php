<?php /* Smarty version Smarty-3.1.5, created on 2015-03-01 00:10:06
         compiled from "tpl/load.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48260353954f24ace5239a8-23999290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dde38e25b397fc6694814be8794a4710538115a' => 
    array (
      0 => 'tpl/load.tpl',
      1 => 1415796253,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48260353954f24ace5239a8-23999290',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr_style_config' => 0,
    'linkcss' => 0,
    'arr_js_config' => 0,
    'linkjs' => 0,
    'menu' => 0,
    'prog_agea' => 0,
    'dateins' => 0,
    'prog' => 0,
    'arr_products' => 0,
    'myitem' => 0,
    'dateloads' => 0,
    'date' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54f24ace5e94c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f24ace5e94c')) {function content_54f24ace5e94c($_smarty_tpl) {?><!DOCTYPE HTML> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Carico</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="generator" content="NetMDM" />
        <?php  $_smarty_tpl->tpl_vars['linkcss'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkcss']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_style_config']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkcss']->key => $_smarty_tpl->tpl_vars['linkcss']->value){
$_smarty_tpl->tpl_vars['linkcss']->_loop = true;
?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['linkcss']->value;?>
" type="text/css" media="all" />
        <?php } ?>
        <link rel="stylesheet" href="../styles/allegati/print.css" type="text/css" media="print" />
        <?php  $_smarty_tpl->tpl_vars['linkjs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkjs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_js_config']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkjs']->key => $_smarty_tpl->tpl_vars['linkjs']->value){
$_smarty_tpl->tpl_vars['linkjs']->_loop = true;
?>
            <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['linkjs']->value;?>
"></script>
        <?php } ?>
        <script type="text/javascript">
            //window.location = "all8.php"
        </script>
    </head>
    <body>
        <?php echo smarty_function_menu(array('data'=>$_smarty_tpl->tpl_vars['menu']->value,'class'=>"admin_menu noprint"),$_smarty_tpl);?>

        <br /><br />
        <h2>Carico Prodotti su Registro AGEA (<?php echo $_smarty_tpl->tpl_vars['prog_agea']->value;?>
)</h2>
        <form id="inputform" name="inputform" action="#" method="post">
            <table>
                <tr><td colspan=3><div id="msg"></div></td></tr>
                <tr>
                    <td class="nameother">DATA:</td><td colspan=2><input type="text" class="input_other" id="date" name="date" value="<?php echo $_smarty_tpl->tpl_vars['dateins']->value;?>
" /></td>
                </tr>
                <tr>
                    <td class="nameother">NUM. RIF:</td><td colspan=2><input type="text" id="numrif" class="input_other" autocomplete = "off" name="numrif" value="" /></td>
                </tr>
                <tr>
                    <td class="nameother">NUM. INDIG:</td><td colspan=2><input type="text" class="input_other" autocomplete = "off" name="numindig" value="<?php echo $_smarty_tpl->tpl_vars['prog']->value;?>
" /></td>
                </tr>

                <?php  $_smarty_tpl->tpl_vars["myitem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["myitem"]->_loop = false;
 $_smarty_tpl->tpl_vars["mykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["myitem"]->key => $_smarty_tpl->tpl_vars["myitem"]->value){
$_smarty_tpl->tpl_vars["myitem"]->_loop = true;
 $_smarty_tpl->tpl_vars["mykey"]->value = $_smarty_tpl->tpl_vars["myitem"]->key;
?>
                    <tr>
                        <td class="nameproduct"><?php echo $_smarty_tpl->tpl_vars['myitem']->value["nameproduct"];?>
:</td><td><input class="input_product" type="text" autocomplete = "off" name="load_<?php echo $_smarty_tpl->tpl_vars['myitem']->value["idproduct"];?>
" value="0" /></td><td><?php echo $_smarty_tpl->tpl_vars['myitem']->value["umis"];?>
</td>
                    </tr>
                <?php } ?>
                <tr>
                    <td><input type="hidden" id="insert_id" name="insert_id" value="" /></td>
                    <td>
                        <input id="Rimuovi" type="button" value="Rimuovi" />
                        <input id="Salva" type="submit" name="Salva" value="Salva" /></td>
                </tr>
            </table>
            <p>*Indicare le eventuali cifre decimali (max 2) usando il punto.</p>
            <p>*La Data è quella della bolla. Non devono essere state effettuate distribuzioni con data successiva ad essa.</p>
        </form>


        <div id="menuextern">
            <div id="menutitle">
                <h3 class="t">Carichi precedenti</h3>
            </div>
            <div>
                <div>
                    <ul id="menu">
                        <?php  $_smarty_tpl->tpl_vars['date'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['date']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dateloads']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['date']->key => $_smarty_tpl->tpl_vars['date']->value){
$_smarty_tpl->tpl_vars['date']->_loop = true;
?>   
                            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</a></li>
                            <?php } ?>
                    </ul>             
                    <div class="cleared"></div>
                </div>
            </div>
            <div class="cleared"></div>
        </div>
        </div>


    </body>
</html>
<?php }} ?>