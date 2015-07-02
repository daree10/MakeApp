<script src='js/ajax.js'>
    
</script>
<script>
    $(document).ready(function(){
        
        
      $("#tip").change(function(){
            var id=$(this).val();
            generateElements(id);
        });
    
    });
    getBrand2({$smarty.session.id},{$smarty.session.tip_korisnika_id});
    getProductType2({$smarty.session.id},{$smarty.session.tip_korisnika_id});
    function generateElements(id){
        console.log("a");
            switch(id) {
                 case '1':
                    var html="";
                     html+="<label for='nijansa_obrva'>Nijansa obrve:</label>"
                         +"<select class='form-control' name = 'nijansa_obrva' id='nijansa_obrva'>"
                         +"<option value='' selected>Odaberite...</option>"
                         +"<option value='tamnosmedja'>Tamno smeđa</option>"
                         +"<option value='svjetlosmedja'>Svjetlo smeđa</option>"
                         +"<option value='tamnoplava'>Tamno plava</option>"
                         +"<option value='svjetloplava'>Svjetlo plava</option>"
                         +"</select><br>";
                 
                     html+="<label for='nijansa_kozmetike'>Nijansa kozmetike:</label>";
                     html+="<input type=color name='nijansa_kozmetike' title='hexadecimal color' placeholder='#000000'>";
                     
                     $("#changingGroup").html(html);
                    break;
                case '2':
                    var html="";
                    
                    html+="<label for='duzina_trepavica'>Dužina trepavica:</label>"
                        +"<select class='form-control' name = 'duzina_trepavica' id='duzina_trepavica'>"
                        +"<option value=''>Odaberite...</option>"
                        +"<option value='kratka'>Kratka</option>"
                        +"<option value='normalna'>Normalna</option>"
                        +"<option value='duga'>Duga</option>"
                        +"</select><br>";
                
                   html+="<label for='gustoca_trepavica'>Gustoća trepavica:</label>"
                         +"<select class='form-control' name = 'gustoca_trepavica' id='gustoca_trepavica'>"
                         +"<option value=''>Odaberite...</option>"
                         +"<option value='rijetka'>Rijetka</option>"
                         +"<option value='gusta'>Gusta</option>"
                         +"<option value='normalna'>Normalna</option>"
                         +"</select><br>";
                 
                   html+="<label for='uvijenost_trepavica'>Uvijenost trepavica:</label>"
                         +"<select class='form-control' name = 'uvijenost_trepavica' id='uvijenost_trepavica'>"
                         +"<option value=''>Odaberite...</option>"
                         +"<option value='uvijene'>Uvijene</option>"
                         +"<option value='neuvijene'>Neuvijene</option>"
                         +"</select><br>";
                 
                   html+="<label for='nijansa_trepavica'>Nijansa trepavica:</label>"
                       +"<select class='form-control' name = 'nijansa_trepavica' id='nijansa_trepavica'>"
                       +"<option value=''>Odaberite...</option>"
                       +"<option value='svjetla'>Svjetla</option>"
                       +"<option value='tamna'>Tamna</option>"
                       +"</select><br>";
                    

                     html+="<label for='trusenje'>Trusi se:</label>"
                       +"<select class='form-control' name = 'trusenje' id='nijansa_trepavica'>"
                       +"<option value=''>Odaberite...</option>"
                       +"<option value='da'>Da</option>"
                       +"<option value='ne'>Ne</option>"
                       +"</select><br>";
                    
                   
                
                    $("#changingGroup").html(html);
                    
                    break;
                    
            case '3':
                var html="<label for='podton'>Podton:</label>"
                        +"<select class='form-control' name = 'podton' id='podton'>"
                        +"<option value=''>Odaberite...</option>"
                        +"<option value='rozi'>Rozi</option>"
                        +"<option value='neutralni'>Neutralni</option>"
                        +"<option value='zuti'>Žuti</option>"
                        +"<option value='maslina'>Maslinasti</option>"
                        +"</select><br>";
                
                html+="<label for='tip_koze'>Tip kože:</label>"
                            +"<select class='form-control' name = 'tip_koze' id='tip_koze'>"
                            +"<option value=''>Odaberite...</option>"
                            +"<option value='normalna'>Normalan</option>"
                            +"<option value='suha'>Suhi</option>"
                            +"<option value='masna'>Masni</option>"
                            +"<option value='mjesovit'>Mješovit</option>"
                            +"</select><br>";
                
                html+="<label for='ten'>Ten:</label>"
                       +"<select class='form-control' name = 'ten' id='ten'>"
                       +"<option value=''>Odaberite...</option>"
                       +"<option value='topli'>Topli</option>"
                       +"<option value='hladni'>Hladni</option>"
                       +"</select><br>";
               
               html+="<label for='nijansa_kozmetike'>Nijansa kozmetike:</label>";
               html+="<input type=color name='nijansa_kozmetike' title='hexadecimal color' placeholder='#000000'>";
                
                 $("#changingGroup").html(html);
                
                break;
                
            case '4':
                var html="<label for='boja_ociju'>Boja očiju:</label>"
                        +"<select class='form-control' name = 'boja_ociju' id='boja_ociju'>"
                        +"<option value=''>Odaberite...</option>"
                        +"<option value='smedja'>Smeđa</option>"
                        +"<option value='zelena'>Zelena</option>"
                        +"<option value='plava'>Plava</option>"
                        +"</select><br>";
                
                html+="<label for='velicina_ociju'>Veličina očiju:</label>"
                        +"<select class='form-control' name = 'velicina_ociju' id='velicina_ociju'>"
                        +"<option value=''>Odaberite...</option>"
                        +"<option value='velika'>Velika</option>"
                        +"<option value='mala'>Mala</option>"
                        +"<option value='normalna'>Normalna</option>"
                        +"</select><br>";
                
                 
                
                 html+="<label for='nijansa_kozmetike'>Nijansa kozmetike:</label>";
                 html+="<input type=color name='nijansa_kozmetike' title='hexadecimal color' placeholder='#000000'>";
                
                 $("#changingGroup").html(html);
                
                break;
                
                
            case '5':
                
               var html=" <label for='velicina_usana'>Velicina usana:</label>"
                     +"<select class='form-control' name = 'velicina_usana' id='velicina_usana'>"
                     +"<option value=''>Odaberite...</option>"
                     +"<option value='tanka'>Tanka</option>"
                     +"<option value='normalna'>Normalna</option>"
                     +"<option value='puna'>Puna</option>"
                     +"</select><br>";
             
                html+="<label for='nijansa_usana'>Nijansa usana:</label>"
                    +"<input type=color name='nijansa_usana' title='hexadecimal color' placeholder='#000000'>";
                
                 $("#changingGroup").html(html);
                break;
               
            } 
    }
    
  
