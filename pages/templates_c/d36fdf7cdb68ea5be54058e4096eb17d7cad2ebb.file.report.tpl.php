<?php /* Smarty version Smarty-3.1.5, created on 2015-02-13 00:25:45
         compiled from "tpl/report.tpl" */ ?>
<?php /*%%SmartyHeaderCode:80955826554dd36795d4870-17718602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd36fdf7cdb68ea5be54058e4096eb17d7cad2ebb' => 
    array (
      0 => 'tpl/report.tpl',
      1 => 1418397275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80955826554dd36795d4870-17718602',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'shortcuticon' => 0,
    'arr_style_config' => 0,
    'linkcss' => 0,
    'arr_js_config' => 0,
    'linkjs' => 0,
    'menu' => 0,
    'start_date' => 0,
    'end_date' => 0,
    'family_id' => 0,
    'arr_district' => 0,
    'idcomune' => 0,
    'comune' => 0,
    'default_selected_tabs' => 0,
    'config_start_blocksheet' => 0,
    'refyear' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54dd36796523c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dd36796523c')) {function content_54dd36796523c($_smarty_tpl) {?><!DOCTYPE HTML> 
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
        <link rel="stylesheet" href="../styles/report/print.css" type="text/css" media="print" />
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
        <?php echo smarty_function_menu(array('data'=>$_smarty_tpl->tpl_vars['menu']->value,'class'=>"admin_menu noprint"),$_smarty_tpl);?>

        <br />
        <form name="report" method="POST" action="?">
            <table id="tablesearch" class="noprint">           
                <tr>
                    <td><label>Ricerca dal</label><br />
                        <input type="text" name="start_date" class="date" id="start_date" value="<?php echo $_smarty_tpl->tpl_vars['start_date']->value;?>
" /></td>
                    <td><label>al</label><br />
                        <input type="text" name="end_date" class="date" id="end_date" value="<?php echo $_smarty_tpl->tpl_vars['end_date']->value;?>
" /></td>
                    <td><label>N° Scheda</label><br />
                        <input type="text" name="family_id" id="family_id" value="<?php echo $_smarty_tpl->tpl_vars['family_id']->value;?>
" /></td>
                     <td><label>Comune</label><br />
                                     <select id="comune" name="comune">
                                         <option value="">Tutti</option>
                    <?php  $_smarty_tpl->tpl_vars['comune'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comune']->_loop = false;
 $_smarty_tpl->tpl_vars['idcomune'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_district']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comune']->key => $_smarty_tpl->tpl_vars['comune']->value){
$_smarty_tpl->tpl_vars['comune']->_loop = true;
 $_smarty_tpl->tpl_vars['idcomune']->value = $_smarty_tpl->tpl_vars['comune']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['idcomune']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['comune']->value;?>
</option>
                    <?php } ?>
                    <option value="0">Non inserito</option>
                </select>
            </td>
                         
                    <td><!--<br /><input type="button" id="update_btn" value="Aggiorna" />--></td>
                    <td><a href="#" class="icolink" onClick="javascript:history.back()"><img src="../styles/page/images/back.png" alt="Torna indietro" /></a></td>
                </tr>
            </table>
        </form>


        <div id="tabs" class="noprint">
            <ul>   
                <li><a class="tab_link" id="tabs-2" href="#tabs-1">Generale</a></li>
                <li><a class="tab_link" id="tabs-1" href="#tabs-1">Per Famiglia</a></li>                 
                <li><a class="tab_link" id="tabs-3" href="#tabs-1">Prodotti Distribuiti</a></li>
            </ul>
            <div id="tabs-1">
                <table id="DTable1"></table>
            </div>         
            <table id="block_table"></table>
            <table id="report-table"></table>
        </div>
        <div id="dialog" title="Prodotti distribuiti">

        </div>
        <div id="distr3"></div>
        <input type="hidden" id="default_selected_tabs" value="<?php echo $_smarty_tpl->tpl_vars['default_selected_tabs']->value;?>
" />
        <input type="hidden" id="config_start_blocksheet" value="<?php echo $_smarty_tpl->tpl_vars['config_start_blocksheet']->value;?>
" />
        <input type="hidden" id="refyear" value="<?php echo $_smarty_tpl->tpl_vars['refyear']->value;?>
" />
        <br /><br />
    </body>
        
</html>
<?php }} ?>