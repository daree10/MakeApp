
    <script src='js/ajax.js'></script>
    <script>
        getProducts({$smarty.session.id},{$smarty.session.tip_korisnika_id});
        function deletee(idUser,table)
        {
            deleteAJAX(idUser,table,{$smarty.session.id},{$smarty.session.tip_korisnika_id});
        }
    </script>

<div class="col-sm-10" >
                    <div class="container col-md-10" id="tablica">

                    </div>
    <a href='dodavanje_kozmetike.php' class="btn btn-default btn-md">
          <span class="glyphicon glyphicon-plus"></span> Dodaj proizvod
        </a>
                </div>
            </div>
        </div>

    </body>
</html>