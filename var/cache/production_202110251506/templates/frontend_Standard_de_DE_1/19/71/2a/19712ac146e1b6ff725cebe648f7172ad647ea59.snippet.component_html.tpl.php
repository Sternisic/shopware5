<?php /* Smarty version Smarty-3.1.12, created on 2022-01-13 18:23:31
         compiled from "/var/www/html/shopwarefive/themes/Frontend/Bare/widgets/emotion/components/component_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:123672108061e060137c6801-65992146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '19712ac146e1b6ff725cebe648f7172ad647ea59' => 
    array (
      0 => '/var/www/html/shopwarefive/themes/Frontend/Bare/widgets/emotion/components/component_html.tpl',
      1 => 1635167232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123672108061e060137c6801-65992146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Data' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_61e060137cc068_72562162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e060137cc068_72562162')) {function content_61e060137cc068_72562162($_smarty_tpl) {?>
    <div class="emotion--html<?php if (!$_smarty_tpl->tpl_vars['Data']->value['needsNoStyling']){?> panel has--border<?php }?>">

        
            <?php if ($_smarty_tpl->tpl_vars['Data']->value['cms_title']){?>
                <div class="html--title<?php if (!$_smarty_tpl->tpl_vars['Data']->value['needsNoStyling']){?> panel--title is--underline<?php }?>">
                    <?php echo $_smarty_tpl->tpl_vars['Data']->value['cms_title'];?>

                </div>
            <?php }?>
        

        
            <div class="html--content<?php if (!$_smarty_tpl->tpl_vars['Data']->value['needsNoStyling']){?> panel--body is--wide<?php }?>">
                <?php echo $_smarty_tpl->tpl_vars['Data']->value['text'];?>

            </div>
        
    </div>
<?php }} ?>