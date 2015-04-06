<?php /* Smarty version Smarty-3.1.5, created on 2015-04-03 14:11:35
         compiled from "tpl/all9.tpl" */ ?>
<?php /*%%SmartyHeaderCode:102348940454dd36aeaa3d25-86319063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '120086de6aef5c05c59b60441c94f1264a3ec6ea' => 
    array (
      0 => 'tpl/all9.tpl',
      1 => 1428063091,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102348940454dd36aeaa3d25-86319063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_54dd36aeb58b9',
  'variables' => 
  array (
    'arr_style_config' => 0,
    'linkcss' => 0,
    'arr_js_config' => 0,
    'linkjs' => 0,
    'menu' => 0,
    'arr_dbget' => 0,
    'num_all_9' => 0,
    'date' => 0,
    'female' => 0,
    'arr_out' => 0,
    'elem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dd36aeb58b9')) {function content_54dd36aeb58b9($_smarty_tpl) {?><!DOCTYPE HTML> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
    <head>
        <title>Allegato 6</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="generator" content="NetMDM" />
        <link rel="stylesheet" href="../styles/allegati/print.css" type="text/css" media="print" />
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

        
        <p class="dx alleg">Allegato n. 6</p>
        <div id="title">
            <p>AIUTI UE - REG. UE <?php echo $_smarty_tpl->tpl_vars['arr_dbget']->value["reg_ue"];?>
</p>
            <p>DICHIARAZIONE DI CONSEGNA AGLI INDIGENTI DI PRODOTTI ALIMENTARI GRATUITI</p>

                <div id="left">
                    <table class="tableup">
                        <tr>
                    <td class="noborderdx">NUMERO</td>
                    <td><input type="text" id="num" readonly="readonly" value="<?php echo $_smarty_tpl->tpl_vars['num_all_9']->value;?>
" /></td>
                        </tr>
                    </table>
                </div>
                <div id="right">
                    <table class="tableup">
                        <tr>
                    <td class="noborderdx">DATA</td>
                    <td><input type="text" id="date" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" /></td>
                        </tr>
                    </table>
                </div>
            </div>
        
        <div id="contentdiv">
            <?php if ($_smarty_tpl->tpl_vars['female']->value){?>
            <p class="p1">La sottoscritta <?php echo $_smarty_tpl->tpl_vars['arr_dbget']->value["legalerappresentante"];?>
<br />
                 Nata a 
                <?php }else{ ?>
                    <p class="p1">Il sottoscritto <?php echo $_smarty_tpl->tpl_vars['arr_dbget']->value["legalerappresentante"];?>
<br />
                         Nato a 
                    <?php }?>
           <?php echo $_smarty_tpl->tpl_vars['arr_dbget']->value["luogodinascita"];?>
 il <?php echo $_smarty_tpl->tpl_vars['arr_dbget']->value["datadinascita"];?>
<br />
            In qualità di legale rappresentante del <?php echo $_smarty_tpl->tpl_vars['arr_dbget']->value["nomesede"];?>
<br />
            Con sede a <?php echo $_smarty_tpl->tpl_vars['arr_dbget']->value["indirizzosede"];?>
<br />
            <?php echo $_smarty_tpl->tpl_vars['arr_dbget']->value["corpo_all9"];?>

            </p>
            <p id="dich">DICHIARA</p>
            <p>A) che rappresentanti della struttura di cui in premessa, da me delegati, hanno distribuito in data </p><p>odierna, a n. <span id="num_indig"><?php echo $_smarty_tpl->tpl_vars['arr_out']->value["serv_indigenti"];?>
</span> indigenti i seguenti prodotti: </p>
            <div id="distr3">
                <table cellspacing=0 width=100%<?php ?>>
                    <tr>
                        <th class="noborderdx">PRODOTTO</th>
                        <th class="noborderdx">Unit&agrave; di misura</th>
                        <th>QUANTITA'</th>
                    </tr>
            <?php  $_smarty_tpl->tpl_vars['elem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['elem']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['arr_out']->value["products"]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['elem']->key => $_smarty_tpl->tpl_vars['elem']->value){
$_smarty_tpl->tpl_vars['elem']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['elem']->key;
?>
                <tr>
                <td class="td1 nobordertop noborderdx"><?php echo $_smarty_tpl->tpl_vars['elem']->value['name_product'];?>
</td>
                <td class="centred nobordertop noborderdx"><?php echo $_smarty_tpl->tpl_vars['elem']->value['measureunity'];?>
</td>
                <td class="centred nobordertop"><?php echo sprintf("%g",$_smarty_tpl->tpl_vars['elem']->value['qty']);?>
</td>
                </tr>
                <?php } ?>
                </table>
            </div>
            <p class="p1">B) Che i su indicati prodotti vengono riportati nel registro di carico e scarico.<br />
            Allego fotocopia integrale, fronte e retro di un documento di identità in corso di validità.</p>
            <p class="centred">TIMBRO DELL' ENTE CARITATIVO E FIRMA DEL LEGALE RAPPRESENTANTE</p>
        </div>
            <form id="inputform" name="inputform" action="#" method="post">
<input type="submit" class="noprint" name="esportapdf" value="SALVA" />
</form>
            <!-- <a href="#" class="noprint" id="print" onclick="window.print();return false;"><img src="../styles/allegati/icons/print.png" alt="Stampa documento" title="Stampa il documento" /></a> -->
     <p class="noprint">*Cliccare sulla data per accedere ad un Allegato 6 con data differente.</p> 
    </body>
</html><?php }} ?>