<?php /* Smarty version Smarty-3.1.5, created on 2015-02-13 00:26:06
         compiled from "tpl/viewfamily.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38273529854dd368ebb6169-16284490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59053e7b7f18295880fe6c75e54014f9e002c30d' => 
    array (
      0 => 'tpl/viewfamily.tpl',
      1 => 1418425223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '38273529854dd368ebb6169-16284490',
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
    'class_color_msg' => 0,
    'idfamily' => 0,
    'arr_res' => 0,
    'index' => 0,
    'usephoto' => 0,
    'link' => 0,
    'note' => 0,
    'msg' => 0,
    'str' => 0,
    'wmsg' => 0,
    'emsg' => 0,
    'correct_selected_block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54dd368ecaf2c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dd368ecaf2c')) {function content_54dd368ecaf2c($_smarty_tpl) {?><!DOCTYPE HTML> 
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

        <input type="button" id="distr_btn" />
        <a href="searchfamily" id="pageback"><img src="../styles/page/images/back.png" alt="Torna indietro" /></a>
        <table id="table1">

            <tr><td colspan=4 class="suggestion">Per iniziare la distribuzione cliccare sul nome di chi è venuto a ritirare o premere Invio!</td></tr>
            <tr><td class="<?php echo $_smarty_tpl->tpl_vars['class_color_msg']->value;?>
" id="num_scheda" colspan=4>Scheda n° <?php echo $_smarty_tpl->tpl_vars['idfamily']->value;?>
</td></tr>
            <?php if (count($_smarty_tpl->tpl_vars['arr_res']->value["img_lk"])==0){?>
                <tr><td>Scheda non trovata!</td></tr>
            <?php }else{ ?>
                <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_res']->value["img_lk"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['arr_res']->value["rr"][$_tmp1]=="on"){?>
                        <tr>
                            <?php if ($_smarty_tpl->tpl_vars['usephoto']->value){?>
                                <td class="lk"><img src="image_wrapper.php?url=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" alt="" /></td>
                            <?php }else{ ?>
                                <td class="lk">&nbsp;&nbsp;</td>
                            <?php }?>
                            <td class="lk"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["lname"][$_tmp2];?>
</td>
                            <td class="lk"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["fname"][$_tmp3];?>
</td>
                            <td><div class = "sexeta"></div></td>   
                            <td><img src="../styles/viewfamily/icons/freccia_sx.png" alt="" class="arrow" /></td>
                            <td><input type="hidden" class = "cf_tbox" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp4=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["cf"][$_tmp4];?>
" /></td>
                            <td><input type="hidden" class = "borndate_tbox" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp5=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["born"][$_tmp5];?>
" /></td>
                            <td><input type="hidden" class="pid" value=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp6=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["person_id"][$_tmp6];?>
 /></td>                 
                        </tr>
                    <?php }?>
                <?php } ?>

                <?php  $_smarty_tpl->tpl_vars['link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['link']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_res']->value["img_lk"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['link']->key => $_smarty_tpl->tpl_vars['link']->value){
$_smarty_tpl->tpl_vars['link']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['link']->key;
?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp7=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['arr_res']->value["rr"][$_tmp7]=="off"){?>
                        <tr>
                            <?php if ($_smarty_tpl->tpl_vars['usephoto']->value){?>
                                <td class="lk"><img src="image_wrapper.php?url=<?php echo $_smarty_tpl->tpl_vars['link']->value;?>
" alt="" /></td>
                            <?php }else{ ?>
                                <td class="lk">&nbsp;&nbsp;</td>
                            <?php }?>
                            <td class="lk"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp8=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["lname"][$_tmp8];?>
</td>
                            <td class="lk"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp9=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["fname"][$_tmp9];?>
</td>
                            <td><div class = "sexeta"></div></td>   
                            <td><img src="../styles/viewfamily/icons/freccia_sx.png" alt="" class="arrow" /></td>
                            <td><input type="hidden" class = "cf_tbox" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp10=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["cf"][$_tmp10];?>
" /></td>
                            <td><input type="hidden" class = "borndate_tbox" value="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp11=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["born"][$_tmp11];?>
" /></td>
                            <td><input type="hidden" class="pid" value=<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['index']->value;?>
<?php $_tmp12=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['arr_res']->value["person_id"][$_tmp12];?>
 /></td>                 
                        </tr>
                    <?php }?>
                <?php } ?>


                <tr>
                    <td colspan=2><button id="change">Modifica</button></td>
                    <td><button id="report">Report</button></td>
                </tr>
                <tr><td colspan=4><div class="msg_bottom">

                            <?php if ($_smarty_tpl->tpl_vars['note']->value!=''){?>
                                <b>Note:</b><br />
                                <textarea align = "top" rows = "2" cols = "45" readonly="readonly" style = "resize:none;"><?php echo $_smarty_tpl->tpl_vars['note']->value;?>
</textarea>
                            <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['str'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['str']->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['msg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['str']->key => $_smarty_tpl->tpl_vars['str']->value){
$_smarty_tpl->tpl_vars['str']->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars['str']->key;
?>
                                <p><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</p>
                            <?php } ?>   

                            <?php if (!empty($_smarty_tpl->tpl_vars['wmsg']->value)){?>  
                                <?php  $_smarty_tpl->tpl_vars['str'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['str']->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wmsg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['str']->key => $_smarty_tpl->tpl_vars['str']->value){
$_smarty_tpl->tpl_vars['str']->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars['str']->key;
?>
                                    <p class="yellow"><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</p>
                                <?php } ?>  
                            <?php }?>     

                            <?php  $_smarty_tpl->tpl_vars['str'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['str']->_loop = false;
 $_smarty_tpl->tpl_vars["index"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['emsg']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['str']->key => $_smarty_tpl->tpl_vars['str']->value){
$_smarty_tpl->tpl_vars['str']->_loop = true;
 $_smarty_tpl->tpl_vars["index"]->value = $_smarty_tpl->tpl_vars['str']->key;
?>
                                <p class="red"><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</p>
                            <?php } ?>  
                        </div></td></tr>
                    <?php }?>
            <tr><td colspan=3><input type="hidden" id="idfamily" value=<?php echo $_smarty_tpl->tpl_vars['idfamily']->value;?>
 /></td></tr>
            <tr><td colspan=3><input type="hidden" id="correct_selected_block" value=<?php echo $_smarty_tpl->tpl_vars['correct_selected_block']->value;?>
 /></td></tr>
        </table>

    </body>
</html>
<?php }} ?>