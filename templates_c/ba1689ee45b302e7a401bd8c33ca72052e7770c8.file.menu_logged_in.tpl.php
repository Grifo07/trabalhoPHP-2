<?php /* Smarty version Smarty-3.1.15, created on 2017-01-27 12:08:35
         compiled from "/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14964217455852db922acef2-58941228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba1689ee45b302e7a401bd8c33ca72052e7770c8' => 
    array (
      0 => '/usr/users2/mieec2012/ee12113/public_html/trabalhosSiem/trabalhoPHP-2/templates/common/menu_logged_in.tpl',
      1 => 1485476578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14964217455852db922acef2-58941228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5852db922c4d63_26610843',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'photo' => 0,
    'ADMIN' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5852db922c4d63_26610843')) {function content_5852db922c4d63_26610843($_smarty_tpl) {?><!-- <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
 -->

  <?php if (file_exists(((('../../').('images/users/')).($_smarty_tpl->tpl_vars['USERNAME']->value)).('.jpg'))) {?>
      <?php $_smarty_tpl->tpl_vars['photo'] = new Smarty_variable(((('../../').('images/users/')).($_smarty_tpl->tpl_vars['USERNAME']->value)).('.jpg'), null, 0);?>
  <?php } elseif (file_exists(((('../../').('images/users/')).($_smarty_tpl->tpl_vars['USERNAME']->value)).('.png'))) {?>
      <?php $_smarty_tpl->tpl_vars['photo'] = new Smarty_variable(((('../../').('images/users/')).($_smarty_tpl->tpl_vars['USERNAME']->value)).('.png'), null, 0);?>
  <?php } else { ?>
      <?php $_smarty_tpl->tpl_vars['photo'] = new Smarty_variable(('../../').('images/users/default.png'), null, 0);?>
  <?php }?>

<nav id="navigation">
            <ul class="parent">
              <li class="headerProfile" id="username" style="float: right; margin-right: 15%"><img style="position:relative; top:25px; width: auto; height: 60px;" src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
"><div style="margin-bottom: 0px;"><br><?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>
</div>
                <ul class="child">
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/showProfile.php">Perfil</a></li>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/orders/showOrders.php">Encomendas</a></li>
                  <?php if ($_smarty_tpl->tpl_vars['ADMIN']->value) {?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/adminSettings.php">Definições Administrador</a></li>
                  <?php }?>
                  <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a></li>
                </ul>
                </li>
            </ul>
         </nav><?php }} ?>
