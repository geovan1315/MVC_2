<?php
/* Smarty version 3.1.34-dev-7, created on 2020-06-08 16:36:35
  from 'C:\xampp\htdocs\MVC_2\templates\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ede4cf3e71ab7_26081182',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05f6a3b5c5bff4635c30af049d6c66b1ef598bff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC_2\\templates\\master.tpl',
      1 => 1591626992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Cabeceras/header.tpl' => 1,
    'file:p.tpl' => 1,
    'file:Cabeceras/footer.tpl' => 1,
  ),
),false)) {
function content_5ede4cf3e71ab7_26081182 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:Cabeceras/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<!-- body -->
	<?php $_smarty_tpl->_subTemplateRender("file:p.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:Cabeceras/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
