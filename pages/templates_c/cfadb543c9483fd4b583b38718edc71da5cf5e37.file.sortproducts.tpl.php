<?php /* Smarty version Smarty-3.1.5, created on 2015-04-03 13:35:48
         compiled from "tpl/sortproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:74580177854f4a5ab4dea44-82090717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfadb543c9483fd4b583b38718edc71da5cf5e37' => 
    array (
      0 => 'tpl/sortproducts.tpl',
      1 => 1425391937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74580177854f4a5ab4dea44-82090717',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54f4a5ab5b7e1',
  'variables' => 
  array (
    'title' => 0,
    'shortcuticon' => 0,
    'arr_style_config' => 0,
    'linkcss' => 0,
    'arr_js_config' => 0,
    'linkjs' => 0,
    'menu' => 0,
    'arr_products_8' => 0,
    'myitem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f4a5ab5b7e1')) {function content_54f4a5ab5b7e1($_smarty_tpl) {?><!DOCTYPE HTML> 
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
 

        <div class="content">
            <h2>Ordine di visualizzazione in Allegato 5</h2>
             <p>*Spostare le icone col mouse per cambiare l' ordine di visualizzazione.</p>
            <ul class="blockicons">

                <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['products'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['products']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['name'] = 'products';
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['start'] = (int)0;
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['loop'] = is_array($_loop=count($_smarty_tpl->tpl_vars['arr_products_8']->value)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['step'] = ((int)1) == 0 ? 1 : (int)1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['loop'];
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['products']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['products']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['products']['total']);
?>

                    <li id="<?php echo $_smarty_tpl->tpl_vars['arr_products_8']->value[$_smarty_tpl->getVariable('smarty')->value['section']['products']['index']]["product_id"];?>
"><div class="item" product_id="<?php echo $_smarty_tpl->tpl_vars['arr_products_8']->value[$_smarty_tpl->getVariable('smarty')->value['section']['products']['index']]["product_id"];?>
">
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['myitem']->value["imagelink"];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=''){?>
                                <img class="photoproduct"  src="../Personal/PhotoProducts/<?php echo $_smarty_tpl->tpl_vars['arr_products_8']->value[$_smarty_tpl->getVariable('smarty')->value['section']['products']['index']]["imagelink"];?>
" alt="" /><br />
                            <?php }?>
                            <span class="product_name"><?php echo $_smarty_tpl->tpl_vars['arr_products_8']->value[$_smarty_tpl->getVariable('smarty')->value['section']['products']['index']]["product"];?>
</span>
                        </div></li>

                <?php endfor; endif; ?>    
            </ul>
           
        </div>                  
    </body>
</html><?php }} ?>