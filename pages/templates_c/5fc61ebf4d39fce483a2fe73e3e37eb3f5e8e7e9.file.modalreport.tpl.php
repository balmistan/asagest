<?php /* Smarty version Smarty-3.1.5, created on 2015-04-06 09:24:08
         compiled from "tpl/modalreport.tpl" */ ?>
<?php /*%%SmartyHeaderCode:107784130855223498c63b65-63464085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fc61ebf4d39fce483a2fe73e3e37eb3f5e8e7e9' => 
    array (
      0 => 'tpl/modalreport.tpl',
      1 => 1372880032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107784130855223498c63b65-63464085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'arr_style_config' => 0,
    'linkcss' => 0,
    'arr_js_config' => 0,
    'linkjs' => 0,
    'arr' => 0,
    'codcons' => 0,
    'distr' => 0,
    'myitem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_55223498d041a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55223498d041a')) {function content_55223498d041a($_smarty_tpl) {?><!DOCTYPE HTML> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="initial-scale=0.7, maximum-scale=0.7" name="viewport"  />
        <?php  $_smarty_tpl->tpl_vars['linkcss'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkcss']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_style_config']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkcss']->key => $_smarty_tpl->tpl_vars['linkcss']->value){
$_smarty_tpl->tpl_vars['linkcss']->_loop = true;
?>
            <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['linkcss']->value;?>
" type="text/css" media="all" />
        <?php } ?>
        <?php  $_smarty_tpl->tpl_vars['linkjs'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['linkjs']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['arr_js_config']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['linkjs']->key => $_smarty_tpl->tpl_vars['linkjs']->value){
$_smarty_tpl->tpl_vars['linkjs']->_loop = true;
?>
            <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['linkjs']->value;?>
"></script>
        <?php } ?>
    </head>
    <body> 
        <table cellpadding=0 cellspacing=0>
            <tr>
                <td colspan=4 id="spettle">Spett.le <?php echo $_smarty_tpl->tpl_vars['arr']->value["surname"];?>
 <?php echo $_smarty_tpl->tpl_vars['arr']->value["name"];?>
</td>
            </tr>
            <tr>
                <td colspan=4 id="dataeora">Data: <?php echo $_smarty_tpl->tpl_vars['arr']->value["dtime"];?>
</td>
            </tr>
            <tr>
                <td colspan=4 id="codcons">Codice consegna: <?php echo $_smarty_tpl->tpl_vars['codcons']->value;?>
</td>
            </tr>
            <tr><td colspan=4 id="prodotti">Elenco prodotti distribuiti:</td></tr>
            <?php if (count($_smarty_tpl->tpl_vars['distr']->value['agea'])!=0){?>
                <tr><td class="colred" colspan=4>--------------------------Agea-------------------------</td></tr>     
                <?php  $_smarty_tpl->tpl_vars["myitem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["myitem"]->_loop = false;
 $_smarty_tpl->tpl_vars["mykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['distr']->value["agea"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["myitem"]->key => $_smarty_tpl->tpl_vars["myitem"]->value){
$_smarty_tpl->tpl_vars["myitem"]->_loop = true;
 $_smarty_tpl->tpl_vars["mykey"]->value = $_smarty_tpl->tpl_vars["myitem"]->key;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['myitem']->value["qty"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['myitem']->value["measureunity"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['myitem']->value["name_product"];?>
</td>
                    </tr>
                <?php } ?> 
            <?php }?>
            <?php if (count($_smarty_tpl->tpl_vars['distr']->value['banco'])!=0){?>
                <tr><td class="colred" colspan=4>-----------------------Donazioni--------------------</td></tr>
                <?php  $_smarty_tpl->tpl_vars["myitem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["myitem"]->_loop = false;
 $_smarty_tpl->tpl_vars["mykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['distr']->value['banco']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["myitem"]->key => $_smarty_tpl->tpl_vars["myitem"]->value){
$_smarty_tpl->tpl_vars["myitem"]->_loop = true;
 $_smarty_tpl->tpl_vars["mykey"]->value = $_smarty_tpl->tpl_vars["myitem"]->key;
?>
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['myitem']->value["qty"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['myitem']->value["measureunity"];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['myitem']->value["name_product"];?>
</td>
                    </tr>
                <?php } ?> 
            <?php }?>
            <tr><td colspan=4>
                    <div class="sig sigWrapper">
                        <div class="typed"></div>
                        <canvas class="pad" width="300" height="55"></canvas>
                        <input type="hidden" name="output" class="output">
                    </div>
                </td></tr>
        </table>
        <input type="hidden" id="signature" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value["signature"];?>
" />
    </body>
</html><?php }} ?>