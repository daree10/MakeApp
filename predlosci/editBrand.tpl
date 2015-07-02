<div class="col-sm-10">
                    <h2>Edit branda</h2>

                    <form role="form" method="post" action="editBrand.php?idBrand={$smarty.get.idBrand}">
                        <div class="form-group">
                            <label for="naziv">Naziv:</label>
                            <input type="text" class="form-control" value='{$naziv}' name="naziv" id="naziv" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" value='{$email}' name = "email" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="web">Web-site:</label>
                            <input type="text" class="form-control" value='{$web}' name = "web" id="web" required>
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