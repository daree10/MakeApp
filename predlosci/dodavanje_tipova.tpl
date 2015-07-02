<div class="col-sm-10" ">
                    <h2>{$title}</h2>

                    <form role="form" method="post" action="dodavanje_tipova.php">
                        <div class="form-group">
                            <label for="naziv">Naziv:</label>
                            <input type="text" class="form-control"  name="naziv" id="naziv" required>
                        </div>
                        <div class="form-group">
                            <label for="opis">Opis:</label>
                            <input type="text" class="form-control"  name = "opis" id="opis" required>
                        </div>
                        <div class="form-group">

                            <input type="submit" class="form-control" name ="dodaj" id="submit" value="Dodaj">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>