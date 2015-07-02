<!DOCTYPE html>
<html lang="hr">
    <head>
        <title>{$title}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="../r1504/css/MakeUp.css">
        <link rel="stylesheet" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        
    </head>
    <body>

        <div class="container-fluid" id="hederica">
            <div class="col-md-12 zaglavlje">
                <h1>MakeApp</h1> 
                {if $title eq "Početna"}
                <p>Dobrodošli, {$smarty.session.ime} {$smarty.session.prezime}</p>
                {/if}
                <hr>
            </div>

        </div>