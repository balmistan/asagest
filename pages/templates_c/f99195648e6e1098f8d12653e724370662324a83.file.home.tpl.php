<?php /* Smarty version Smarty-3.1.5, created on 2015-04-06 12:20:23
         compiled from "tpl/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45701971654de0763ad1b27-20533024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f99195648e6e1098f8d12653e724370662324a83' => 
    array (
      0 => 'tpl/home.tpl',
      1 => 1428315246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45701971654de0763ad1b27-20533024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54de0763b5b20',
  'variables' => 
  array (
    'title' => 0,
    'shortcuticon' => 0,
    'arr_style_config' => 0,
    'linkcss' => 0,
    'arr_js_config' => 0,
    'linkjs' => 0,
    'menu' => 0,
    'username' => 0,
    'msg_last_date_login' => 0,
    'path_icons' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54de0763b5b20')) {function content_54de0763b5b20($_smarty_tpl) {?><!DOCTYPE HTML> 
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
        <?php echo smarty_function_menu(array('data'=>$_smarty_tpl->tpl_vars['menu']->value,'class'=>"admin_menu noprint"),$_smarty_tpl);?>

        <br /><br />
        <span id="logged_user">Utente: <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['msg_last_date_login']->value;?>
</span>
        <div id="container">
            <ul>
                <li><a href="searchfamily"><img src="<?php echo $_smarty_tpl->tpl_vars['path_icons']->value;?>
search.png" class="icons" alt="Cerca scheda" title="Cerca scheda" /></a></li> 
                <li><a href="addmodfamily"><img src="<?php echo $_smarty_tpl->tpl_vars['path_icons']->value;?>
add.png" class="icons" alt="Aggiungi scheda" title="Aggiungi scheda" /></a></li>       
               <!-- <li><a href="manuale/pagine/index"><img src="<?php echo $_smarty_tpl->tpl_vars['path_icons']->value;?>
guide.png" class="icons" alt="manuale" title="manuale" /></a></li> -->
           <li><a href="index?logout=1"><img src="<?php echo $_smarty_tpl->tpl_vars['path_icons']->value;?>
logout.png" class="icons" alt="logout" title="logout" /></a></li>
            </ul>
        </div>
            <div id="bottom_pos">E' possibile accedere ad una scheda premendo e lasciando il tasto CTRL e digitando subido dopo in modo rapido il numero della scheda da cercare. L' operazione può essere effettuata da qualsiasi pagina.</div>
    </body>
</html>
<?php }} ?>