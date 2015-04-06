<?php /* Smarty version Smarty-3.1.5, created on 2015-02-14 15:35:22
         compiled from "tpl/products.tpl" */ ?>
<?php /*%%SmartyHeaderCode:202888172054df5d2ab65517-25111192%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '458fd3295b62cfc75f454280fd0921544511a7d4' => 
    array (
      0 => 'tpl/products.tpl',
      1 => 1414501210,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202888172054df5d2ab65517-25111192',
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
    'arr_in' => 0,
    'selectbox_options' => 0,
    'k' => 0,
    'elem' => 0,
    'nophoto' => 0,
    'encodedoptions' => 0,
    'prefix' => 0,
    'is_mobile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54df5d2ac801d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df5d2ac801d')) {function content_54df5d2ac801d($_smarty_tpl) {?><!DOCTYPE HTML> 
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

        <br />
        <center><div class = "sheet">
                <h2>Prodotti Agea</h2>
                <form id="form" name="add_product" method="POST" action="?" >
                    <table>
                        <tr><td><input type="hidden" name="Salva" value="" /></td></tr>
                        <?php if (!empty($_smarty_tpl->tpl_vars['arr_in']->value)){?>
                            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['xx'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['name'] = 'xx';
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['arr_in']->value["product_id"]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['xx']['total']);
?>

                                <tr>
                                    <td>
                                        <input type="hidden" name="modifiable[]" class="mtf_textfield hfield_modifiable" value="<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["modifiable"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" />
                                        <input type="hidden" name="product_id[]" id="product_id" value="<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["product_id"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" class = "mtf_textfield hfield_product_id" />
                                        <div class="photodiv"><img src="../styles/page/images/nophoto.png" alt="" /></div>
                                        <input type="hidden" name="imagelink[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["imagelink"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" class = "mtf_textfield hfield_imglink" />
                                    </td>
                                    <?php if ($_smarty_tpl->tpl_vars['arr_in']->value["modifiable"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']]==1){?>  
                                        <td><label>Prodotto<span class="red">*</span>:</label><br /><input type="text" name="product[]" class = "mtf_textfield product_name_tbox" value = "<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["product"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" id = "product[]"  /></td>
                                        <td><label>Qtà/unità<span class="red">*</span>:</label><br /><input type="text" name="qtyforunity[]" class = "mtf_textfield qta_tbox" value = "<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["qtyforunity"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" id = "qtyforunity[]"  /></td>
                                        <td><label>Qtà/unità<span class="red">*</span>:</label><br /><input type="text" name="qtyforunity2[]" class = "mtf_textfield qta_tbox" value = "<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["qtyforunity2"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" id = "qtyforunity2[]"  /></td>
                                        <td><label>Qtà/unità<span class="red">*</span>:</label><br /><input type="text" name="qtyforunity3[]" class = "mtf_textfield qta_tbox" value = "<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["qtyforunity3"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" id = "qtyforunity3[]"  /></td>
                                        <td><label>Unità di mis.<span class="red">*</span>:</label><br /><select name="measureunity[]" tabindex="4" class="mtf_textfield unity_tbox"><option value="selezionare">selezionare</option>
                                                <?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elem']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['selectbox_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value){
$_smarty_tpl->tpl_vars['elem']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['elem']->key;
?>
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['arr_in']->value["measureunity"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['k']->value==$_tmp1){?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['elem']->value;?>
</option>
                                                    <?php }else{ ?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['elem']->value;?>
</option>
                                                    <?php }?>
                                                <?php } ?>                
                                            </select></td>
                                    <?php }else{ ?>  <!-- se non modificabile -->
                                        <td><label>Prodotto<span class="red">*</span>:</label><br /><input disabled="disabled" type="text" tabindex="2" name="product[]" class = "mtf_textfield product_name_tbox" value = "<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["product"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" id = "product[]"  /></td>
                                        <td><label>Qtà/unità<span class="red">*</span>:</label><br /><input type="text" tabindex="3" name="qtyforunity[]" class = "mtf_textfield qta_tbox" value = "<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["qtyforunity"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" id = "qtyforunity[]"  /></td>
                                        
                                                <td><label>Qtà/unità<span class="red">*</span>:</label><br /><input type="text" name="qtyforunity2[]" class = "mtf_textfield qta_tbox" value = "<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["qtyforunity2"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" id = "qtyforunity2[]"  /></td>
                                                <td><label>Qtà/unità<span class="red">*</span>:</label><br /><input type="text" name="qtyforunity3[]" class = "mtf_textfield qta_tbox" value = "<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["qtyforunity3"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" id = "qtyforunity3[]"  /></td>   
                                            <td><label>Unità di mis.<span class="red">*</span>:</label><br /><select disabled="disabled" name="measureunity[]" tabindex="4" class="mtf_textfield unity_tbox"><option value="selezionare">selezionare</option>   
                                                <?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elem']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['selectbox_options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value){
$_smarty_tpl->tpl_vars['elem']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['elem']->key;
?>
                                                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['arr_in']->value["measureunity"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['k']->value==$_tmp2){?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['elem']->value;?>
</option>
                                                    <?php }else{ ?>
                                                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['elem']->value;?>
</option>
                                                    <?php }?>
                                                <?php } ?>                
                                            </select></td>
                                        <?php }?>
                                    <td class="rrr1">
                                        <center>
                                            <label>Vis. Bl.&nbsp;</label><br />
                                            <input type="hidden" class="rr" name="rr[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["rr"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" />       
                                            <?php if ($_smarty_tpl->tpl_vars['arr_in']->value["rr"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']]=='off'){?>
                                                <input type="checkbox" class="rr_check" title="Indica se visualizzare il prodotto sul blocchetto consegne" /> 
                                            <?php }else{ ?>
                                                <input type="checkbox" class="rr_check" checked="checked" title="Indica se visualizzare il prodotto sul blocchetto consegne" />
                                            <?php }?>
                                        </center>
                                    </td>
                                        <td class="rrr2">
                                        <center>
                                            <label>Vis.Reg.&nbsp;</label><br />
                                            <input type="hidden" class="rr2" name="rr2[]" value="<?php echo $_smarty_tpl->tpl_vars['arr_in']->value["rr2"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']];?>
" />       
                                            <?php if ($_smarty_tpl->tpl_vars['arr_in']->value["rr2"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']]=='off'){?>
                                                <input type="checkbox" class="rr_check2" title="Indica se visualizzare il prodotto nei registri AGEA" /> 
                                            <?php }else{ ?>
                                                <input type="checkbox" class="rr_check2" checked="checked" title="Indica se visualizzare il prodotto nei registri AGEA" />
                                            <?php }?>
                                        </center>
                                    </td>
                                    <td>
                                        <?php if ($_smarty_tpl->tpl_vars['arr_in']->value["modifiable"][$_smarty_tpl->getVariable('smarty')->value['section']['xx']['index']]==1){?>
                                            <input type="button" class="rem" value="X" title="Rimuove riga" />
                                        <?php }?>
                                    </td>

                                </tr> 

                            <?php endfor; endif; ?>
                        <?php }?>  <!-- close if !empty -->
                        <tr>
                            <td><div id="refdiv"></div></td>
                        </tr>
                        <tr>
                            <td colspan=2></td>
                            <td><input type="button" id="addrow" value="Aggiungi" /></td>
                            <td><input type="button" id="submit_btn" value="Salva" /></td>
                            <td><input type="button" name="Annulla" id="Annulla" value="Annulla"  /></td>
                        </tr>
                        <tr>
                            <td><div id = "saved_msg">Dati salvati!</div></td>
                        </tr>
                    </table></form></div>
        </center><div id = "content_webcam"></div>
        <input type="hidden" id="nophoto" value="<?php echo $_smarty_tpl->tpl_vars['nophoto']->value;?>
" /> <!-- serve al plugin webcam per conoscere il link dell' icona foto assente. -->
        <input type="hidden" id="encodedoptions" value=<?php echo $_smarty_tpl->tpl_vars['encodedoptions']->value;?>
 /> <!-- serve a product.js per conoscere le opzioni della selectbox -->
        <input type="hidden" id="prefix" value="<?php echo $_smarty_tpl->tpl_vars['prefix']->value;?>
" /> <!-- prefisso per path immagini upload -->
        <?php if (!$_smarty_tpl->tpl_vars['is_mobile']->value){?>
            <p>Vis. Bl Indica di visualizzare l' icona per la compilazione blocchetto consegne</p>
            <p>Vis. Reg. Indica di visualizzare il prodotto nei registri Agea</p>
            <p>(Per inserire la foto cliccare su "NO FOTO" una volta aggiunta la riga)</p>
            <p>(Qtà/unità indica la quantità minima di prodotto distribuibile; l'unità di misura deve essere quella che vogliamo nei report)</p>
            <p>Qtà/unità sono 3 campi. Vanno compilati da sinistra verso destra. In quelli non utilizzati inserire 0</p>
        <?php }?>
    </body>
</html>
<?php }} ?>