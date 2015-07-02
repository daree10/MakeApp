<?php /* Smarty version Smarty-3.1.18, created on 2015-06-09 20:17:50
         compiled from "predlosci\editBrand.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2287655772d99aac554-05064609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76032f3f79574c09e09f67b6af46b15cc61910c9' => 
    array (
      0 => 'predlosci\\editBrand.tpl',
      1 => 1433873858,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2287655772d99aac554-05064609',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55772d99b02464_67226126',
  'variables' => 
  array (
    'naziv' => 0,
    'email' => 0,
    'web' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55772d99b02464_67226126')) {function content_55772d99b02464_67226126($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
                    <h2>Edit branda</h2>

                    <form role="form" method="post" action="editBrand.php?idBrand=<?php echo $_GET['idBrand'];?>
">
                        <div class="form-group">
                            <label for="naziv">Naziv:</label>
                            <input type="text" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
' name="naziv" id="naziv" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
' name = "email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="web">Web-site:</label>
                            <input type="text" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['web']->value;?>
' name = "web" id="web" required>
                        </div>
                        <div class="form-group">

                            <input type="submit" class="form-control" name ="izmijeni" id="submit" value="Izmijeni">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
