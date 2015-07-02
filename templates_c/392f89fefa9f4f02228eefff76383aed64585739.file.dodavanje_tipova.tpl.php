<?php /* Smarty version Smarty-3.1.18, created on 2015-06-11 11:12:44
         compiled from "predlosci\dodavanje_tipova.tpl" */ ?>
<?php /*%%SmartyHeaderCode:277885577f96c0ca7e7-04139253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '392f89fefa9f4f02228eefff76383aed64585739' => 
    array (
      0 => 'predlosci\\dodavanje_tipova.tpl',
      1 => 1434013947,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277885577f96c0ca7e7-04139253',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5577f96c114b72_34877332',
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f96c114b72_34877332')) {function content_5577f96c114b72_34877332($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
                    <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>

                    <form role="form" method="post" action="dodavanje_tipova.php">
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
