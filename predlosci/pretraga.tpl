<div class="col-md-10" >
                    <h2>Pretraga</h2>
                   {if isset($greska)}
                        <div class='alert alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Greska!</strong> {$greska}
                        </div>
                   {/if}
                 
                   <div class="form-group col-md-10">
                       <button  class="form-control col-md-10" name ="pokupi" id="submit" />Pokupi moje podatke</button><br><br>
                       <button type="button" class="form-control col-md-10 " name ="otvoriModal" data-toggle="modal" data-target="#myModal" >Unesite zeljene podatke</button>
                   </div>
                   
                        <form class="form-inline col-md-10" role="form">
                    <div class="form-group col-md-2 ">
                     <label>Kozmetika za obrve: <input type="checkbox" id="Obrve"></label>  
                     <label>Brand: <select id="brandObrve"></select></label>
                   </div>
                    <div class="form-group col-md-2">
                     <label>Kozmetika za lice: <input type="checkbox" id="Lice"></label>  
                     <label>Brand: <select id="brandLice"></select></label>
                   </div>
                    <div class="form-group col-md-2">
                        <label>Kozmetika za usne: <input type="checkbox" id="Usne"></label>  
                     <label>Brand: <select id="brandUsne"></select></label>
                   </div>
                    <div class="form-group col-md-2">
                        <label>Kozmetika za oci:  <input type="checkbox" id="Oci"></label>  
                     <label>Brand: <select id="brandOci"></select></label>
                   </div>
                    <div class="form-group col-md-2">
                        <label>Kozmetika za trepavice: <input type="checkbox" id="Trepavice"></label>  
                        <label>Brand: <select id="brandTrepavice"></select></label>
                   </div>
                   </form>
                   <br>
      
                   
                   <div class="col-md-12 " id="obrveData">
                      
                       </div>
                   
                   <div class="col-md-12" id="liceData">
                      
                       </div>
                   
                   <div class="col-md-12" id="usneData">
                     
                       
                   </div>
                   <div class="col-md-12" id="ociData">
                      
                   </div>
                   
                   <div class="col-md-12" id="trepaviceData">
                      
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
                                   <form role="form" >
                        <div class="form-group">
                            <label>Sva polja su obavezna</label>
                        </div>
                        <div class="form-group">
                            <label for="podton">Podton:</label>
                            <select class="form-control" name = "podton" id="podton" required>
                                <option    value="">Odaberite...</option>
                                <option   value="rozi">Rozi</option>
                                <option  value="neutralni">Neutralni</option>
                                <option  value="zuti">Žuti</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tip_koze">Tip kože:</label>
                            <select class="form-control" name = "tip_koze" id="tip_koze" required>
                                <option  value="">Odaberite...</option>
                                <option  value="normalna">Normalna</option>
                                <option  value="suha">Suha</option>
                                <option  value="masna">Masna</option>
                                <option  value="osjetljiva">Osjetljiva</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ten">Ten:</label>
                            <select class="form-control" name = "ten" id="ten" required>
                                <option  value="">Odaberite...</option>
                                <option  value="topli">Topli</option>
                                <option  value="hladni">Hladni</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="boja_ociju">Boja očiju:</label>
                            <select class="form-control" name = "boja_ociju" id="boja_ociju" required>
                                <option  value="">Odaberite...</option>
                                <option  value="zelena">Zelena</option>
                                <option  value="smeđa">Smeđa</option>
                                <option  value="plava">Plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_ociju">Veličina očiju:</label>
                            <select class="form-control" name = "velicina_ociju" id="velicina_ociju" required>
                                <option  value="">Odaberite...</option>
                                <option  value="velika">Velika</option>
                                <option  value="mala">Mala</option>
                                <option  value="normalna">Normalna</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="nijansa_obrva">Nijansa obrve:</label>
                            <select class="form-control" name = "nijansa_obrva" id="nijansa_obrva" required>
                                <option  value="">Odaberite...</option>
                                <option  value="Tamnosmedja">Tamno smeđa</option>
                                <option  value="svjetlosmedja">Svjetlo smeđa</option>
                                <option  value="tamnoplava">Tamno plava</option>
                                <option  value="svjetloplava">Svjetlo plava</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="velicina_usana">Velicina usana:</label>
                            <select class="form-control" name = "velicina_usana" id="velicina_usana" required>
                                <option  value="">Odaberite...</option>
                                <option  value="tanka">Tanka</option>
                                <option  value="puna">Puna</option>
                                <option  value="normalna">Normalna</option>
                            </select>
                        </div>
                                       
                        <div  class="form-group">
                            <label for="nijansa_usana">Nijansa usana:</label>
                            <input type=color id="nijansa_usana" name='nijansa_usana' title='hexadecimal color'/>
                         </div>
                        <div class="form-group">
                            <label for="duzina_trepavica">Dužina trepavica:</label>
                            <select class="form-control" name = "duzina_trepavica" id="duzina_trepavica" required>
                                <option value="">Odaberite...</option>
                                <option  value="kratka">Kratka</option>
                                <option  value="normalna">Normalna</option>
                                <option  value="duga">Duga</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="gustoca_trepavica">Gustoća trepavica:</label>
                            <select class="form-control" name = "gustoca_trepavica" id="gustoca_trepavica" required>
                                <option  value="">Odaberite...</option>
                                <option  value="rijetka">Rijetka</option>
                                <option  value="gusta">Gusta</option>
                                <option value="normalna">Normalna</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="uvijenost_trepavica">Uvijenost trepavica:</label>
                            <select class="form-control" name = "uvijenost_trepavica" id="uvijenost_trepavica" required>
                                <option  value="">Odaberite...</option>
                                <option   value="uvijene">Uvijene</option>
                                <option  value="neuvijene">Neuvijene</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nijansa_trepavica">Nijansa trepavica:</label>
                            <select class="form-control" name = "nijansa_trepavica" id="nijansa_trepavica" required>
                                <option value="">Odaberite...</option>
                                <option  value="svjetla">Svjetla</option>
                                <option  value="tamna">Tamna</option>
                
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
          
       
        <script>
            
            $(document).ready(function(){
          
                
                $("#submit").click(function(){
                   $.ajax(
                                  {
                                type:"POST",
                                url:"../r1504/apiAJAX/usersAPI.php",
                                dataType: "json",
                                data:{ id_korisnika: {$smarty.session.id}},
                                success: function(data){
                                   
                            
                                $("#podton > option[value='"+data[0].podton+"']").prop("selected",true);
           
                                $("#tip_koze > option[value='"+data[0].tip_koze+"']").prop("selected",true);
                                $("#ten > option[value='"+data[0].ten+"']").prop("selected",true);
                                $("#boja_ociju > option[value='"+data[0].boja_ociju+"']").prop("selected",true);
                                $("#velicina_ociju > option[value='"+data[0].velicina_ociju+"']").prop("selected",true);
                                $("#nijansa_usana > option[value='"+data[0].nijansa_usana+"']").prop("selected",true);
                                $("#nijansa_obrva > option[value='"+data[0].nijansa_obrva+"']").prop("selected",true);
                                $("#velicina_usana > option[value='"+data[0].velicina_usana+"']").prop("selected",true);
                                $("#duzina_trepavica > option[value='"+data[0].duzina_trepavica+"']").prop("selected",true);
                                $("#gustoca_trepavica > option[value='"+data[0].gustoca_trepavica+"']").prop("selected",true);
                                $("#uvijenost_trepavica > option[value='"+data[0].uvijenost_trepavica+"']").prop("selected",true);
                                $("#nijansa_trepavica > option[value='"+data[0].nijansa_trepavica+"']").prop("selected",true);
                                $("#nijansa_usana").val(data[0].nijansa_usana);
                                   
                                  
                                  
                                },
                              error: function () {
                               console.log();
                              }
                            });
                });
                
                $('#Obrve').click (function (){
                    console.log("a");
                    var thisCheck = $(this);
                    if (thisCheck.is (':checked')){
                           addBrands("brand"+$(this).attr('id'));
                           getMakeUp("Obrve","../r1504/apiAJAX/kozmetika_obrve_searchAPI.php","obrveData","Obrve",1);
                     }
                    else{  
                     $("#brand"+$(this).attr('id')).html("");
                     $("#obrveData").html(" ");
                     }
                 });
                 
                  $('#Lice').click (function (){
                    console.log("a");
                    var thisCheck = $(this);
                    if (thisCheck.is (':checked')){
                           addBrands("brand"+$(this).attr('id'));
                           getMakeUp("Lice","../r1504/apiAJAX/kozmetika_lice_searchAPI.php","liceData","Lice",3);
                     }
                    else{
                     $("#brand"+$(this).attr('id')).html("");
                     $("#liceData").html(" ");
                     }
                 });
                 
                  $('#Usne').click (function (){
                    console.log("a");
                    var thisCheck = $(this);
                    if (thisCheck.is (':checked')){
                           addBrands("brand"+$(this).attr('id'));
                           getMakeUp("Usne","../r1504/apiAJAX/kozmetika_usne_searchAPI.php","usneData","Usne",5);
                     }
                    else{
                     $("#brand"+$(this).attr('id')).html("");
                     $("#usneData").html(" ");
                     }
                   });
                 
                  $('#Trepavice').click (function (){
                    console.log("a");
                    var thisCheck = $(this);
                    if (thisCheck.is (':checked')){
                           addBrands("brand"+$(this).attr('id'));
                           getMakeUp("Trepavice","../r1504/apiAJAX/kozmetika_trepavice_searchAPI.php","trepaviceData","Trepavice",2);
                     }
                    else{
                     $("#brand"+$(this).attr('id')).html("");
                      $("#trepaviceData").html(" ");
                     }
                  });
                 
                  $('#Oci').click (function (){
                    console.log("a");
                    var thisCheck = $(this);
                    if (thisCheck.is (':checked')){
                           addBrands("brand"+$(this).attr('id'));
                           getMakeUp("Oci","../r1504/apiAJAX/kozmetika_oci_searchAPI.php","ociData","Oci",4);
                     }
                    else{
                     $("#brand"+$(this).attr('id')).html("");
                     $("#ociData").html(" ");
                     }
                 });
                
                $('#brandObrve').change(function() {
                     getMakeUp("Obrve","../r1504/apiAJAX/kozmetika_obrve_searchAPI.php","obrveData","Obrve",1);
                 });
                 $("#brandTrepavice").change(function (){
                     getMakeUp("Trepavice","../r1504/apiAJAX/kozmetika_trepavice_searchAPI.php","trepaviceData","Trepavice",2);
                 });
                 $("#brandOci").change(function (){
                     getMakeUp("Oci","../r1504/apiAJAX/kozmetika_oci_searchAPI.php","ociData","Oci",4);
                    });
                 $("#brandLice").change(function (){
                      getMakeUp("Lice","../r1504/apiAJAX/kozmetika_lice_searchAPI.php","liceData","Lice",3);
                 });
                 $("#brandUsne").change(function (){
                    getMakeUp("Usne","../r1504/apiAJAX/kozmetika_usne_searchAPI.php","usneData","Usne",5); 
                 });
                 
                    
                
                
            });
            
            function addBrands(id){
              
                   $.ajax(
                                  {
                                type:"POST",
                                url:"../r1504/apiAJAX/brandAPI.php",
                                dataType: "json",
                                data:{ session_id: 4,
                                       session_tip: 3 },
                                success: function(data){
                               
                                  var html="<option value='' selected>Odaberite...</option>";
                                   $.each(data,function(){
                                      html+="<option value='"+this.id+"'>"+this.naziv+"</option>";
                                    
                                    });
                                  $("#"+id).html(html);
                                 
                                
                                },
                              error: function () {
                               console.log();
                              }
                            });
            }
            
            function getMakeUp(imeDiva,url,idDiva,ime,id){
                console.log(ime);
                
                var brand=$("#brand"+imeDiva).val();
                if($("#brand"+imeDiva).val()===null)
                    brand="";
                console.log(brand);
                
                 $.ajax(
                                  {
                                type:"POST",
                                url: url,
                                dataType: "json",
                                data:{ nijansa_obrva: $("#nijansa_obrva").val(),
                                       brand: brand,
                                       podton: $("#podton").val() ,
                                       tip_koze: $("#tip_koze").val() ,
                                       ten: $("#ten").val() ,
                                       boja_ociju: $("#boja_ociju").val(),
                                       velicina_ociju: $("#velicina_ociju").val(),
                                       nijansa_trepavica: $("#nijansa_trepavica").val() ,
                                       duzina_trepavica: $("#duzina_trepavica").val()  ,
                                       gustoca_trepavica: $("#gustoca_trepavica").val() ,
                                       uvijenost_trepavica:  $("#uvijenost_trepavica").val(),
                                       velicina_usana:  $("#velicina_usana").val(),
                                       nijansa_usana:  $("#nijansa_usana").val()
                                       },
                                success: function(data){
                                      var html="<h3 id='titleProduct'>"+ime+"</h3>"
                                            +"<hr>";
                                    
                                    if(data.length == 0){
                                        $("#"+idDiva).html(html +"<p>Nema proizvoda za vase karakteristike</p>");
                                    }
                                    else{
                                    var html="<h3 id='titleProduct'>"+ime+"</h3>"
                                            +"<hr>";
                                  $.each(data,function(){
                                      html+="<div class='col-md-4 razmak' id='product'>"
                                           +"<a href='detaljProizvoda.php?idproizvod="+this.id+"&idtip="+id+"'>"
                                           +"<img src='"+this.url_slika+"' id='immproduct'  class='img-responsive' width='200' height='250'/>"
                                           +"</a>"
                                           +"<h4 id='barandProduct'>"+this.brandnaziv+"</h4>"
                                           +"<h5 id='titleProduct'>"+this.naziv+"</h5>"
                                           +"<kbd id='price'>"+this.cijena+" KN</kbd>"
                                           +"</div>";                             
                                  });
                                  
                                  $("#"+idDiva).html(html);
                                }
                                  
                                 
                                
                                },
                              error: function () {
                               console.log("erorce");
                              }
                            });
            }
            
            
            
        </script>
    </body>
</html>