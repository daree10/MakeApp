<?php /* Smarty version Smarty-3.1.18, created on 2015-06-21 10:56:32
         compiled from "predlosci\popis_tipova_kozmetike.tpl" */ ?>
<?php /*%%SmartyHeaderCode:153035579506b1e8ab4-24231557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0da6807f7cec66dcbad6d64fceb49573c2ba2c33' => 
    array (
      0 => 'predlosci\\popis_tipova_kozmetike.tpl',
      1 => 1434875562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153035579506b1e8ab4-24231557',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5579506b23e9d8_04711024',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5579506b23e9d8_04711024')) {function content_5579506b23e9d8_04711024($_smarty_tpl) {?><script src='js/ajax.js'></script>
    <script>
        getProductType(<?php echo $_SESSION['id'];?>
,<?php echo $_SESSION['tip_korisnika_id'];?>
);
        function deletee(idUserType,table)
        {
            deleteAJAX(idUserType,table,<?php echo $_SESSION['id'];?>
,<?php echo $_SESSION['tip_korisnika_id'];?>
);
        }
    </script>

<div class="col-sm-10" style="background-color:lavenderblush;">
                    <div class="container" id="tablica">

                    </div>
    <a href='dodavanje_tipova_kozmetike.php'>+ Dodaj tip</a>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
