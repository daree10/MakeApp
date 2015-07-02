<?php /* Smarty version Smarty-3.1.18, created on 2015-06-21 13:30:37
         compiled from "predlosci\popis_korisnika.tpl" */ ?>
<?php /*%%SmartyHeaderCode:263255575aabc1f0ad5-52321449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f683b068ae8abe217b0c1432c25fc7af57b799b' => 
    array (
      0 => 'predlosci\\popis_korisnika.tpl',
      1 => 1434885981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '263255575aabc1f0ad5-52321449',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575aabc23ae63_58207756',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575aabc23ae63_58207756')) {function content_5575aabc23ae63_58207756($_smarty_tpl) {?>
    <script src='js/ajax.js'></script>
    <script>
        getUsers(<?php echo $_SESSION['id'];?>
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
    <a href='registracija.php'>+ Dodaj koritnika</a>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
