<?php
/* Smarty version 3.1.31, created on 2017-09-30 23:52:37
  from "C:\Users\Matt\OneDrive - Nova Scotia Community College\Projects\cachachart.nscctruro.ca\tools\FormTools3.0.0-alpha-20170930\formtools\install\templates\install_header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59d0587521c2f5_88817461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c6cbce137d6c1dabff296aaccca58672dcd0261' => 
    array (
      0 => 'C:\\Users\\Matt\\OneDrive - Nova Scotia Community College\\Projects\\cachachart.nscctruro.ca\\tools\\FormTools3.0.0-alpha-20170930\\formtools\\install\\templates\\install_header.tpl',
      1 => 1506826165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59d0587521c2f5_88817461 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html dir="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['special_text_direction'];?>
">
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_ft_installation'];?>
</title>
	<?php echo '<script'; ?>
>
		//<![CDATA[
		var g = {};
		g.root_url = "<?php echo $_smarty_tpl->tpl_vars['g_root_url']->value;?>
";
		g.error_colours = ["ffbfbf", "ffeded"];
		g.notify_colours = ["c6e2ff", "f2f8ff"];
		//]]>
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../global/scripts/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../themes/default/scripts/jquery-ui-1.8.6.custom.min.js"><?php echo '</script'; ?>
>
	<link href="../themes/default/css/smoothness/jquery-ui-1.8.6.custom.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="files/main.css">
	<?php echo '<script'; ?>
 src="../global/scripts/general.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="../global/scripts/rsv.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="files/validate.js"><?php echo '</script'; ?>
>
	<?php echo $_smarty_tpl->tpl_vars['head_js']->value;?>

</head>
<body>
<div id="container">
	<div id="header">
		<div style="float:right">
			<table cellspacing="0" cellpadding="0" height="25">
				<tr>
					<td><img src="../themes/default/images/account_section_left_green.jpg" border="0" /></td>
					<td id="account_section">
						<b><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
</b>
					</td>
					<td><img src="../themes/default/images/account_section_right_green.jpg" border="0" /></td>
				</tr>
			</table>
		</div>
    <span style="float:left; padding-top: 8px; padding-right: 10px">
      <a href="http://www.formtools.org" class="no_border"><img src="../themes/default/images/logo_green.jpg" border="0" height="61" /></a>
    </span>
	</div>
	<div id="content">
		<h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_installation'];?>
</h1>
		<div id="nav_items">
			<div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 1) {?>nav_current<?php } else { ?>nav_visited<?php }?>">1 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['word_welcome'];?>
</div>
			<div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 2) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 2) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
				2 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_system_check'];?>

			</div>
			<div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 3) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 3) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
				3 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_database_tables'];?>

			</div>
			<div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 4) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 4) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
				4 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_config_file'];?>

			</div>
			<div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 5) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 5) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
				5 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_create_admin_account'];?>

			</div>
			<div class="<?php if ($_smarty_tpl->tpl_vars['step']->value == 6) {?>nav_current<?php } elseif ($_smarty_tpl->tpl_vars['step']->value < 6) {?>nav_remaining<?php } else { ?>nav_visited<?php }?>">
				6 <span class="delim">-</span> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['phrase_clean_up'];?>

			</div>
		</div>
		<div id="main">
<?php }
}
