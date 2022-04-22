<?php /* Smarty version Smarty-3.1.12, created on 2022-01-13 18:24:18
         compiled from "/var/www/html/shopwarefive/themes/Frontend/Bare/widgets/captcha/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:169334696261e060425f53a8-20199278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68e591685fa0f928be1879326433ec8fd0de9b85' => 
    array (
      0 => '/var/www/html/shopwarefive/themes/Frontend/Bare/widgets/captcha/default.tpl',
      1 => 1635167232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '169334696261e060425f53a8-20199278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'img' => 0,
    'sErrorFlag' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_61e060425fe7d1_87250783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e060425fe7d1_87250783')) {function content_61e060425fe7d1_87250783($_smarty_tpl) {?>
    <div class="review--captcha">
        
            <div class="captcha--placeholder"><img src="data:image/png;base64,<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
"/></div>
        

        
            <strong class="captcha--notice"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'DetailCommentLabelCaptcha','namespace'=>'widgets/captcha/default')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailCommentLabelCaptcha','namespace'=>'widgets/captcha/default'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bitte geben Sie die Zeichenfolge in das nachfolgende Textfeld ein.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'DetailCommentLabelCaptcha','namespace'=>'widgets/captcha/default'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</strong>
        

        
            <div class="captcha--code">
                <input type="text" name="sCaptcha" class="review--field<?php if ($_smarty_tpl->tpl_vars['sErrorFlag']->value['sCaptcha']){?> has--error<?php }?>" required="required" aria-required="true"/>
            </div>
        
    </div>
<?php }} ?>