<div class="col-sm-10" >
                    <h2>Prijava</h2>

                    
                    {if isset($greska)}
                        <div class='alert alert-danger'>
                        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                        <strong>Greska!</strong> {$greska}
                        </div>
                    {/if}
                    <form role="form" method="post" action="prijava.php">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label for="lozinka">Password:</label>
                            <input type="password" class="form-control" name = "lozinka" id="lozinka">
                        </div>
                        <div class="form-group">

                            <input type="submit" class="form-control" name ="prijava" id="submit" value="Prijavi se">
                        </div>
                    </form>
                </div>
            </div>
        </div>
     
    </body>
</html>