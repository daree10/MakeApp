<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 11:23:34
         compiled from "predlosci\editProductType.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3986557953965bd5e5-71080523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cb85f3ef1c273c97f5cb378febe052ff84f2555' => 
    array (
      0 => 'predlosci\\editProductType.tpl',
      1 => 1434014608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3986557953965bd5e5-71080523',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'naziv' => 0,
    'opis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55795396607974_24137621',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55795396607974_24137621')) {function content_55795396607974_24137621($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
                    <h2>Edit tipa korisnikaaa</h2>

                    <form role="form" method="post" action="editProductType.php?idType=<?php echo $_GET['idType'];?>
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
