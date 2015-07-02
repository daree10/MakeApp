<?php /* Smarty version Smarty-3.1.18, created on 2015-06-21 15:48:33
         compiled from "predlosci\registracija.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116195575a1d793ac47-78606385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c936be658d417ee24bf13c0ed5fce89dab2a2b57' => 
    array (
      0 => 'predlosci\\registracija.tpl',
      1 => 1434894510,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116195575a1d793ac47-78606385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5575a1d797d2d1_79564585',
  'variables' => 
  array (
    'greska' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5575a1d797d2d1_79564585')) {function content_5575a1d797d2d1_79564585($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
                    <h2>Registracija</h2>
                   <?php if (isset($_smarty_tpl->tpl_vars['greska']->value)) {?>
                        <div class='alert alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Greska!</strong> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>

                        </div>
                    <?php }?>
                    <form role="form" method="post" action="registracija.php">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email"  id="email">
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
                            <input type="text" class="form-control" name = "ime"  id="ime">
                        </div>
                        <div class="form-group">
                            <label for="prezime">Prezime:</label>
                            <input type="text" class="form-control" name = "prezime"  id="prezime">
                        </div>
                        <div class="form-group">
                            <label>Sljedeća polja nisu obavezna te se mogu ispuniti kasnije</label>
                        </div>
                        <div class="form-group">
                            <label for="podton">Podton:</label>
                            <select class="form-control" name = "podton" id="podton">
                                <option value="">Odaberite...</option>
                                <option value="rozi">Rozi</option>
                                <option value="neutralni">Neutralni</option>
                                <option value="zuti">Žuti</option>
                                <option value="maslina">Maslinasti</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tip_koze">Tip kože:</label>
                            <select class="form-control" name = "tip_koze" id="tip_koze">
                                <option value="">Odaberite...</option>
                                <option value="normalna">Normalan</option>
                                <option value="suha">Suhi</option>
                                <option value="masna">Masni</option>
                                <option value="mjesovit">Mješovit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ten">Ten:</label>
                            <select class="form-control" name = "ten" id="ten">
                                <option value="">Odaberite...</option>
                                <option value="topli">Topli</option>
                                <option value="hladni">Hladni</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="boja_ociju">Boja očiju:</label>
                            <select class="form-control" name = "boja_ociju" id="boja_ociju">
                                <option value="">Odaberite...</option>
                                <option value="smedja">Smeđa</option>
                                <option value="zelena">Zelena</option>
                                <option value="plava">Plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_ociju">Veličina očiju:</label>
                            <select class="form-control" name = "velicina_ociju" id="velicina_ociju">
                                <option value="">Odaberite...</option>
                                <option value="velika">Velika</option>
                                <option value="mala">Mala</option>
                                <option value="normalna">Normalna</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="nijansa_obrva">Nijansa obrve:</label>
                            <select class="form-control" name = "nijansa_obrva" id="nijansa_obrva">
                                <option value="">Odaberite...</option>
                                <option value="tamnosmedja">Tamno smeđa</option>
                                <option value="svjetlosmedja">Svjetlo smeđa</option>
                                <option value="tamnoplava">Tamno plava</option>
                                <option value="svjetloplava">Svjetlo plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_usana">Velicina usana:</label>
                            <select class="form-control" name = "velicina_usana" id="velicina_usana">
                                <option value="">Odaberite...</option>
                                <option value="tanka">Tanka</option>
                                <option value="normalna">Normalna</option>
                                <option value="puna">Puna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_usana">Nijansa usana:</label>
                            <input type=color name='nijansa_usana' title='hexadecimal color' placeholder='#000000'>
                        </div>
                        <div class="form-group">
                            <label for="duzina_trepavica">Dužina trepavica:</label>
                            <select class="form-control" name = "duzina_trepavica" id="duzina_trepavica">
                                <option value="">Odaberite...</option>
                                <option value="kratka">Kratka</option>
                                <option value="normalna">Normalna</option>
                                <option value="duga">Duga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gustoca_trepavica">Gustoća trepavica:</label>
                            <select class="form-control" name = "gustoca_trepavica" id="gustoca_trepavica">
                                <option value="">Odaberite...</option>
                                <option value="rijetka">Rijetka</option>
                                <option value="gusta">Gusta</option>
                                <option value="normalna">Normalna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="uvijenost_trepavica">Uvijenost trepavica:</label>
                            <select class="form-control" name = "uvijenost_trepavica" id="uvijenost_trepavica">
                                <option value="">Odaberite...</option>
                                <option value="uvijene">Uvijene</option>
                                <option value="neuvijene">Neuvijene</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_trepavica">Nijansa trepavica:</label>
                            <select class="form-control" name = "nijansa_trepavica" id="nijansa_trepavica">
                                <option value="">Odaberite...</option>
                                <option value="svjetla">Svjetla</option>
                                <option value="tamna">Tamna</option>
                            </select>
                        </div>
                        <div class="form-group">

                            <input type="submit" class="form-control" name ="registracija" id="submit" value="Registracija">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html><?php }} ?>
