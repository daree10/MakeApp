<?php /* Smarty version Smarty-3.1.18, created on 2015-06-21 13:29:40
         compiled from "predlosci\_navig.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186945575a07e7dcc53-32586965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '559136401163c797631128d0fa2b6ecbbecfe7e8' => 
    array (
      0 => 'predlosci\\_navig.tpl',
      1 => 1434885981,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '186945575a07e7dcc53-32586965',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575a07e7ffed1_59497877',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575a07e7ffed1_59497877')) {function content_5575a07e7ffed1_59497877($_smarty_tpl) {?><div class="container-fluid">


            <div class="row">
                <div class="col-sm-2" style="background-color:lavender;">
                <?php if (isset($_SESSION['id'])) {?>
                    
                    <?php if ($_SESSION['tip_korisnika_id']==1) {?>

                            <a href='profil.php?idKor=<?php echo $_SESSION['id'];?>
"' class='btn btn-info btn-block' role='button'><span class='glyphicon glyphicon-user'></span> Moj profil</a>
                       <?php } elseif ($_SESSION['tip_korisnika_id']==2) {?>
                        
                            <a href='profil.php?idKor=<?php echo $_SESSION['id'];?>
"' class='btn btn-info btn-block' role='button'><span class='glyphicon glyphicon-user'></span> Moj profil</a>
                            <a href='dodavanje_kozmetike.php' class='btn btn-info btn-block' role='button'><span class='glyphicon glyphicon-plus'></span> Unos kozmetike</a>
                            <a href='dodavanje_branda.php' class='btn btn-info btn-block' role='button'><span class='glyphicon glyphicon-plus'></span> Unos branda</a>

                        <?php } elseif ($_SESSION['tip_korisnika_id']==3) {?>
                            
                            <a href='popis_kozmetike.php' class='btn btn-info btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis kozmetiike</a>
                            <a href='popis_tipova_kozmetike.php' class='btn btn-info btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis tipova kozmetike</a>
                            <a href='popis_tipova_kor.php' class='btn btn-info btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis tipova korisnika</a>
                            <a href='popis_branda.php' class='btn btn-info btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis branda</a>
                            <a href='popis_korisnika.php' class='btn btn-info btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis korisnika</a>

                    <?php }?>
                    
                    <a href="pretraga.php" class="btn btn-info btn-block" role="button"><span class="glyphicon glyphicon-search"></span> Barbie.NET pretraga</a>
                    <a href="odjava.php" class="btn btn-info btn-block" role="button"><span class="glyphicon glyphicon-log-out"></span> Odjava</a>
                    <?php } else { ?>
                        <a href="prijava.php" class="btn btn-info btn-block" role="button"><span class="glyphicon glyphicon-log-in"></span> Prijava</a>
                        <a href="registracija.php" class="btn btn-info btn-block" role="button"><span class="glyphicon glyphicon-pencil"></span> Registracija</a>
                    <?php }?>
                
                   

                </div><?php }} ?>
