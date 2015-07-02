<div class="col-sm-10" >
    <div class="form-group col-md-10">
      <div class='col-md-10 razmak' id='product'>
           <img src='' id='imgproduct'  class='img-responsive' width='400' height='550'/>                       
                <h4 id='b'></h4>
                <h5 id='n'></h5>
                <kbd id='p'></kbd>
                <br><br>
                <div class="form-group">
                    {if $smarty.session.tip_korisnika_id eq 3}
                     <button type="button" class="form-control col-md-10 " name ="otvoriModal" data-toggle="modal" data-target="#myModal" >Uredi</button>
                    {/if}
                </div><br><br>
                
                <div class="form-group">
                     <button type="button" class="form-control col-md-10 " name ="otvoriModal" data-toggle="modal" data-target="#ocjeneModal" >Ocijeni</button>
                </div>
                
           </div>
        

      
    </div>
      <div id="ocjeneModal" class="modal fade" role="dialgo">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                       <h4 class="modal-title">Ocijeni</h4>
                  </div>
                  <div class="modal-body">
                      <label>Ocijena:</label>
                      <select id="ocijena">
                          <option value="1">1</option> 
                          <option value="2">2</option> 
                          <option value="3">3</option> 
                          <option value="4">4</option> 
                          <option value="5">5</option> 
                      </select>
                  </div>
                  <button type="button" class="form-control" id="ocijeni">Ocijeni</button><br>
                  <button type="button" class="form-control" data-dismiss="modal">Odustani</button>
              </div>
              
          </div>
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
                            
                    <form id="update" enctype="multipart/form-data" action="detaljProizvoda.php" method="GET">
                          <div class="form-group" id="all">
                           <input type="hidden" class="form-control"  name="idproizvod" value="{$smarty.get.idproizvod}" required>
                           <input type="hidden" class="form-control"  name="idtip" value="{$smarty.get.idtip}" required>
                        <div class="form-group">
                            <label for="naziv">Brand:</label>
                            <select id="brand" name="brand" required>
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
                            <label for="trajnost">Trajnost:</label>
                            <input type="number" class="form-control"  name="trajnost" id="trajnost" required>
                            
                     </div>
                              
                         <div class="form-group" id="changingGroup">
                           
                        </div>  
                              <div class="form-group">
                            
                            <input type="submit" form="update" class="form-control" name ="update" id="submit" value="Azuriraj"><br>
                            <button type="button" class="form-control" data-dismiss="modal">Odustani</button>
                        </div>
                  </div>
                  </form>       
               </div>
                        
                       
                    
                               </div>
                               
                           </div>
                       </div>
                   </div>
                   <!-- KRAJ Modal -->
                   
                </div>
            </div>
        </div>
<script src='js/ajax.js'>
    
