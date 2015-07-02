
    <script src='js/ajax.js'></script>
    <script>
        /*
         * 
         * funkcija koju treba implementirati unutar ajax.js
         * i mogli bi dodati data tables za izvjestaj
         * 
         */
        getReport({$smarty.session.id},{$smarty.session.tip_korisnika_id});
    </script>

<div class="col-sm-10" >
                    <div class="container col-md-10" id="tablica">

                    </div>
                </div>
            </div>
        </div>

    </body>
</html>