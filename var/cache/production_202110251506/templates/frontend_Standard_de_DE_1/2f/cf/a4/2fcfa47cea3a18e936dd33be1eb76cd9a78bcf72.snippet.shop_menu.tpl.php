<?php /* Smarty version Smarty-3.1.12, created on 2022-01-13 18:23:30
         compiled from "/var/www/html/shopwarefive/themes/Frontend/Bare/widgets/index/shop_menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76206963161e06012e536e4-67186878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fcfa47cea3a18e936dd33be1eb76cd9a78bcf72' => 
    array (
      0 => '/var/www/html/shopwarefive/themes/Frontend/Bare/widgets/index/shop_menu.tpl',
      1 => 1635167232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76206963161e06012e536e4-67186878',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop' => 0,
    'languages' => 0,
    'language' => 0,
    'currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_61e06012e66f19_28306733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e06012e66f19_28306733')) {function content_61e06012e66f19_28306733($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_count')) include '/var/www/html/shopwarefive/engine/Library/Enlight/Template/Plugins/modifier.count.php';
?>

    <?php if ($_smarty_tpl->tpl_vars['shop']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
        <div class="top-bar--language navigation--entry">
            
                <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
                    <form method="post" class="language--form">
                        
                            <div class="field--select">
                                <?php if ($_smarty_tpl->tpl_vars['shop']->value&&smarty_modifier_count($_smarty_tpl->tpl_vars['languages']->value)>1){?>
                                    <div class="language--flag <?php echo $_smarty_tpl->tpl_vars['shop']->value->getLocale()->toString();?>
"><?php echo $_smarty_tpl->tpl_vars['shop']->value->getName();?>
</div>
                                <?php }?>
                                
                                    <div class="select-field">
                                        <select name="__shop" class="language--select" data-auto-submit="true">
                                            <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value->getId()===$_smarty_tpl->tpl_vars['shop']->value->getId()){?>selected="selected"<?php }?>>
                                                    <?php echo $_smarty_tpl->tpl_vars['language']->value->getName();?>

                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                
                                <input type="hidden" name="__redirect" value="1">
                                
                            </div>
                        
                    </form>
                <?php }?>
            
        </div>
    <?php }?>




    <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['currencies']->value)>1){?>
        <div class="top-bar--currency navigation--entry">
            
                <form method="post" class="currency--form">
                    
                        <div class="field--select">
                            
                                <div class="select-field">
                                    <select name="__currency" class="currency--select" data-auto-submit="true">
                                        <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value->getId();?>
"<?php if ($_smarty_tpl->tpl_vars['currency']->value->getId()===$_smarty_tpl->tpl_vars['shop']->value->getCurrency()->getId()){?> selected="selected"<?php }?>>
                                                <?php if ($_smarty_tpl->tpl_vars['currency']->value->getSymbol()!=$_smarty_tpl->tpl_vars['currency']->value->getCurrency()){?><?php echo $_smarty_tpl->tpl_vars['currency']->value->getSymbol();?>
 <?php }?><?php echo $_smarty_tpl->tpl_vars['currency']->value->getCurrency();?>

                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            
                        </div>
                    
                </form>
            
        </div>
    <?php }?>

<?php }} ?>