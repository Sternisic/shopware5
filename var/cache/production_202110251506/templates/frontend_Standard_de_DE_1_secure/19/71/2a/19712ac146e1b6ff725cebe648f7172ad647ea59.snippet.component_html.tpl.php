<?php /* Smarty version Smarty-3.1.12, created on 2022-03-07 09:43:11
         compiled from "/var/www/html/shopwarefive/themes/Frontend/Bare/widgets/emotion/components/component_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7287114396225c59f0c7930-05208161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '7287114396225c59f0c7930-05208161',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Data' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6225c59f0d9bc8_16926610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6225c59f0d9bc8_16926610')) {function content_6225c59f0d9bc8_16926610($_smarty_tpl) {?>
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