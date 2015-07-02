<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 11:19:12
         compiled from "predlosci\dodavanje_tipova_kozmetike.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20765557952901bfd93-74574692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acec80ba3d51d0791a37ff3f6cad236dc39ef460' => 
    array (
      0 => 'predlosci\\dodavanje_tipova_kozmetike.tpl',
      1 => 1434014345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20765557952901bfd93-74574692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55795290202425_67119250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55795290202425_67119250')) {function content_55795290202425_67119250($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
                    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

                    <form role="form" method="post" action="dodavanje_tipova_kozmetike.php">
                        <div class="form-group">
                            <label for="naziv">Naziv:</label>
                            <input type="text" class="form-control"  name="naziv" id="naziv" required>
                        </div>
                        <div class="form-group">
                            <label for="opis">Opis:</label>
                            <input type="text" class="form-control"  name = "opis" id="opis" required>
                        </div>
                        <div class="form-group">

                            <input type="submit" class="form-control" name ="dodaj" id="submit" value="Dodaj">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
