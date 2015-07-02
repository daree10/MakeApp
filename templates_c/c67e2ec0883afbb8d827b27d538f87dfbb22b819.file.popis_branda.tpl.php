<?php /* Smarty version Smarty-3.1.18, created on 2015-06-21 10:56:34
         compiled from "predlosci\popis_branda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1187455772737d93395-18994793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67e2ec0883afbb8d827b27d538f87dfbb22b819' => 
    array (
      0 => 'predlosci\\popis_branda.tpl',
      1 => 1434875562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1187455772737d93395-18994793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55772737dd98a9_44697098',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55772737dd98a9_44697098')) {function content_55772737dd98a9_44697098($_smarty_tpl) {?> <script src='js/ajax.js'></script>
    <script>
        getBrand(<?php echo $_SESSION['id'];?>
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
                    <div class="container" id="tablica">

                    </div>
    <a href='dodavanje_branda.php'>+ Dodaj brand</a>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
