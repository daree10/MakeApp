<?php /* Smarty version Smarty-3.1.18, created on 2015-06-22 13:36:37
         compiled from "predlosci\profil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116165575a82771fe20-63185843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd58300a57ac96be0e705e818d9b9bbd1152803eb' => 
    array (
      0 => 'predlosci\\profil.tpl',
      1 => 1434972993,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116165575a82771fe20-63185843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575a8278b23f3_42149098',
  'variables' => 
  array (
    'greska' => 0,
    'uspjeh' => 0,
    'tip_korisnika' => 0,
    'korime' => 0,
    'ime' => 0,
    'prezime' => 0,
    'podton' => 0,
    'tip_koze' => 0,
    'ten' => 0,
    'boja_ociju' => 0,
    'velicina_ociju' => 0,
    'nijansa_obrva' => 0,
    'velicina_usana' => 0,
    'nijansa_usana' => 0,
    'duzina_trepavica' => 0,
    'gustoca_trepavica' => 0,
    'uvijenost_trepavica' => 0,
    'nijansa_trepavica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575a8278b23f3_42149098')) {function content_5575a8278b23f3_42149098($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
<?php if (isset($_smarty_tpl->tpl_vars['greska']->value)) {?>
                        <div class='alert alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Greska!</strong> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>

                        </div>
                    <?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['uspjeh']->value)) {?>
                        <div class='alert alert-success'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Uspjeh!</strong> <?php echo $_smarty_tpl->tpl_vars['uspjeh']->value;?>

                        </div>
                    <?php }?>
                    
                    <form id="a" role="form" method="post" action="profil.php?idKor=<?php echo $_GET['idKor'];?>
">
<?php if ($_SESSION['tip_korisnika_id']==3&&$_GET['idKor']!=4) {?>
    <?php if ($_smarty_tpl->tpl_vars['tip_korisnika']->value==1) {?>
            <input type='submit' class='form-control btn btn-primary' name ='change' id='submit' value='Učini zaposlenikom'>
            <?php } else { ?>
            <input type='submit' class='form-control btn btn-primary' name ='change' id='submit' value='Učini običnim korisnikom'>
    <?php }?>
 <?php }?>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['korime']->value;?>
" id="email">
                        </div>
                        <div class="form-group">
                            <label for="lozinka">Lozinka:</label>
                            <input type="password" class="form-control" name = "lozinka" id="lozinka">
                        </div>
                        <div class="form-group">
                            <label for="lozinka2">Ponovite lozinku:</label>
                            <input type="password" class="form-control" name = "lozinka2" id="lozinka2">
                        </div>
                        <div class="form-group">
                            <label for="ime">Ime:</label>
                            <input type="text" class="form-control" name = "ime" value="<?php echo $_smarty_tpl->tpl_vars['ime']->value;?>
" id="ime">
                        </div>
                        <div class="form-group">
                            <label for="prezime">Prezime:</label>
                            <input type="text" class="form-control" name = "prezime" value="<?php echo $_smarty_tpl->tpl_vars['prezime']->value;?>
" id="prezime">
                        </div>
                        <div class="form-group">
                            <label>Sljedeća polja nisu obavezna te se mogu ispuniti kasnije</label>
                        </div>
                        <div class="form-group">
                            <label for="podton">Podton:</label>
                            <select class="form-control" name = "podton" id="podton">
                                <option <?php if ($_smarty_tpl->tpl_vars['podton']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['podton']->value=="rozi") {?> selected <?php }?> value="rozi">Rozi</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['podton']->value=="neutralni") {?> selected <?php }?> value="neutralni">Neutralni</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['podton']->value=="zuti") {?> selected <?php }?> value="zuti">Žuti</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['podton']->value=="maslina") {?> selected <?php }?> value="maslina">Maslinasti</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tip_koze">Tip kože:</label>
                            <select class="form-control" name = "tip_koze" id="tip_koze">
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=="normalna") {?> selected <?php }?> value="normalna">Normalna</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=="suha") {?> selected <?php }?> value="suha">Suha</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=="masna") {?> selected <?php }?> value="masna">Masna</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=="mjesovit") {?> selected <?php }?> value="mjesovit">Mješovit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ten">Ten:</label>
                            <select class="form-control" name = "ten" id="ten">
                                <option <?php if ($_smarty_tpl->tpl_vars['ten']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['ten']->value=="topli") {?> selected <?php }?> value="topli">Topli</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['ten']->value=="hladni") {?> selected <?php }?> value="hladni">Hladni</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="boja_ociju">Boja očiju:</label>
                            <select class="form-control" name = "boja_ociju" id="boja_ociju">
                                <option <?php if ($_smarty_tpl->tpl_vars['boja_ociju']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['boja_ociju']->value=="smedja") {?> selected <?php }?> value="smedja">Smeđa</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['boja_ociju']->value=="zelena") {?> selected <?php }?> value="zelena">Zelena</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['boja_ociju']->value=="plava") {?> selected <?php }?> value="plava">Plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_ociju">Veličina očiju:</label>
                            <select class="form-control" name = "velicina_ociju" id="velicina_ociju">
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_ociju']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_ociju']->value=="velika") {?> selected <?php }?> value="velika">Velika</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_ociju']->value=="mala") {?> selected <?php }?> value="mala">Mala</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_ociju']->value=="normalna") {?> selected <?php }?> value="normalna">Normalna</option>
                            </select>
                        </div>
                      
                        <div class="form-group">
                            <label for="nijansa_obrva">Nijansa obrve:</label>
                            <select class="form-control" name = "nijansa_obrva" id="nijansa_obrva">
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=="tamnosmedja") {?> selected <?php }?> value="tamnosmedja">Tamno smeđa</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=="svjetlosmedja") {?> selected <?php }?> value="svjetlosmedja">Svjetlo smeđa</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=="tamnoplava") {?> selected <?php }?> value="tamnoplava">Tamno plava</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=="svjetloplava") {?> selected <?php }?> value="svjetloplava">Svjetlo plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_usana">Velicina usana:</label>
                            <select class="form-control" name = "velicina_usana" id="velicina_usana">
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_usana']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_usana']->value=="tanka") {?> selected <?php }?> value="tanka">Tanka</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_usana']->value=="normalna") {?> selected <?php }?> value="normalna">Normalna</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_usana']->value=="puna") {?> selected <?php }?> value="puna">Puna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_usana">nijansa usana:</label>
                            <?php if ($_smarty_tpl->tpl_vars['nijansa_usana']->value=='') {?>
                            <input type=color name='nijansa_usana' title='hexadecimal color' placeholder='#000000'>
                            <?php } elseif ($_smarty_tpl->tpl_vars['nijansa_usana']->value!='') {?>
                            <input type=color name='nijansa_usana' title='hexadecimal color' value=<?php echo $_smarty_tpl->tpl_vars['nijansa_usana']->value;?>
> 
                           <?php }?>
                               
                        </div>
                        <div class="form-group">
                            <label for="duzina_trepavica">Dužina trepavica:</label>
                            <select class="form-control" name = "duzina_trepavica" id="duzina_trepavica">
                                <option <?php if ($_smarty_tpl->tpl_vars['duzina_trepavica']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['duzina_trepavica']->value=="kratka") {?> selected <?php }?> value="kratka">Kratka</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['duzina_trepavica']->value=="normalna") {?> selected <?php }?> value="normalna">Normalna</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['duzina_trepavica']->value=="duga") {?> selected <?php }?> value="duga">Duga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gustoca_trepavica">Gustoća trepavica:</label>
                            <select class="form-control" name = "gustoca_trepavica" id="gustoca_trepavica">
                                <option <?php if ($_smarty_tpl->tpl_vars['gustoca_trepavica']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['gustoca_trepavica']->value=="rijetka") {?> selected <?php }?> value="rijetka">Rijetka</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['gustoca_trepavica']->value=="gusta") {?> selected <?php }?> value="gusta">Gusta</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['gustoca_trepavica']->value=="normalna") {?> selected <?php }?> value="normalna">Normalna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="uvijenost_trepavica">Uvijenost trepavica:</label>
                            <select class="form-control" name = "uvijenost_trepavica" id="uvijenost_trepavica">
                                <option <?php if ($_smarty_tpl->tpl_vars['uvijenost_trepavica']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['uvijenost_trepavica']->value=="uvijene") {?> selected <?php }?> value="uvijene">Uvijene</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['uvijenost_trepavica']->value=="neuvijene") {?> selected <?php }?> value="neuvijene">Neuvijene</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_trepavica">Nijansa trepavica:</label>
                            <select class="form-control" name = "nijansa_trepavica" id="nijansa_trepavica">
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_trepavica']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_trepavica']->value=="svjetla") {?> selected <?php }?> value="svjetla">Svjetla</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_trepavica']->value=="tamna") {?> selected <?php }?> value="tamna">Tamna</option>
                            </select>
                        </div>
                        <div class="form-group">

                            <input type="submit" form="a" class="form-control" name ="izmjeni" id="submit" value="Izmijeni podatke">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
