
    <script src='js/ajax.js'></script>
    <script>
        getUsers();
        function deletee(idUser,table)
        {
            deleteAJAX(idUser,table,{$smarty.session.id},{$smarty.session.tip_korisnika_id});
        }
    </script>

<div class="col-sm-10">
                    <div class="container col-md-10" id="tablica">

                    </div>
    <a href='registracija.php' class="btn btn-default btn-md">
          <span class="glyphicon glyphicon-plus"></span> Dodaj korisnika
        </a>
                </div>
            </div>
        </div>

    </body>
</html>