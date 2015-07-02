<?php /* Smarty version Smarty-3.1.18, created on 2015-06-21 17:17:17
         compiled from "predlosci\pretraga.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17509557730fd455386-32661287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d2d671862d6037bcb6ba462e44aeffba28360e' => 
    array (
      0 => 'predlosci\\pretraga.tpl',
      1 => 1434899804,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17509557730fd455386-32661287',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_557730fd599747_72741662',
  'variables' => 
  array (
    'greska' => 0,
    'podton' => 0,
    'tip_koze' => 0,
    'ten' => 0,
    'boja_ociju' => 0,
    'velicina_ociju' => 0,
    'nijansa_obrva' => 0,
    'velicina_usana' => 0,
    'duzina_trepavica' => 0,
    'gustoca_trepavica' => 0,
    'uvijenost_trepavica' => 0,
    'nijansa_trepavica' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557730fd599747_72741662')) {function content_557730fd599747_72741662($_smarty_tpl) {?><div class="col-sm-10" style="background-color:lavenderblush;">
                    <h2>Pretraga</h2>
                   <?php if (isset($_smarty_tpl->tpl_vars['greska']->value)) {?>
                        <div class='alert alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Greska!</strong> <?php echo $_smarty_tpl->tpl_vars['greska']->value;?>

                        </div>
                   <?php }?>
                   <div class="form-group">
                       <input type="submit" class="form-control" name ="pokupi" id="submit" value="Pokupi moje podatke"><br>
                       <button type="button" class="form-control " name ="pokupi" data-toggle="modal" data-target="#myModal" >Unesite zeljene podatke</button>
                   </div>
                    <!-- Modal -->
                   <div id="myModal" class="modal fade" role="dialog">
                       <div class="modal-dialog">
                           <div class="modal-content">
                               <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Unesite podatke</h4>
                                </div>
                               <div class="modal-body">
                                   <form role="form" method="post" action="pretraga.php">
                        <div class="form-group">
                            <label>Sva polja su obavezna</label>
                        </div>
                        <div class="form-group">
                            <label for="podton">Podton:</label>
                            <select class="form-control" name = "podton" id="podton" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['podton']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['podton']->value=="rozi") {?> selected <?php }?> value="rozi">Rozi</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['podton']->value=="neutralni") {?> selected <?php }?> value="neutralni">Neutralni</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['podton']->value=="zuti") {?> selected <?php }?> value="zuti">Žuti</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tip_koze">Tip kože:</label>
                            <select class="form-control" name = "tip_koze" id="tip_koze" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=="normalna") {?> selected <?php }?> value="normalna">Normalna</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=="suha") {?> selected <?php }?> value="suha">Suha</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=="masna") {?> selected <?php }?> value="masna">Masna</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['tip_koze']->value=="osjetljiva") {?> selected <?php }?> value="osjetljiva">Osjetljiva</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ten">Ten:</label>
                            <select class="form-control" name = "ten" id="ten" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['ten']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['ten']->value=="Topli") {?> selected <?php }?> value="topli">Topli</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['ten']->value=="Hladni") {?> selected <?php }?> value="hladni">Hladni</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="boja_ociju">Boja očiju:</label>
                            <select class="form-control" name = "boja_ociju" id="boja_ociju" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['boja_ociju']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['boja_ociju']->value=="Zelena") {?> selected <?php }?> value="zelena">Zelena</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['boja_ociju']->value=="Smeđa") {?> selected <?php }?> value="smeđa">Smeđa</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['boja_ociju']->value=="Plava") {?> selected <?php }?> value="plava">Plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_ociju">Veličina očiju:</label>
                            <select class="form-control" name = "velicina_ociju" id="velicina_ociju" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_ociju']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_ociju']->value=="Velika") {?> selected <?php }?> value="velika">Velika</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_ociju']->value=="Mala") {?> selected <?php }?> value="mala">Mala</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_ociju']->value=="Normalna") {?> selected <?php }?> value="normalna">Normalna</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="nijansa_obrva">Nijansa obrve:</label>
                            <select class="form-control" name = "nijansa_obrva" id="nijansa_obrva" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=="Tamno smeđa") {?> selected <?php }?> value="Tamnosmedja">Tamno smeđa</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=="Svjetlo smeđa") {?> selected <?php }?> value="svjetlosmedja">Svjetlo smeđa</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=="Tamno plava") {?> selected <?php }?> value="tamnoplava">Tamno plava</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_obrva']->value=="Svjetlo plava") {?> selected <?php }?> value="svjetloplava">Svjetlo plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_usana">Velicina usana:</label>
                            <select class="form-control" name = "velicina_usana" id="velicina_usana" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_usana']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_usana']->value=="Tanka") {?> selected <?php }?> value="tanka">Tanka</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_usana']->value=="Puna") {?> selected <?php }?> value="puna">Puna</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['velicina_usana']->value=="Normalna") {?> selected <?php }?> value="normalna">Normalna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="duzina_trepavica">Dužina trepavica:</label>
                            <select class="form-control" name = "duzina_trepavica" id="duzina_trepavica" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['duzina_trepavica']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['duzina_trepavica']->value=="Kratka") {?> selected <?php }?> value="kratka">Kratka</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['duzina_trepavica']->value=="Normalna") {?> selected <?php }?> value="normalna">Normalna</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['duzina_trepavica']->value=="Duga") {?> selected <?php }?> value="duga">Duga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gustoca_trepavica">Gustoća trepavica:</label>
                            <select class="form-control" name = "gustoca_trepavica" id="gustoca_trepavica" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['gustoca_trepavica']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['gustoca_trepavica']->value=="gustoca_trepavica1") {?> selected <?php }?> value="rijetka">Rijetka</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['gustoca_trepavica']->value=="gustoca_trepavica2") {?> selected <?php }?> value="gusta">Gusta</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['gustoca_trepavica']->value=="gustoca_trepavica3") {?> selected <?php }?> value="normalna">Normalna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="uvijenost_trepavica">Uvijenost trepavica:</label>
                            <select class="form-control" name = "uvijenost_trepavica" id="uvijenost_trepavica" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['uvijenost_trepavica']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['uvijenost_trepavica']->value=="uvijenost_trepavica1") {?> selected <?php }?> value="uvijene">Uvijene</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['uvijenost_trepavica']->value=="uvijenost_trepavica2") {?> selected <?php }?> value="neuvijene">Neuvijene</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_trepavica">Nijansa trepavica:</label>
                            <select class="form-control" name = "nijansa_trepavica" id="nijansa_trepavica" required>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_trepavica']->value=='') {?> selected <?php }?> value="">Odaberite...</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_trepavica']->value=="nijansa_trepavica1") {?> selected <?php }?> value="svjetla">Svjetla</option>
                                <option <?php if ($_smarty_tpl->tpl_vars['nijansa_trepavica']->value=="nijansa_trepavica2") {?> selected <?php }?> value="tamna">Tamna</option>
                
                            </select>
                        </div>
                        <div class="form-group">
                            
                            <input type="submit" class="form-control" name ="pretraga" id="submit" value="Pretraži"><br>
                            <button type="button" class="form-control" data-dismiss="modal">Odustani</button>
                        </div>
                    </form>
                               </div>
                               
                           </div>
                       </div>
                   </div>
                   <!-- KRAJ Modal -->
                </div>
            </div>
        </div>
        <script>
            
            $(document).ready(function(){
                $("#submit").click(function(){
                    
                });
                    
                
                
            });
            
            
            
            
        </script>
    </body>
</html><?php }} ?>
