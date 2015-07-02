<?php /* Smarty version Smarty-3.1.18, created on 2015-06-21 10:56:33
         compiled from "predlosci\popis_tipova_kor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61105577f7804af605-14976276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b61cad18697b7988de3556d8440de900254c8336' => 
    array (
      0 => 'predlosci\\popis_tipova_kor.tpl',
      1 => 1434875562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61105577f7804af605-14976276',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5577f7804e9f93_61514420',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5577f7804e9f93_61514420')) {function content_5577f7804e9f93_61514420($_smarty_tpl) {?><script src='js/ajax.js'></script>
    <script>
        getUserType(<?php echo $_SESSION['id'];?>
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
    <a href='dodavanje_tipova.php'>+ Dodaj tip</a>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
