<?php /* Smarty version Smarty-3.1.18, created on 2015-06-21 13:29:40
         compiled from "predlosci\prijava.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71115575a07e80ba56-38150016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '136c573d2fbe5fb4ba8f17a4078ad67bc4e6dfeb' => 
    array (
      0 => 'predlosci\\prijava.tpl',
      1 => 1434885981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71115575a07e80ba56-38150016',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575a07e80f8d5_54424600',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575a07e80f8d5_54424600')) {function content_5575a07e80f8d5_54424600($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
                    <h2>Prijava</h2>

                    
                    <?php if (isset($_smarty_tpl->tpl_vars['greska']->value)) {?>
                        <div class='alert alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Greska!</strong> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>

                        </div>
                    <?php }?>
                    <form role="form" method="post" action="prijava.php">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="lozinka">Password:</label>
                            <input type="password" class="form-control" name = "lozinka" id="lozinka">
                        </div>
                        <div class="form-group">

                            <input type="submit" class="form-control" name ="prijava" id="submit" value="Prijavi se">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
