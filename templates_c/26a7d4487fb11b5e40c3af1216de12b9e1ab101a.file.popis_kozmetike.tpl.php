<?php /* Smarty version Smarty-3.1.18, created on 2015-06-22 13:26:16
         compiled from "predlosci\popis_kozmetike.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1522455795d2c7efbc6-49690475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26a7d4487fb11b5e40c3af1216de12b9e1ab101a' => 
    array (
      0 => 'predlosci\\popis_kozmetike.tpl',
      1 => 1434972373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1522455795d2c7efbc6-49690475',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55795d2c868d69_65027114',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55795d2c868d69_65027114')) {function content_55795d2c868d69_65027114($_smarty_tpl) {?>
    <script src='js/ajax.js'></script>
    <script>
        getProducts(<?php echo $_SESSION['id'];?>
,<?php echo $_SESSION['tip_korisnika_id'];?>
);
        function deletee(idUser,table)
        {
            deleteAJAX(idUser,table,<?php echo $_SESSION['id'];?>
,<?php echo $_SESSION['tip_korisnika_id'];?>
);
        }
    </script>

<div class="col-sm-10" style="background-color:lavenderblush;">
                    <div class="container col-md-10" id="tablica">

                    </div>
    <a href='dodavanje_kozmetike.php'>+ Dodaj kozmetiku</a>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
