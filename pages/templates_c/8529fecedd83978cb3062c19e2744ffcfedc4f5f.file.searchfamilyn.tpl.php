<?php /* Smarty version Smarty-3.1.5, created on 2015-04-06 12:20:27
         compiled from "tpl/searchfamilyn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162838956254dd341a428b05-49753525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8529fecedd83978cb3062c19e2744ffcfedc4f5f' => 
    array (
      0 => 'tpl/searchfamilyn.tpl',
      1 => 1428315246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '162838956254dd341a428b05-49753525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54dd341a4c7b9',
  'variables' => 
  array (
    'title' => 0,
    'shortcuticon' => 0,
    'arr_style_config' => 0,
    'linkcss' => 0,
    'arr_js_config' => 0,
    'linkjs' => 0,
    'menu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dd341a4c7b9')) {function content_54dd341a4c7b9($_smarty_tpl) {?><!DOCTYPE HTML> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="generator" content="NetMDM" />
        <link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['shortcuticon']->value;?>
" />

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
        <?php echo smarty_function_menu(array('data'=>$_smarty_tpl->tpl_vars['menu']->value,'class'=>"admin_menu"),$_smarty_tpl);?>

        <form name="family_search" method="POST" action="?">
            <table id="tablesearch"> 
                <tr>
                    <td><label>Ricerca nomi:</label></td>
                    <td>
                        <div class="radiobtn">
                            <input type="radio" id="radio0" name="radio_block1" value="0" /><label for="radio0">Tutti</label>
                            <input type="radio" id="radio1" name="radio_block1" value="1" /><label for="radio1">Solo con R.R. selezionato</label>
                        </div>
                    </td>
                    <td><label>Da schede:</label></td>
                    <td>
                        <div class="radiobtn">
                            <input type="radio" id="radio2" name="radio_block2" value="0" /><label for="radio2">Tutte</label>
                            <input type="radio" id="radio3" name="radio_block2" value="1" /><label for="radio3">Attive</label>
                            <input type="radio" id="radio4" name="radio_block2" value="2" /><label for="radio4">Non attive</label>
                        </div>
                    </td>
                </tr>
            </table>
        </form>
        <table id="DTable"></table>
    </body>
</html>
<?php }} ?>