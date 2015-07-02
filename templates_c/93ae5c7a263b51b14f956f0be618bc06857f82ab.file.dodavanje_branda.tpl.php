<?php /* Smarty version Smarty-3.1.18, created on 2015-06-08 16:51:24
         compiled from "predlosci\dodavanje_branda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69935575abec60ca73-43422625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93ae5c7a263b51b14f956f0be618bc06857f82ab' => 
    array (
      0 => 'predlosci\\dodavanje_branda.tpl',
      1 => 1433775052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69935575abec60ca73-43422625',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575abec643576_41253129',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575abec643576_41253129')) {function content_5575abec643576_41253129($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
                    <h2>Unos branda</h2>

                    <form role="form" method="post" action="dodavanje_branda.php">
                        <div class="form-group">
                            <label for="naziv">Naziv:</label>
                            <input type="text" class="form-control" name="naziv" id="naziv">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name = "email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="web">Web-site:</label>
                            <input type="text" class="form-control" name = "web" id="web">
                        </div>
                        <div class="form-group">

                            <input type="submit" class="form-control" name ="dodaj" id="submit" value="Dodaj">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>
<?php }} ?>
