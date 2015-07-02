<div class="container-fluid">


            <div class="row">
                <div class="col-sm-2 subsection">
                {if isset($smarty.session.id)}
                    
                    {if $smarty.session.tip_korisnika_id eq 1}

                            <a href='profil.php?idKor={$smarty.session.id}"' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-user'></span> Moj profil</a>
                       {else if $smarty.session.tip_korisnika_id eq 2}
                        
                            <a href='profil.php?idKor={$smarty.session.id}"' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-user'></span> Moj profil</a>
                            <a href='dodavanje_kozmetike.php' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-plus'></span> Unos kozmetike</a>
                            <a href='dodavanje_branda.php' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-plus'></span> Unos branda</a>

                        {else if $smarty.session.tip_korisnika_id eq 3}
                            
                            <a href='popis_kozmetike.php' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis kozmetike</a>
                            <a href='popis_tipova_kozmetike.php' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis tipova kozmetike</a>
                            <a href='popis_tipova_kor.php' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis tipova korisnika</a>
                            <a href='popis_branda.php' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis branda</a>
                            <a href='popis_korisnika.php' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span> Popis korisnika</a>
                            <a href='izvjestajpretrage.php' class='btn btn-default btn-block' role='button'><span class='glyphicon glyphicon-th-list'></span>Popis pretraga</a>
                            

                    {/if}
                    
                    <a href="pretraga.php" class="btn btn-default btn-block" role="button"><span class="glyphicon glyphicon-search"></span> Barbie.NET pretraga</a>
                    <a href="odjava.php" class="btn btn-default btn-block" role="button"><span class="glyphicon glyphicon-log-out"></span> Odjava</a>
                    {else}
                        <a href="prijava.php" class="btn btn-default btn-block" role="button"><span class="glyphicon glyphicon-log-in"></span> Prijava</a>
                        <a href="registracija.php" class="btn btn-default btn-block" role="button"><span class="glyphicon glyphicon-pencil"></span> Registracija</a>
                    {/if}
                
                   

                </div>