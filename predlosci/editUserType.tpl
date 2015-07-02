<div class="col-sm-10" >
                    <h2>Edit tipa korisnikaaa</h2>

                    <form role="form" method="post" action="editUserType.php?idType={$smarty.get.idType}">
                        <div class="form-group">
                            <label for="naziv">Naziv:</label>
                            <input type="text" class="form-control" value='{$naziv}' name="naziv" id="naziv" required>
                        </div>
                        <div class="form-group">
                            <label for="opis">Opis:</label>
                            <input type="text" class="form-control" value='{$opis}' name = "opis" id="opis" required>
                        </div>
                        <div class="form-group">

                            <input type="submit" class="form-control" name ="izmijeni" id="submit" value="Izmijeni">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>