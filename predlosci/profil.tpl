<div class="col-sm-10" >
{if isset($greska)}
                        <div class='alert alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Greska!</strong> {$greska}
                        </div>
                    {/if}
{if isset($uspjeh)}
                        <div class='alert alert-success'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Uspjeh!</strong> {$uspjeh}
                        </div>
                    {/if}
                    
                    <form id="a" role="form" method="post" action="profil.php?idKor={$smarty.get.idKor}">
{if $smarty.session.tip_korisnika_id eq 3 and $smarty.get.idKor neq 4}
    {if $tip_korisnika eq 1}
            <input type='submit' class='form-control btn btn-primary' name ='change' id='submit' value='Učini zaposlenikom'>
            {else}
            <input type='submit' class='form-control btn btn-primary' name ='change' id='submit' value='Učini običnim korisnikom'>
    {/if}
 {/if}
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" value="{$korime}" id="email">
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
                            <input type="text" class="form-control" name = "ime" value="{$ime}" id="ime">
                        </div>
                        <div class="form-group">
                            <label for="prezime">Prezime:</label>
                            <input type="text" class="form-control" name = "prezime" value="{$prezime}" id="prezime">
                        </div>
                        <div class="form-group">
                            <label>Sljedeća polja nisu obavezna te se mogu ispuniti kasnije</label>
                        </div>
                        <div class="form-group">
                            <label for="podton">Podton:</label>
                            <select class="form-control" name = "podton" id="podton">
                                <option {if $podton eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $podton eq "rozi"} selected {/if} value="rozi">Rozi</option>
                                <option {if $podton eq "neutralni"} selected {/if} value="neutralni">Neutralni</option>
                                <option {if $podton eq "zuti"} selected {/if} value="zuti">Žuti</option>
                                <option {if $podton eq "maslina"} selected {/if} value="maslina">Maslinasti</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tip_koze">Tip kože:</label>
                            <select class="form-control" name = "tip_koze" id="tip_koze">
                                <option {if $tip_koze eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $tip_koze eq "normalna"} selected {/if} value="normalna">Normalna</option>
                                <option {if $tip_koze eq "suha"} selected {/if} value="suha">Suha</option>
                                <option {if $tip_koze eq "masna"} selected {/if} value="masna">Masna</option>
                                <option {if $tip_koze eq "mjesovit"} selected {/if} value="mjesovit">Mješovit</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ten">Ten:</label>
                            <select class="form-control" name = "ten" id="ten">
                                <option {if $ten eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $ten eq "topli"} selected {/if} value="topli">Topli</option>
                                <option {if $ten eq "hladni"} selected {/if} value="hladni">Hladni</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="boja_ociju">Boja očiju:</label>
                            <select class="form-control" name = "boja_ociju" id="boja_ociju">
                                <option {if $boja_ociju eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $boja_ociju eq "smedja"} selected {/if} value="smedja">Smeđa</option>
                                <option {if $boja_ociju eq "zelena"} selected {/if} value="zelena">Zelena</option>
                                <option {if $boja_ociju eq "plava"} selected {/if} value="plava">Plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_ociju">Veličina očiju:</label>
                            <select class="form-control" name = "velicina_ociju" id="velicina_ociju">
                                <option {if $velicina_ociju eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $velicina_ociju eq "velika"} selected {/if} value="velika">Velika</option>
                                <option {if $velicina_ociju eq "mala"} selected {/if} value="mala">Mala</option>
                                <option {if $velicina_ociju eq "normalna"} selected {/if} value="normalna">Normalna</option>
                            </select>
                        </div>
                      
                        <div class="form-group">
                            <label for="nijansa_obrva">Nijansa obrve:</label>
                            <select class="form-control" name = "nijansa_obrva" id="nijansa_obrva">
                                <option {if $nijansa_obrva eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $nijansa_obrva eq "tamnosmedja"} selected {/if} value="tamnosmedja">Tamno smeđa</option>
                                <option {if $nijansa_obrva eq "svjetlosmedja"} selected {/if} value="svjetlosmedja">Svjetlo smeđa</option>
                                <option {if $nijansa_obrva eq "tamnoplava"} selected {/if} value="tamnoplava">Tamno plava</option>
                                <option {if $nijansa_obrva eq "svjetloplava"} selected {/if} value="svjetloplava">Svjetlo plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_usana">Velicina usana:</label>
                            <select class="form-control" name = "velicina_usana" id="velicina_usana">
                                <option {if $velicina_usana eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $velicina_usana eq "tanka"} selected {/if} value="tanka">Tanka</option>
                                <option {if $velicina_usana eq "normalna"} selected {/if} value="normalna">Normalna</option>
                                <option {if $velicina_usana eq "puna"} selected {/if} value="puna">Puna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_usana">nijansa usana:</label>
                            {if $nijansa_usana eq ""}
                            <input type=color name='nijansa_usana' title='hexadecimal color' placeholder='#000000'>
                            {else if $nijansa_usana neq ""}
                            <input type=color name='nijansa_usana' title='hexadecimal color' value={$nijansa_usana}> 
                           {/if}
                               
                        </div>
                        <div class="form-group">
                            <label for="duzina_trepavica">Dužina trepavica:</label>
                            <select class="form-control" name = "duzina_trepavica" id="duzina_trepavica">
                                <option {if $duzina_trepavica eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $duzina_trepavica eq "kratka"} selected {/if} value="kratka">Kratka</option>
                                <option {if $duzina_trepavica eq "normalna"} selected {/if} value="normalna">Normalna</option>
                                <option {if $duzina_trepavica eq "duga"} selected {/if} value="duga">Duga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gustoca_trepavica">Gustoća trepavica:</label>
                            <select class="form-control" name = "gustoca_trepavica" id="gustoca_trepavica">
                                <option {if $gustoca_trepavica eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $gustoca_trepavica eq "rijetka"} selected {/if} value="rijetka">Rijetka</option>
                                <option {if $gustoca_trepavica eq "gusta"} selected {/if} value="gusta">Gusta</option>
                                <option {if $gustoca_trepavica eq "normalna"} selected {/if} value="normalna">Normalna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="uvijenost_trepavica">Uvijenost trepavica:</label>
                            <select class="form-control" name = "uvijenost_trepavica" id="uvijenost_trepavica">
                                <option {if $uvijenost_trepavica eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $uvijenost_trepavica eq "uvijene"} selected {/if} value="uvijene">Uvijene</option>
                                <option {if $uvijenost_trepavica eq "neuvijene"} selected {/if} value="neuvijene">Neuvijene</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_trepavica">Nijansa trepavica:</label>
                            <select class="form-control" name = "nijansa_trepavica" id="nijansa_trepavica">
                                <option {if $nijansa_trepavica eq ""} selected {/if} value="">Odaberite...</option>
                                <option {if $nijansa_trepavica eq "svjetla"} selected {/if} value="svjetla">Svjetla</option>
                                <option {if $nijansa_trepavica eq "tamna"} selected {/if} value="tamna">Tamna</option>
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
</html>