</script>
<div class="col-sm-10" >
                    <h2>{$title}</h2>

                    <form role="form" method="post" action="dodavanje_kozmetike.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="naziv">Brand:</label>
                            <select id="brand" name="brand" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tip">Tip kozmetike:</label>
                            <select  id="tip" name="tip_proizvoda" required>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="naziv">Naziv:</label>
                            <input type="text" class="form-control"  name="naziv" id="naziv" required>
                        </div>
                        <div class="form-group">
                            <label for="cijena">Cijena (HRK):</label>
                            <input type="number" class="form-control"  name="cijena" id="cijena" required>
                        </div>
                        <div class="form-group">
                            <label for="kol">Količina:</label>
                            <input type="number" class="form-control"  name="kol" id="kol" required>
                        </div>
                        <div class="form-group">
                            <label for="slika">Slika:</label>
                            <input type="file" class="form-control"  name="slika" id="slika">
                        </div>
                        <div class="form-group">
                            <label for="trajnost">Trajnost:</label>
                            <input type="number" class="form-control"  name="trajnost" id="trajnost" required>
                        </div>
                        {*OVDJE IDU IZMJENJUJUCE FORME*}
                        <div class="form-group" id="changingGroup">

                          
                        </div>
                        <div class="form-group" >

                            <input type="submit" class="form-control" name ="dodaj" id="submit" value="Dodaj">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>