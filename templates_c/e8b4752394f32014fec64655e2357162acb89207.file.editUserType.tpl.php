<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 10:55:24
         compiled from "predlosci\editUserType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:749655794ca2c49191-05053499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8b4752394f32014fec64655e2357162acb89207' => 
    array (
      0 => 'predlosci\\editUserType.tpl',
      1 => 1434012922,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '749655794ca2c49191-05053499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55794ca2cdd8b5_40205802',
  'variables' => 
  array (
    'naziv' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55794ca2cdd8b5_40205802')) {function content_55794ca2cdd8b5_40205802($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
                    <h2>Edit tipa korisnikaaa</h2>

                    <form role="form" method="post" action="editUserType.php?idType=<?php echo $_GET['idType'];?>
">
                        <div class="form-group">
                            <label for="naziv">Naziv:</label>
                            <input type="text" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['naziv']->value;?>
' name="naziv" id="naziv" required>
                        </div>
                        <div class="form-group">
                            <label for="opis">Opis:</label>
                            <input type="text" class="form-control" value='<?php echo $_smarty_tpl->tpl_vars['opis']->value;?>
' name = "opis" id="opis" required>
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
