<?php /* Smarty version Smarty-3.1.12, created on 2022-03-07 09:43:08
         compiled from "/var/www/html/shopwarefive/themes/Frontend/Bare/widgets/checkout/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7191746326225c59c874871-57742412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b791ebee316ac74f974436d5893e340fb0bb5043' => 
    array (
      0 => '/var/www/html/shopwarefive/themes/Frontend/Bare/widgets/checkout/info.tpl',
      1 => 1635167232,
      2 => 'file',
    ),
    'e0ef71579f28e81d2c7f0acadbd6906afbd5d54c' => 
    array (
      0 => '/var/www/html/shopwarefive/themes/Frontend/Bare/frontend/account/sidebar.tpl',
      1 => 1635167232,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '7191746326225c59c874871-57742412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'snippetIndexLinkNotepad' => 0,
    'sNotesQuantity' => 0,
    'sOneTimeAccount' => 0,
    'userInfo' => 0,
    'snippetIndexLinkCart' => 0,
    'sUserLoggedIn' => 0,
    'sBasketQuantity' => 0,
    'sBasketAmount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_6225c59ca71c33_77569639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6225c59ca71c33_77569639')) {function content_6225c59ca71c33_77569639($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/var/www/html/shopwarefive/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

    <li class="navigation--entry entry--notepad" role="menuitem">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkNotepad','assign'=>'snippetIndexLinkNotepad')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkNotepad','assign'=>'snippetIndexLinkNotepad'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merkzettel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkNotepad','assign'=>'snippetIndexLinkNotepad'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <a href="<?php echo 'http://shopwarefive.dev.localhost/note';?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippetIndexLinkNotepad']->value, ENT_QUOTES, 'utf-8', true);?>
" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippetIndexLinkNotepad']->value, ENT_QUOTES, 'utf-8', true);?>
" class="btn">
            <i class="icon--heart"></i>
            <?php if ($_smarty_tpl->tpl_vars['sNotesQuantity']->value>0){?>
                <span class="badge notes--quantity">
                    <?php echo $_smarty_tpl->tpl_vars['sNotesQuantity']->value;?>

                </span>
            <?php }?>
        </a>
    </li>




    <li class="navigation--entry entry--account<?php ob_start();?><?php echo true;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1||$_smarty_tpl->tpl_vars['sOneTimeAccount']->value){?> with-slt<?php }?>"
        role="menuitem"
        data-offcanvas="true"
        data-offCanvasSelector=".account--dropdown-navigation">
        
            <a href="<?php echo 'http://shopwarefive.dev.localhost/account';?>"
               title="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['userInfo']->value){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountGreetingBefore','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingBefore','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Hi, ";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingBefore','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo (string)$_smarty_tpl->tpl_vars['userInfo']->value['firstname'];?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountGreetingAfter','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingAfter','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingAfter','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo " - ";?><?php }?><?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Mein Konto";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp3=ob_get_clean();?><?php echo htmlspecialchars($_tmp2.$_tmp3, ENT_QUOTES, 'utf-8', true);?>
"
               aria-label="<?php ob_start();?><?php if ($_smarty_tpl->tpl_vars['userInfo']->value){?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountGreetingBefore','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingBefore','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Hi, ";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingBefore','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo (string)$_smarty_tpl->tpl_vars['userInfo']->value['firstname'];?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountGreetingAfter','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingAfter','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingAfter','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php echo " - ";?><?php }?><?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Mein Konto";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp5=ob_get_clean();?><?php echo htmlspecialchars($_tmp4.$_tmp5, ENT_QUOTES, 'utf-8', true);?>
"
               class="btn is--icon-left entry--link account--link<?php if ($_smarty_tpl->tpl_vars['userInfo']->value){?> account--user-loggedin<?php }?>">
                <i class="icon--account"></i>
                <?php if ($_smarty_tpl->tpl_vars['userInfo']->value){?>
                    <span class="account--display navigation--personalized">
                        <span class="account--display-greeting">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountGreetingBefore','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingBefore','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hi, <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingBefore','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['firstname'];?>

                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountGreetingAfter','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingAfter','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingAfter','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </span>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mein Konto<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </span>
                <?php }else{ ?>
                    <span class="account--display">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mein Konto<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </span>
                <?php }?>
            </a>
        

        <?php ob_start();?><?php echo true;?><?php $_tmp6=ob_get_clean();?><?php if ($_tmp6||$_smarty_tpl->tpl_vars['sOneTimeAccount']->value){?>
            
                <div class="account--dropdown-navigation">

                    
                        <div class="navigation--smartphone">
                            <div class="entry--close-off-canvas">
                                <a href="#close-account-menu"
                                   class="account--close-off-canvas"
                                   title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexActionCloseMenu')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexActionCloseMenu'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Men?? schlie??en<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexActionCloseMenu'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
                                   aria-label="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexActionCloseMenu')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexActionCloseMenu'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Men?? schlie??en<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexActionCloseMenu'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexActionCloseMenu')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexActionCloseMenu'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Men?? schlie??en<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexActionCloseMenu'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <i class="icon--arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    

                    
                        <?php /*  Call merged included template "frontend/account/sidebar.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/account/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('showSidebar'=>true,'inHeader'=>true), 0, '7191746326225c59c874871-57742412');
content_6225c59c94dd76_49075964($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/account/sidebar.tpl" */?>
                    
                </div>
            
        <?php }?>
    </li>




    <li class="navigation--entry entry--cart" role="menuitem">
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart','assign'=>'snippetIndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart','assign'=>'snippetIndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Warenkorb<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart','assign'=>'snippetIndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        <a class="btn is--icon-left cart--link" href="<?php echo 'http://shopwarefive.dev.localhost/checkout/cart';?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippetIndexLinkCart']->value, ENT_QUOTES, 'utf-8', true);?>
" aria-label="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['snippetIndexLinkCart']->value, ENT_QUOTES, 'utf-8', true);?>
">
            <span class="cart--display">
                <?php if ($_smarty_tpl->tpl_vars['sUserLoggedIn']->value){?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'IndexLinkCheckout','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkCheckout','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zur Kasse<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkCheckout','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php }else{ ?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Warenkorb<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php }?>
            </span>

            <span class="badge is--primary is--minimal cart--quantity<?php if ($_smarty_tpl->tpl_vars['sBasketQuantity']->value<1){?> is--hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['sBasketQuantity']->value;?>
</span>

            <i class="icon--basket"></i>

            <span class="cart--amount">
                <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sBasketAmount']->value);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'Star','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'Star','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
*<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'Star','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

            </span>
        </a>
        <div class="ajax-loader">&nbsp;</div>
    </li>



<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2022-03-07 09:43:08
         compiled from "/var/www/html/shopwarefive/themes/Frontend/Bare/frontend/account/sidebar.tpl" */ ?>
<?php if ($_valid && !is_callable('content_6225c59c94dd76_49075964')) {function content_6225c59c94dd76_49075964($_smarty_tpl) {?><?php if (!is_callable('smarty_function_controllerName')) include '/var/www/html/shopwarefive/engine/Library/Enlight/Template/Plugins/function.controllerName.php';
if (!is_callable('smarty_function_action')) include '/var/www/html/shopwarefive/engine/Library/Enlight/Template/Plugins/function.action.php';
?><?php if ($_smarty_tpl->tpl_vars['sUserLoggedIn']->value||$_smarty_tpl->tpl_vars['showSidebar']->value){?>
    <div class="account--menu is--rounded<?php ob_start();?><?php echo true;?><?php $_tmp1=ob_get_clean();?><?php if ($_tmp1||$_smarty_tpl->tpl_vars['sOneTimeAccount']->value){?> is--personalized<?php }?>">
        
            <?php if (!$_smarty_tpl->tpl_vars['sOneTimeAccount']->value){?>
                
                
                    <?php ob_start();?><?php echo true;?><?php $_tmp2=ob_get_clean();?><?php if ($_tmp2&&$_smarty_tpl->tpl_vars['userInfo']->value){?>
                        <span class="navigation--headline">
                            
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountGreetingBefore','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingBefore','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hi, <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingBefore','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                <?php echo $_smarty_tpl->tpl_vars['userInfo']->value['firstname'];?>

                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountGreetingAfter','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingAfter','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountGreetingAfter','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            
                        </span>
                    <?php }else{ ?>
                        <span class="navigation--headline">
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountHeaderNavigation','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountHeaderNavigation','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Mein Konto<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountHeaderNavigation','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </span>
                    <?php }?>
                

                
                <div class="account--menu-container">

                    
                        
                        <ul class="sidebar--navigation navigation--list is--level0 show--active-items">
                            
                                
                                
                                    
                                        <?php ob_start();?><?php echo true;?><?php $_tmp3=ob_get_clean();?><?php if ($_tmp3&&!$_smarty_tpl->tpl_vars['userInfo']->value&&$_smarty_tpl->tpl_vars['inHeader']->value){?>
                                            <li class="navigation--entry">
                                                <span class="navigation--signin">
                                                    <a href="<?php echo 'http://shopwarefive.dev.localhost/account';?>#hide-registration"
                                                       class="blocked--link btn is--primary navigation--signin-btn<?php if ($_smarty_tpl->tpl_vars['register']->value){?> registration--menu-entry entry--close-off-canvas<?php }?>"
                                                       data-collapseTarget="#registration"
                                                       data-action="close">
                                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLogin','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLogin','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Anmelden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLogin','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                    </a>
                                                    <span class="navigation--register">
                                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountOr','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountOr','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
oder<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountOr','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                        <a href="<?php echo 'http://shopwarefive.dev.localhost/account';?>#show-registration"
                                                           class="blocked--link<?php if ($_smarty_tpl->tpl_vars['register']->value){?> registration--menu-entry entry--close-off-canvas<?php }?>"
                                                           data-collapseTarget="#registration"
                                                           data-action="open">
                                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountRegister','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountRegister','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
registrieren<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountRegister','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                        </a>
                                                    </span>
                                                </span>
                                            </li>
                                        <?php }?>
                                    

                                    
                                        <li class="navigation--entry">
                                            <a href="<?php echo 'http://shopwarefive.dev.localhost/account';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkOverview','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkOverview','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
??bersicht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkOverview','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link<?php ob_start();?><?php ob_start();?><?php echo smarty_function_controllerName(array(),$_smarty_tpl);?>
<?php echo mb_strtolower(ob_get_clean(), 'utf-8')?><?php $_tmp4=ob_get_clean();?><?php if ($_tmp4=='account'&&$_smarty_tpl->tpl_vars['sAction']->value=='index'){?> is--active<?php }?>">
                                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkOverview','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkOverview','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
??bersicht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkOverview','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                            </a>
                                        </li>
                                    
                                

                                
                                
                                    <li class="navigation--entry">
                                        <a href="<?php echo 'http://shopwarefive.dev.localhost/account/profile';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkProfile','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkProfile','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pers??nliche Daten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkProfile','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link<?php ob_start();?><?php ob_start();?><?php echo smarty_function_controllerName(array(),$_smarty_tpl);?>
<?php echo mb_strtolower(ob_get_clean(), 'utf-8')?><?php $_tmp5=ob_get_clean();?><?php if ($_tmp5=='account'&&$_smarty_tpl->tpl_vars['sAction']->value=='profile'){?> is--active<?php }?>" rel="nofollow">
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkProfile','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkProfile','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pers??nliche Daten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkProfile','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        </a>
                                    </li>
                                

                                
                                
                                    <?php if ($_smarty_tpl->tpl_vars['inHeader']->value){?>
                                        
                                            <li class="navigation--entry">
                                                <a href="<?php echo htmlspecialchars(Shopware()->Front()->Router()->assemble(array('module' => 'frontend', 'controller' => 'address', 'action' => 'index', 'sidebar' => '', ))); ?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkAddresses','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkAddresses','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Adressen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkAddresses','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link<?php ob_start();?><?php echo smarty_function_controllerName(array(),$_smarty_tpl);?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp6=='address'){?> is--active<?php }?>" rel="nofollow">
                                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkAddresses','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkAddresses','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Adressen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkAddresses','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                </a>
                                            </li>
                                        
                                    <?php }else{ ?>
                                        
                                            <li class="navigation--entry">
                                                <a href="<?php echo 'http://shopwarefive.dev.localhost/address';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkAddresses','default'=>'My addresses','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkAddresses','default'=>'My addresses','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Adressen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkAddresses','default'=>'My addresses','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link<?php ob_start();?><?php echo smarty_function_controllerName(array(),$_smarty_tpl);?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp7=='address'){?> is--active<?php }?>" rel="nofollow">
                                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkAddresses','default'=>'My addresses','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkAddresses','default'=>'My addresses','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Adressen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkAddresses','default'=>'My addresses','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                                </a>
                                            </li>
                                        
                                    <?php }?>
                                

                                
                                
                                    <li class="navigation--entry">
                                        <a href="<?php echo 'http://shopwarefive.dev.localhost/account/payment';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkPayment','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkPayment','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zahlungsarten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkPayment','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link<?php if ($_smarty_tpl->tpl_vars['sAction']->value=='payment'){?> is--active<?php }?>" rel="nofollow">
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkPayment','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkPayment','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zahlungsarten<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkPayment','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        </a>
                                    </li>
                                

                                
                                
                                    <li class="navigation--entry">
                                        <a href="<?php echo 'http://shopwarefive.dev.localhost/account/orders';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkPreviousOrders','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkPreviousOrders','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkPreviousOrders','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link<?php if ($_smarty_tpl->tpl_vars['sAction']->value=='orders'){?> is--active<?php }?>" rel="nofollow">
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkPreviousOrders','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkPreviousOrders','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Bestellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkPreviousOrders','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        </a>
                                    </li>
                                

                                
                                
                                    <?php ob_start();?><?php echo true;?><?php $_tmp8=ob_get_clean();?><?php if ($_tmp8){?>
                                        <li class="navigation--entry">
                                            <a href="<?php echo 'http://shopwarefive.dev.localhost/account/downloads';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkDownloads','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkDownloads','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sofortdownloads<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkDownloads','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link<?php if ($_smarty_tpl->tpl_vars['sAction']->value=='downloads'){?> is--active<?php }?>" rel="nofollow">
                                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkDownloads','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkDownloads','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Sofortdownloads<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkDownloads','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                            </a>
                                        </li>
                                    <?php }?>
                                

                                
                                
                                    <li class="navigation--entry">
                                        <a href="<?php echo 'http://shopwarefive.dev.localhost/note';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkNotepad','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkNotepad','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merkzettel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkNotepad','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link<?php ob_start();?><?php echo smarty_function_controllerName(array(),$_smarty_tpl);?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9=='note'){?> is--active<?php }?>" rel="nofollow">
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkNotepad','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkNotepad','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Merkzettel<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkNotepad','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        </a>
                                    </li>
                                

                                
                                
                                    <?php if ($_smarty_tpl->tpl_vars['sUserLoggedIn']->value&&!$_smarty_tpl->tpl_vars['inHeader']->value){?>
                                        <?php echo smarty_function_action(array('module'=>'frontend','controller'=>"account",'action'=>"partnerStatisticMenuItem"),$_smarty_tpl);?>

                                    <?php }?>
                                

                                
                                
                                    <?php ob_start();?><?php echo true;?><?php $_tmp10=ob_get_clean();?><?php if ($_tmp10&&$_smarty_tpl->tpl_vars['userInfo']->value){?>
                                        <li class="navigation--entry">
                                            
                                                <a href="<?php echo 'http://shopwarefive.dev.localhost/account/logout';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLogout','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLogout','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abmelden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLogout','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
                                                   class="navigation--link link--logout navigation--personalized">
                                                    

                                                        
                                                            <span class="navigation--logout-personalized blocked--link">

                                                                
                                                                    <span class="logout--not-user blocked--link"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountNot','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountNot','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Nicht<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountNot','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                                                                

                                                                
                                                                    <span class="logout--user-name blocked--link"><?php echo $_smarty_tpl->tpl_vars['userInfo']->value['firstname'];?>
?</span>
                                                                
                                                        </span>
                                                        

                                                        
                                                            <span class="navigation--logout blocked--link"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLogout','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLogout','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abmelden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLogout','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                                                        
                                                    
                                                </a>
                                            
                                        </li>
                                    <?php }elseif($_smarty_tpl->tpl_vars['sUserLoggedIn']->value){?>
                                        
                                            <li class="navigation--entry">
                                                
                                                    <a href="<?php echo 'http://shopwarefive.dev.localhost/account/logout';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkLogout2','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkLogout2','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abmelden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkLogout2','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link link--logout" rel="nofollow">
                                                        
                                                            <i class="icon--logout"></i>
                                                        

                                                        
                                                            <span class="navigation--logout logout--label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AccountLinkLogout2','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkLogout2','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Abmelden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AccountLinkLogout2','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                                                        
                                                    </a>
                                                
                                            </li>
                                        
                                    <?php }?>
                                
                            
                        </ul>
                    
                </div>
            <?php }else{ ?>
                
                <div class="account--menu-container">
                    <ul class="sidebar--navigation navigation--list is--level0 show--active-items">
                        
                            <li class="navigation--entry">
                                
                                    <a href="<?php echo 'http://shopwarefive.dev.localhost/account/abort';?>" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'OneTimeOrderAbort','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'OneTimeOrderAbort','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gastsitzung beenden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'OneTimeOrderAbort','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
"
                                       class="navigation--link link--logout navigation--personalized link--abort">
                                        
                                            <span class="navigation--logout blocked--link"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'OneTimeOrderAbort','namespace'=>'frontend/account/sidebar')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'OneTimeOrderAbort','namespace'=>'frontend/account/sidebar'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Gastsitzung beenden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'OneTimeOrderAbort','namespace'=>'frontend/account/sidebar'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                                        
                                    </a>
                                
                            </li>
                        
                    </ul>
                </div>
            <?php }?>
        
    </div>
<?php }?>
<?php }} ?>