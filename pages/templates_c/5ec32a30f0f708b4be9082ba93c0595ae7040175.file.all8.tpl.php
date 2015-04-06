<?php /* Smarty version Smarty-3.1.5, created on 2015-02-14 23:36:38
         compiled from "tpl/all8.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77248513354dfcdf69bd995-79180208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec32a30f0f708b4be9082ba93c0595ae7040175' => 
    array (
      0 => 'tpl/all8.tpl',
      1 => 1415824722,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77248513354dfcdf69bd995-79180208',
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
    'arr_products' => 0,
    'nome_struttura' => 0,
    'reg_ue' => 0,
    'pagen' => 0,
    'i' => 0,
    'myitem' => 0,
    'arr_view' => 0,
    'mykey' => 0,
    'start_index_cons' => 0,
    'init_registri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54dfcdf6b1ff1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dfcdf6b1ff1')) {function content_54dfcdf6b1ff1($_smarty_tpl) {?><!DOCTYPE HTML> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Allegato 3</title>
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
    </head>
    <body>
        <?php echo smarty_function_menu(array('data'=>$_smarty_tpl->tpl_vars['menu']->value,'class'=>"admin_menu noprint"),$_smarty_tpl);?>
 
        <form id="inputform" name="inputform" action="#" method="post">
            <?php  $_smarty_tpl->tpl_vars['myitem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['myitem']->_loop = false;
 $_smarty_tpl->tpl_vars['mykey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['myitem']->key => $_smarty_tpl->tpl_vars['myitem']->value){
$_smarty_tpl->tpl_vars['myitem']->_loop = true;
 $_smarty_tpl->tpl_vars['mykey']->value = $_smarty_tpl->tpl_vars['myitem']->key;
?> 
                <table class="header_table">
                    <tr>         
                        <td class="leftcol">STRUTTURA CARITATIVA<br /><?php echo $_smarty_tpl->tpl_vars['nome_struttura']->value;?>
</td>
                        <td class="centercol">REGISTRO DI CARICO E SCARICO<br />dei prodotti alimentari assegnati ai sensi del Reg. (UE)<?php echo $_smarty_tpl->tpl_vars['reg_ue']->value;?>
</td>
                        <td class="rightcol"><a href="all3.php?opt=prev"><img src="../styles/allegati/icons/arrow_sx.png" alt="Prec." class="noprint" id="isx" /></a>Pag. <?php echo $_smarty_tpl->tpl_vars['pagen']->value;?>
<a href="all3.php?opt=next"><img src="../styles/allegati/icons/arrow_dx.png" alt="Succ." class="noprint" id="idx" /></a></td>
                    </tr>

                </table>

                <table class="all8" cellspacing="0">
                    <thead>                  
                        <tr>              
                            <th colspan="2" class="thdoccons">DOC. CONSEGNA</th> 
                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 2+1 - (0) : 0-(2)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['myitem']->value[$_smarty_tpl->tpl_vars['i']->value])){?>
                                    <th colspan="4"><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['myitem']->value[$_tmp1]["nameproduct"];?>
&nbsp;</th>
                                    <?php }else{ ?>
                                    <th colspan="4">&nbsp;</th>
                                    <?php }?>
                                <?php }} ?>

                            <th rowspan="2">n. indigenti</th>                                 
                        </tr>
                        <tr>
                            <th class="thdata">data</th><th class="thnum">N</th><th class="nodx">unità m.</th><th class="nodx">carico</th><th class="nodx">scarico</th><th>giac.za</th><th class="nodx">unità m.</th><th class="nodx">carico</th><th class="nodx">scarico</th><th>giac.za</th><th class="nodx">unità m.</th><th class="nodx">carico</th><th class="nodx">scarico</th><th>giac.za</th>
                        </tr>
                    </thead>
                    <tbody>

                              <?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elem']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_view']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value){
$_smarty_tpl->tpl_vars['elem']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['elem']->key;
?>
                        <tr class="n<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['mykey']->value==0){?>
                        <td><input type="hidden" class="isload" name="isload[]" value="0" /><input type="text" name="data[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value]["date"];?>
" class="date" readonly="readonly" /></td>
                        <td><input type="text" name="num_consegna[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value]["numrif"];?>
" class="other num_cons" autocomplete="off" /></td>
                        <?php }else{ ?>
                        <td><input type="hidden" class="isload" name="isload[]" value="0" /><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value]["date"];?>
" class="date" readonly="readonly" /></td>
                        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value]["numrif"];?>
 " class="other num_cons" autocomplete="off" /></td>
                        <?php }?>
                        <td class="nodx"><input type="text" prodid="unitam_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[0]["idproduct"];?>
[]" value="" class="other unitam" readonly="readonly" /></td>
                        <td class="nodx"><input type="text" name="carico_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[0]["idproduct"];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['myitem']->value[0]["idproduct"]]["carico"];?>
" class="other load" autocomplete="off" /></td>
                        <td class="nodx"><input type="text" name="scarico_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[0]["idproduct"];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['myitem']->value[0]["idproduct"]]["scarico"];?>
" class="other" autocomplete="off" /></td>
                        <td><input type="text" name="giacza_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[0]["idproduct"];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['myitem']->value[0]["idproduct"]]["giacza"];?>
" class="other" autocomplete="off" /></td>
                        <?php if ($_smarty_tpl->tpl_vars['myitem']->value[1]["idproduct"]=="0"){?>
                        <td class="nodx"><input type="text" class="other unitam" value="" readonly="readonly" /></td>
                        <td class="nodx"><input type="text" class="other load" value="" readonly="readonly" /></td>
                        <td class="nodx"><input type="text" class="other" value="" readonly="readonly" /></td>
                        <td><input type="text" class="other" value="" readonly="readonly" /></td>
                        <?php }else{ ?>
                        <td class="nodx"><input type="text" prodid="unitam_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[1]["idproduct"];?>
[]" value="" class="other unitam" readonly="readonly" /></td>
                        <td class="nodx"><input type="text" name="carico_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[1]["idproduct"];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['myitem']->value[1]["idproduct"]]["carico"];?>
" class="other load" autocomplete="off" /></td>
                        <td class="nodx"><input type="text" name="scarico_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[1]["idproduct"];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['myitem']->value[1]["idproduct"]]["scarico"];?>
" class="other" autocomplete="off" /></td>
                        <td><input type="text" name="giacza_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[1]["idproduct"];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['myitem']->value[1]["idproduct"]]["giacza"];?>
" class="other" autocomplete="off" /></td>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['myitem']->value[2]["idproduct"]=="0"){?>
                        <td class="nodx"><input type="text" class="other unitam" value="" readonly="readonly" /></td>
                        <td class="nodx"><input type="text" class="other load" value="" readonly="readonly" /></td>
                        <td class="nodx"><input type="text" class="other" value="" readonly="readonly" /></td>
                        <td><input type="text" class="other" value="" readonly="readonly" /></td>
                        <?php }else{ ?>
                        <td class="nodx"><input type="text" prodid="unitam_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[2]["idproduct"];?>
[]" value="" class="other unitam" readonly="readonly" /></td>
                        <td class="nodx"><input type="text" name="carico_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[2]["idproduct"];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['myitem']->value[2]["idproduct"]]["carico"];?>
" class="other load" autocomplete="off" /></td>
                        <td class="nodx"><input type="text" name="scarico_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[2]["idproduct"];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['myitem']->value[2]["idproduct"]]["scarico"];?>
" class="other" autocomplete="off" /></td>
                        <td><input type="text" name="giacza_<?php echo $_smarty_tpl->tpl_vars['myitem']->value[2]["idproduct"];?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value][$_smarty_tpl->tpl_vars['myitem']->value[2]["idproduct"]]["giacza"];?>
" class="other" autocomplete="off" /></td>
                        <?php }?> 
    
                        <?php if ($_smarty_tpl->tpl_vars['mykey']->value==0){?>
                        <td><input type="text" name="num_indig[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value]["numindig"];?>
" class="num_indig" autocomplete="off" /></td>
                        <?php }else{ ?>
                        <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['arr_view']->value[$_smarty_tpl->tpl_vars['i']->value]["numindig"];?>
" class="num_indig" autocomplete="off" /></td>
                        <?php }?>
                        </tr>
                        <?php } ?> 
                    </tbody>
                </table>
                <input type="submit" class="noprint" name="esportapdf" value="PDF" />
                <div class="div_bottom">TIMBRO DELLA STRUTTURA CARITATIVA E FIRMA DEL LEGALE RAPPRESENTANTE</div>
            <?php } ?> 
            <input type="submit" class="btn_save noprint" value="SALVA" />
            <!--<a href="#" class="noprint" id="print" onclick="window.print();return false;"><img src="../styles/allegati/icons/print.png" alt="Stampa documento" title="Stampa il documento" /></a>-->

            <input type="hidden" id="start_index_cons" value="<?php echo $_smarty_tpl->tpl_vars['start_index_cons']->value;?>
" />
            <input type="hidden" id="init_registri" value="<?php echo $_smarty_tpl->tpl_vars['init_registri']->value;?>
" />
        </form>
    </body>
</html>
<?php }} ?>