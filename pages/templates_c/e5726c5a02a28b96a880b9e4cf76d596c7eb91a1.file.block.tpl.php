<?php /* Smarty version Smarty-3.1.5, created on 2015-02-13 00:15:35
         compiled from "tpl/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207520156554dd3417a73ca8-29175163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5726c5a02a28b96a880b9e4cf76d596c7eb91a1' => 
    array (
      0 => 'tpl/block.tpl',
      1 => 1423438413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207520156554dd3417a73ca8-29175163',
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
    'msg' => 0,
    'family_id' => 0,
    'link_last_distr' => 0,
    'linktext' => 0,
    'arr_products' => 0,
    'myitem' => 0,
    'arr_products_banco' => 0,
    'otherinfo' => 0,
    'person_name' => 0,
    'address' => 0,
    'nome_struttura' => 0,
    'mykey' => 0,
    'person_id' => 0,
    'sheet_id' => 0,
    'init_registri' => 0,
    'dataemiss' => 0,
    'signature_block' => 0,
    'num_indig' => 0,
    'config_start_blocksheet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54dd3417bcd15',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dd3417bcd15')) {function content_54dd3417bcd15($_smarty_tpl) {?><!DOCTYPE HTML> 
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
        <link rel="stylesheet" href="../styles/block/print.css" type="text/css" media="print" />
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
  
        <table>
            <tr>
                <td colspan=5 id="msg" class="noprint"><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</td>
                <td rowspan=3 class="noprint">
                    <a href="viewfamily?fid=<?php echo $_smarty_tpl->tpl_vars['family_id']->value;?>
" class="icolink"><img src="../styles/page/images/back.png" alt="Torna indietro" /></a>
                </td>
            </tr>
            <tr><td colspan=5 class="noprint"><input type="button" id="removedistr" value="Rimuovi Distribuzione" /></td></tr>
            <tr><td class="noprint linktext"  id="gotolast"><a href="<?php echo $_smarty_tpl->tpl_vars['link_last_distr']->value;?>
" ><?php echo $_smarty_tpl->tpl_vars['linktext']->value;?>
</a></td>
            </tr>
            <tr><td><div id="saved_msg">Dati Salvati!</div></td></tr>
            <tr>
                <td>
                    <div class="noprint" id="blockbtn">              
                        <div class="btn-group noprint">
                            <button class="btn btnlista1" title="copia da una lista precedentemente salvata">Lista 1</button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li id="mem1">Memorizza</li>
                            </ul>
                        </div>
                        <div class="btn-group noprint">   
                            <input class="btn scorsa" type="button" value="Scorsa"  title="Copia dall' ultima distribuzione effettuata alla stessa famiglia" />
                        </div>  
                        <div class="pagination noprint">
                            <ul>
                                <li><span id="sw_banco">DONAZIONI</span></li>
                                <li class="active"><span id="sw_agea">AGEA</span></li>  
                            </ul>
                        </div>       
                    </div>  <!-- chiusura drag pulsanti  -->
                </td>
            </tr>
            <tr>
                <td colspan=2 class="noprint">
                    <ul class="blockicons b_agea" id="blockagea">
                        <?php  $_smarty_tpl->tpl_vars["myitem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["myitem"]->_loop = false;
 $_smarty_tpl->tpl_vars["mykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["myitem"]->key => $_smarty_tpl->tpl_vars["myitem"]->value){
$_smarty_tpl->tpl_vars["myitem"]->_loop = true;
 $_smarty_tpl->tpl_vars["mykey"]->value = $_smarty_tpl->tpl_vars["myitem"]->key;
?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['myitem']->value["rr"];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=="on"){?>
                                <li><div class="item" product_id="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" qtyforunity="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["qtyforunity"];?>
">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['myitem']->value["imagelink"];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2!=''){?>
                                            <img class="photoproduct" src="../Personal/PhotoProducts/<?php echo $_smarty_tpl->tpl_vars['myitem']->value["imagelink"];?>
" alt="" /><br />
                                        <?php }?>
                                        <p class="product_name"><?php echo $_smarty_tpl->tpl_vars['myitem']->value["product"];?>
<br /><?php echo $_smarty_tpl->tpl_vars['myitem']->value["qtyforunity"];?>
 <?php echo $_smarty_tpl->tpl_vars['myitem']->value["measureunity"];?>
</p>
                                    </div></li>
                                <?php }?>
                            <?php } ?>    
                    </ul>
                </td></tr>
            <tr>
                <td colspan=2 class="noprint">
                    <ul class="blockicons b_banco" id="blockbanco">
                        <?php  $_smarty_tpl->tpl_vars["myitem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["myitem"]->_loop = false;
 $_smarty_tpl->tpl_vars["mykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_products_banco']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["myitem"]->key => $_smarty_tpl->tpl_vars["myitem"]->value){
$_smarty_tpl->tpl_vars["myitem"]->_loop = true;
 $_smarty_tpl->tpl_vars["mykey"]->value = $_smarty_tpl->tpl_vars["myitem"]->key;
?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['myitem']->value["rr"];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3=="on"){?>
                                <li><div class="item" product_id="banco_<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" qtyforunity="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["qtyforunity"];?>
">
                                        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['myitem']->value["imagelink"];?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp4!=''){?>
                                            <img src="../Personal/PhotoProducts/<?php echo $_smarty_tpl->tpl_vars['myitem']->value["imagelink"];?>
" alt="" /><br />
                                        <?php }?>
                                        <p class="product_name"><?php echo $_smarty_tpl->tpl_vars['myitem']->value["product"];?>
<br /><?php echo $_smarty_tpl->tpl_vars['myitem']->value["qtyforunity"];?>
<?php echo $_smarty_tpl->tpl_vars['myitem']->value["measureunity"];?>
</p>
                                    </div></li>
                                <?php }?>
                            <?php } ?>    
                    </ul>
                </td></tr>  
            <tr><td colspan=3>
                    <div class="draggable" id="blocktableout">
                        <form id="blockform" class="sigPad" name="blockform" method="POST" action="?" >
                            <table class="tableout tout_agea" cellpadding=0 cellspacing=0>
                                <tbody>
                                    <tr><td colspan=4 id="numb">Scheda n° <?php echo $_smarty_tpl->tpl_vars['family_id']->value;?>
<input type="hidden" id="num_scheda" value="<?php echo $_smarty_tpl->tpl_vars['family_id']->value;?>
" /></td></tr>
                                    <tr><td colspan=4 id="otherinfo"><?php echo $_smarty_tpl->tpl_vars['otherinfo']->value;?>
</td></tr>
                                    <tr><td colspan=4 id="person_name">Spett.le <?php echo $_smarty_tpl->tpl_vars['person_name']->value;?>
</td></tr>
                                    <tr><td colspan=4 id="address"><?php echo $_smarty_tpl->tpl_vars['address']->value;?>
</td></tr>
                                    <tr><td colspan=4 id="intestazione"><?php echo $_smarty_tpl->tpl_vars['nome_struttura']->value;?>
<br />Prodotti gratuiti non commerciabili</td></tr>

                                    <?php  $_smarty_tpl->tpl_vars["myitem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["myitem"]->_loop = false;
 $_smarty_tpl->tpl_vars["mykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["myitem"]->key => $_smarty_tpl->tpl_vars["myitem"]->value){
$_smarty_tpl->tpl_vars["myitem"]->_loop = true;
 $_smarty_tpl->tpl_vars["mykey"]->value = $_smarty_tpl->tpl_vars["myitem"]->key;
?>
                                        <?php if (substr($_smarty_tpl->tpl_vars['mykey']->value,-1)!="a"&&substr($_smarty_tpl->tpl_vars['mykey']->value,-1)!="b"){?>
                                            <tr class="rowp">
                                                <td><input type="hidden" name="product_id[]" class="out_product_id" value="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" /></td>
                                                <td><input type="text" readonly="readonly" name="qtytot[]" class="out_qtytot" product_id="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" value="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["qtytot"];?>
" /></td>
                                                <td><input type="text" readonly="readonly" class="out_measure_unity" product_id="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" value="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["measureunity"];?>
" /></td>
                                                <td><input type="text" readonly="readonly" class="out_product_name" product_id="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" value="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product"];?>
" /></td>
                                                <td class="noprint"><input type="button" value="X" class="X" /></td>
                                            </tr>
                                        <?php }?>
                                    <?php } ?>    
                                </tbody>
                            </table>
                            <center>&nbsp;&nbsp;(Sopra &uarr; Viveri Agea, sotto &darr; Viveri donazioni)</center>
                            <table class="tableout tout_banco" cellpadding=0 cellspacing=0>
                                <tbody>
                                    <?php  $_smarty_tpl->tpl_vars["myitem"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["myitem"]->_loop = false;
 $_smarty_tpl->tpl_vars["mykey"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_products_banco']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["myitem"]->key => $_smarty_tpl->tpl_vars["myitem"]->value){
$_smarty_tpl->tpl_vars["myitem"]->_loop = true;
 $_smarty_tpl->tpl_vars["mykey"]->value = $_smarty_tpl->tpl_vars["myitem"]->key;
?>
                                        <?php if (substr($_smarty_tpl->tpl_vars['mykey']->value,-1)!="a"&&substr($_smarty_tpl->tpl_vars['mykey']->value,-1)!="b"){?>
                                        <tr class="rowp">
                                            <td><input type="hidden" name="product_id[]" class="out_product_id" value="banco_<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" /></td>
                                            <td><input type="text" readonly="readonly" name="qtytot[]" class="out_qtytot" product_id="banco_<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" value="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["qtytot"];?>
" /></td>
                                            <td><input type="text" readonly="readonly" class="out_measure_unity" product_id="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" value="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["measureunity"];?>
" /></td>
                                            <td><input type="text" readonly="readonly" class="out_product_name" product_id="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product_id"];?>
" value="<?php echo $_smarty_tpl->tpl_vars['myitem']->value["product"];?>
" /></td>
                                            <td class="noprint"><input type="button" value="X" class="X" /></td>
                                        </tr>
                                        <?php }?>
                                            <?php } ?>    
                                            </tbody>
                                        </table>

                                        <input type="hidden" name="person_id" value="<?php echo $_smarty_tpl->tpl_vars['person_id']->value;?>
" />
                                        <input type="hidden" id="modifiable" name="modifiable" value="1" />
                                        <input type="hidden" id="sheetId" name="sheetId" value="<?php echo $_smarty_tpl->tpl_vars['sheet_id']->value;?>
" />

                                        <?php if ($_smarty_tpl->tpl_vars['init_registri']->value==1){?>
                                            <label id="label_date" class="noprint">Data distribuzione:</label><input type="text" name="date" class="noprint" value="" id="date" size="3" />      
                                        <?php }else{ ?> 
                                            <input type="hidden" name="date" class="noprint" value="<?php echo $_smarty_tpl->tpl_vars['dataemiss']->value;?>
" id="date" /> 
                                        <?php }?> 

                                        <div id="content2"> 
                                            <?php if ($_smarty_tpl->tpl_vars['signature_block']->value==1){?>  
                                                <span id="signature_field">....................................................&nbsp;&nbsp;<br /></span>
                                            <?php }?> 
                                            <input type="hidden" id="num_indig" name="num_indig" value="<?php echo $_smarty_tpl->tpl_vars['num_indig']->value;?>
" />
                                            <input type="hidden" id="usesignature" value="<?php echo $_smarty_tpl->tpl_vars['signature_block']->value;?>
" />
                                            <input type="submit" id="Salva" class="noprint" name="Salva" value="Salva" />
                                            <img src="../styles/block/icons/loading.gif" class="noprint" id="img_wait" alt="Attendere..." title="" />
                                            <a href="#" class="noprint" id="print" title="Stampa la ricevuta"><img src="../styles/block/icons/print.png" class="noprint" alt="stampa" /></a>
                                        </div>
                                    </form> 
                                    <input type="hidden" id="config_start_blocksheet" value="<?php echo $_smarty_tpl->tpl_vars['config_start_blocksheet']->value;?>
" />
                                </div>
                            </td></tr>
                    </table> 
                    <div id="footer"></div>
                </body>
            </html>
<?php }} ?>