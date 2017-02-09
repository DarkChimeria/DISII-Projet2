<?php
/* Smarty version 3.1.29, created on 2017-02-09 08:14:56
  from "C:\Wamp64\www\p2\src\templates\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589c2500eba8c8_95426031',
  'file_dependency' => 
  array (
    '42799d1ca2b4848ae8a6f4ccde2d82080ad27344' => 
    array (
      0 => 'C:\\Wamp64\\www\\p2\\src\\templates\\footer.tpl',
      1 => 1486471564,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589c2500eba8c8_95426031 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\Wamp64\\www\\p2\\src\\includes\\libs\\Smarty\\plugins\\modifier.date_format.php';
?>
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      <?php echo $_smarty_tpl->tpl_vars['assoName']->value;?>
 - Nous sommes le : <?php echo smarty_modifier_date_format(time(),'%d-%m-%Y %H:%M:%S');?>

    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">SF</a>.</strong> Tous droits réservés.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<?php echo '<script'; ?>
 src="includes/libs/jQuery/jquery-2.2.3.min.js"><?php echo '</script'; ?>
>
<!-- Bootstrap 3.3.6 -->
<?php echo '<script'; ?>
 src="includes/libs/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<!-- AdminLTE App -->
<?php echo '<script'; ?>
 src="includes/libs/Design/js/app.min.js"><?php echo '</script'; ?>
>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
   </body>
   </html>
<?php }
}
