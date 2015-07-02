<div class="col-sm-10" >
                    <h2>Registracija</h2>
                   {if isset($greska)}
                        <div class='alert alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Greska!</strong> {$greska}
                        </div>
                    {/if}
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
                            <select class="form-control" name = "podton" id="podton" required>
                                <option value="">Odaberite...</option>
                                <option value="rozi">Rozi</option>
                                <option value="neutralni">Neutralni</option>
                                <option value="zuti">Žuti</option>
                                <option value="maslina">Maslinasti</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tip_koze">Tip kože:</label>
                            <select class="form-control" name = "tip_koze" id="tip_koze" required>
                                <option value="">Odaberite...</option>
                                <option value="normalna">Normalan</option>
                                <option value="suha">Suhi</option>
                                <option value="masna">Masni</option>
                                <option value="mjesovit">Mješovit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ten">Ten:</label>
                            <select class="form-control" name = "ten" id="ten" required>
                                <option value="">Odaberite...</option>
                                <option value="topli">Topli</option>
                                <option value="hladni">Hladni</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="boja_ociju">Boja očiju:</label>
                            <select class="form-control" name = "boja_ociju" id="boja_ociju" required>
                                <option value="">Odaberite...</option>
                                <option value="smedja">Smeđa</option>
                                <option value="zelena">Zelena</option>
                                <option value="plava">Plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_ociju">Veličina očiju:</label>
                            <select class="form-control" name = "velicina_ociju" id="velicina_ociju" required>
                                <option value="">Odaberite...</option>
                                <option value="velika">Velika</option>
                                <option value="mala">Mala</option>
                                <option value="normalna">Normalna</option>
                            </select>
                        </div>
                       
                        <div class="form-group">
                            <label for="nijansa_obrva">Nijansa obrve:</label>
                            <select class="form-control" name = "nijansa_obrva" id="nijansa_obrva" required>
                                <option value="">Odaberite...</option>
                                <option value="tamnosmedja">Tamno smeđa</option>
                                <option value="svjetlosmedja">Svjetlo smeđa</option>
                                <option value="tamnoplava">Tamno plava</option>
                                <option value="svjetloplava">Svjetlo plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_usana">Velicina usana:</label>
                            <select class="form-control" name = "velicina_usana" id="velicina_usana" required>
                                <option value="">Odaberite...</option>
                                <option value="tanka">Tanka</option>
                                <option value="normalna">Normalna</option>
                                <option value="puna">Puna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_usana">Nijansa usana:</label>
                            <input type=color name='nijansa_usana' title='hexadecimal color' placeholder='#000000' required>
                        </div>
                        <div class="form-group">
                            <label for="duzina_trepavica">Dužina trepavica:</label>
                            <select class="form-control" name = "duzina_trepavica" id="duzina_trepavica" required>
                                <option value="">Odaberite...</option>
                                <option value="kratka">Kratka</option>
                                <option value="normalna">Normalna</option>
                                <option value="duga">Duga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gustoca_trepavica">Gustoća trepavica:</label>
                            <select class="form-control" name = "gustoca_trepavica" id="gustoca_trepavica" required>
                                <option value="">Odaberite...</option>
                                <option value="rijetka">Rijetka</option>
                                <option value="gusta">Gusta</option>
                                <option value="normalna">Normalna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="uvijenost_trepavica">Uvijenost trepavica:</label>
                            <select class="form-control" name = "uvijenost_trepavica" id="uvijenost_trepavica" required>
                                <option value="">Odaberite...</option>
                                <option value="uvijene">Uvijene</option>
                                <option value="neuvijene">Neuvijene</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_trepavica">Nijansa trepavica:</label>
                            <select class="form-control" name = "nijansa_trepavica" id="nijansa_trepavica" required>
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
</html>