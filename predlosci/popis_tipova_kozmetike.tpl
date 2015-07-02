<script src='js/ajax.js'></script>
    <script>
        getProductType({$smarty.session.id},{$smarty.session.tip_korisnika_id});
        function deletee(idUserType,table)
        {
            deleteAJAX(idUserType,table,{$smarty.session.id},{$smarty.session.tip_korisnika_id});
        }
    </script>

<div class="col-sm-10" >
                    <div class="container col-md-10" id="tablica">

                    </div>
     <a href='dodavanje_tipova_kozmetike.php' class="btn btn-default btn-md">
          <span class="glyphicon glyphicon-plus"></span> Dodaj tip
        </a>
                </div>
            </div>
        </div>

    </body>
</html>