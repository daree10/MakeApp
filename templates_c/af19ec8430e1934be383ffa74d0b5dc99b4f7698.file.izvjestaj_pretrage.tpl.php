<?php /* Smarty version Smarty-3.1.18, created on 2015-06-22 14:45:20
         compiled from "predlosci\izvjestaj_pretrage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:536555880360659086-35970913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af19ec8430e1934be383ffa74d0b5dc99b4f7698' => 
    array (
      0 => 'predlosci\\izvjestaj_pretrage.tpl',
      1 => 1434976548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '536555880360659086-35970913',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55880360684016_21748792',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55880360684016_21748792')) {function content_55880360684016_21748792($_smarty_tpl) {?>
    <script src='js/ajax.js'></script>
    <script>
        /*
         * 
         * funkcija koju treba implementirati unutar ajax.js
         * i mogli bi dodati data tables za izvjestaj
         * 
         */
        getReport(<?php echo $_SESSION['id'];?>
,<?php echo $_SESSION['tip_korisnika_id'];?>
);
    </script>

<div class="col-sm-10" style="background-color:lavenderblush;">
                    <div class="container col-md-10" id="tablica">

                    </div>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
