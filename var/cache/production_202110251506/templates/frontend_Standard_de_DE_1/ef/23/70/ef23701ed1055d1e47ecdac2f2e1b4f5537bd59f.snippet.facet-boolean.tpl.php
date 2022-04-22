<?php /* Smarty version Smarty-3.1.12, created on 2022-01-13 18:25:21
         compiled from "/var/www/html/shopwarefive/themes/Frontend/Bare/frontend/listing/filter/facet-boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170383016061e060819cf0a9-07313526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef23701ed1055d1e47ecdac2f2e1b4f5537bd59f' => 
    array (
      0 => '/var/www/html/shopwarefive/themes/Frontend/Bare/frontend/listing/filter/facet-boolean.tpl',
      1 => 1635167232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170383016061e060819cf0a9-07313526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_61e060819d85b1_44716590',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61e060819d85b1_44716590')) {function content_61e060819d85b1_44716590($_smarty_tpl) {?>


    <div class="filter-panel filter--value facet--<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFacetName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
         data-filter-type="value"
         data-facet-name="<?php echo $_smarty_tpl->tpl_vars['facet']->value->getFacetName();?>
"
         data-field-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">

        
            <div class="filter-panel--flyout">

                
                    <label class="filter-panel--title" for="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
" title="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>

                    </label>
                

                
                    <span class="filter-panel--input filter-panel--checkbox">
                        <input type="checkbox"
                               id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
                               name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
                               value="1"
                               <?php if ($_smarty_tpl->tpl_vars['facet']->value->isActive()){?>checked="checked" <?php }?>/>

                        <span class="input--state checkbox--state">&nbsp;</span>
                    </span>
                
            </div>
        
    </div>

<?php }} ?>