</script>
        <script>
            
             var nijansa_obrva1,duzina_trepavica1,gustoca_trepavica1,uvijenost_trepavica1,nijansa_trepavica1,trusenje1;
             var podton1,tip_koze1,ten1,nijansa_kozmetike1,boja_ociju1,velicina_ociju1,velicina_usana1,nijansa_usana1;
             var brand1,naziv1,kol1,cijena1,slika1,trajnost1;
            
    $(document).ready(function(){
                
               fillData();
               getBrand2(4,3);
               
               $("#ocijeni").click(function(){
                  
                   $.ajax({
                            url: "../r1504/apiAJAX/ratingAPI.php",
                            dataType: "json",
                            type: "POST",
                            data:{
                                ocjena: $("#ocijena").val(),
                                id_proizvod:{$smarty.get.idproizvod},
                                id_korisnik: {$smarty.session.id}
                                },
                            success: function (json) {
                                if(json.status=="ne")
                                    alert("Vec ste ocijenili!");
                              
                                
                            },
                            error: function () {
                                    console.log("eroece");
                                }
                            });
               
                });
               
                });
                
                

                function fillData(){
                     $.ajax({
                            url: "../r1504/apiAJAX/productDetailAPI.php",
                            dataType: "json",
                            type: "GET",
                            data:{
                                idtip: {$smarty.get.idtip},
                                idproizvod:{$smarty.get.idproizvod}
                                },
                            success: function (json) 
                                    {
                                
                               $.each(json,function(){
                                    brand1=this.brandnaziv;
                                    naziv1=this.naziv;
                                    kol1=this.kolicina;
                                    cijena1=this.cijena;
                                    slika1=this.url_slika;
                                    trajnost1=this.trajnost;
                                    nijansa_obrva1=this.nijansa_obrva;
                                    duzina_trepavica1=this.duzina_trepavica;
                                    gustoca_trepavica1=this.gustoca_trepavica;
                                    uvijenost_trepavica1=this.uvijenost_trepavica;
                                    nijansa_trepavica1=this.nijansa_trepavica;
                                    trusenje1=this.trusenje;
                                   
                                    podton1= this.podton;
                                    tip_koze1= this.tip_koze;
                                    ten1=this.ten;
                                    nijansa_kozmetike1=this.nijansa;
                                    boja_ociju1=this.boja_ociju;
                                    velicina_ociju1=this.velicina_ociju;
                                    velicina_usana1=this.velicina_usana;
                                    nijansa_usana1=this.nijansa;
                               });
                               
                               
                               $("#imgproduct").attr("src",slika1);
                               $("#b").html(brand1);
                               $("#n").html(naziv1);
                               $("#p").html(cijena1+ " KN");
                               generateElements({$smarty.get.idtip});
                            },
                            error: function () {
                                    console.log("eroece");
                                }
                            });
                }
        
           function generateElements(id){
           $("#naziv").val(naziv1);
           $("#cijena").val(cijena1);
           $("#kol").val(kol1);
           $("#trajnost").val(trajnost1);
           $("#brand > option[value='"+brand1+"']").prop("selected",true);
            switch(id) {
                 case 1:
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
                     html+="<input type=color name='nijansa_kozmetike' id='nijansa_kozmetike' title='hexadecimal color' >";
                     
                     $("#changingGroup").html(html);
                     
                     $("#nijansa_obrva > option[value='"+nijansa_obrva1+"']").prop("selected",true);
                     $("#nijansa_kozmetike").val(nijansa_kozmetike1);
                    break;
                case 2:
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
                       +"<select class='form-control' name = 'trusenje' id='trusenje'>"
                       +"<option value=''>Odaberite...</option>"
                       +"<option value='da'>Da</option>"
                       +"<option value='ne'>Ne</option>"
                       +"</select><br>";
                    
                   
                
                    $("#changingGroup").html(html);
                    $("#duzina_trepavica > option[value='"+duzina_trepavica1+"']").prop("selected",true);
                    $("#gustoca_trepavica > option[value='"+gustoca_trepavica1+"']").prop("selected",true);
                    $("#uvijenost_trepavica > option[value='"+uvijenost_trepavica1+"']").prop("selected",true);
                    $("#nijansa_trepavica > option[value='"+nijansa_trepavica1+"']").prop("selected",true);
                    
                    $("#trusenje > option[value='"+trusenje1+"']").prop("selected",true);
                    
                    break;
                    
            case 3:
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
               html+="<input type=color name='nijansa_kozmetike' id='nijansa_kozmetike' title='hexadecimal color' >";
                
                 $("#changingGroup").html(html);
                 
                 $("#podton> option[value='"+podton1+"']").prop("selected",true);
                 $("#tip_koze > option[value='"+tip_koze1+"']").prop("selected",true);
                 $("#ten > option[value='"+ten1+"']").prop("selected",true);
                 $("#nijansa_kozmetike").val(nijansa_kozmetike1);
               
                
                break;
                
            case 4:
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
                 html+="<input type=color name='nijansa_kozmetike' id='nijansa_kozmetike' title='hexadecimal color' >";
                
                 $("#changingGroup").html(html);
                 
                 $("#boja_ociju> option[value='"+boja_ociju1+"']").prop("selected",true);
                 $("#velicina_ociju > option[value='"+velicina_ociju1+"']").prop("selected",true);
                 $("#nijansa_kozmetike").val(nijansa_kozmetike1);
                console.log(nijansa_kozmetike1);
                break;
                
                
            case 5:
                
               var html=" <label for='velicina_usana'>Velicina usana:</label>"
                     +"<select class='form-control' name = 'velicina_usana' id='velicina_usana'>"
                     +"<option value=''>Odaberite...</option>"
                     +"<option value='tanka'>Tanka</option>"
                     +"<option value='normalna'>Normalna</option>"
                     +"<option value='puna'>Puna</option>"
                     +"</select><br>";
             
                html+="<label for='nijansa_usana'>Nijansa usana:</label>"
                    +"<input type=color name='nijansa_usana' id='nijansa_usana' title='hexadecimal color' >";
                
                 $("#changingGroup").html(html);
                  $("#velicina_usana > option[value='"+velicina_usana1+"']").prop("selected",true);
                  $("#nijansa_usana").val(nijansa_usana1);
                  console.log(nijansa_usana1);
                 
                break;
               
            } 
    }
        
        </script>
    </body>
</html>