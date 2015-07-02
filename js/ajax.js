var korisnik = "korisnik";
var brand = "brand";
var userType = "tip_korisnika";
var productType = "tip_proizvoda";
var product = "kozmeticki_proizvod";

function getUsers()
{
    $.ajax({
        url: "../r1504/apiAJAX/usersAPI.php",
        context: document.body,
        dataType: "json",
        type: "POST",
        data:
                {
                },
        success: function (json) {
            var dodati = "";
            dodati += "<table class='table table-striped' id='users'>";
            dodati += "<thead>";
            dodati += "<tr>";
            dodati += "<th>Email</th>";
            dodati += "<th>Lozinka</th>";
            dodati += "<th>Ime</th>";
            dodati += "<th>Prezime</th>";
            dodati += "<th>Tip korisnika</th>";
            dodati += "<th>Obriši korisnika</th>";
            dodati += "</tr>";
            dodati += "</thead>";
            dodati += "<tbody>";
            $.each(json, function (key, val)
            {
                dodati += "<tr>";
                dodati += "<td><a href='profil.php?idKor=" + val.id + "'>" + val.email + "</a></td>";
                dodati += "<td>" + val.lozinka + "</td>";
                dodati += "<td>" + val.ime + "</td>";
                dodati += "<td>" + val.prezime + "</td>";
                dodati += "<td>";
                dodati += val.tip;
                dodati += "</td>";
                dodati += "<td><a href='javascript:deletee(" + val.id + ",korisnik)'><span class='glyphicon glyphicon-trash'></span></a></td>";
                dodati += "</tr>";
            });
            dodati += "</tbody></table>";

            $("#tablica").html(dodati);
            $("#users").DataTable();
        },
        error: function () {
        }
    });
}
function getBrand(idKor, idTip)
{
    $.ajax({
        url: "../r1504/apiAJAX/brandAPI.php",
        context: document.body,
        dataType: "json",
        type: "POST",
        data:
                {
                    session_id: idKor,
                    session_tip: idTip
                },
        success: function (json) {
            var dodati = "";
            dodati += "<table class='table table-striped' id='brands'>";
            dodati += "<thead>";
            dodati += "<tr>";
            dodati += "<th>Naziv</th>";
            dodati += "<th>Email kontakt</th>";
            dodati += "<th>Web-site</th>";
            dodati += "<th>Edtiraj</th>";
            dodati += "<th>Obriši brand</th>";
            dodati += "</tr>";
            dodati += "</thead>";
            dodati += "<tbody>";
            $.each(json, function (key, val)
            {
                dodati += "<tr>";
                dodati += "<td>" + val.naziv + "</td>";
                dodati += "<td><a href='mailto:" + val.email + "' target='_top'>" + val.email + "</a></td>";
                dodati += "<td><a target='_blank' href='http://" + val.web + "'>" + val.web + "</a></td>";


                dodati += "<td><a href='editBrand.php?idBrand=" + val.id + "'><span class='glyphicon glyphicon-folder-open'></span></a></td>";
                dodati += "<td><a href='javascript:deletee(" + val.id + ",brand)'><span class='glyphicon glyphicon-trash'></span></a></td>";

                dodati += "</tr>";
            });
            dodati += "</tbody></table>";

            $("#tablica").html(dodati);
            $("#brands").DataTable();
        },
        error: function () {
        }
    });
}
function getUserType(idKor, idTip)
{
    $.ajax({
        url: "../r1504/apiAJAX/userTypeAPI.php",
        context: document.body,
        dataType: "json",
        type: "POST",
        data:
                {
                    session_id: idKor,
                    session_tip: idTip
                },
        success: function (json) {
            var dodati = "";
            dodati += "<table class='table table-striped' id='types'>";
            dodati += "<thead>";
            dodati += "<tr>";
            dodati += "<th>Naziv</th>";
            dodati += "<th>Opis</th>";
            dodati += "<th>Editiraj</th>";
            dodati += "<th>Obriši</th>";
            dodati += "</tr>";
            dodati += "</thead>";
            dodati += "<tbody>";
            $.each(json, function (key, val)
            {
                dodati += "<tr>";
                dodati += "<td>" + val.naziv + "</td>";
                dodati += "<td>" + val.opis + "</td>";
                if (val.id == 1 || val.id == 2 || val.id == 3)
                {
                    dodati += "<td><span style='cursor:not-allowed;' class='glyphicon glyphicon-remove'></span></td>";
                    dodati += "<td><span style='cursor:not-allowed;' class='glyphicon glyphicon-remove'></span></td>";
                }
                else {
                    dodati += "<td><a href='editUserType.php?idType=" + val.id + "'><span class='glyphicon glyphicon-folder-open'></span></a></td>";
                    dodati += "<td><a href='javascript:deletee(" + val.id + ",userType)'><span class='glyphicon glyphicon-trash'></span></a></td>";
                }
                dodati += "</tr>";
            });
            dodati += "</tbody></table>";

            $("#tablica").html(dodati);
            $("#types").DataTable();
        },
        error: function () {
        }
    });
}
function getProductType(idKor, idTip)
{
    $.ajax({
        url: "../r1504/apiAJAX/productTypeAPI.php",
        context: document.body,
        dataType: "json",
        type: "POST",
        data:
                {
                    session_id: idKor,
                    session_tip: idTip
                },
        success: function (json) {
            var dodati = "";
            dodati += "<table class='table table-striped' id='types'>";
            dodati += "<thead>";
            dodati += "<tr>";
            dodati += "<th>Naziv</th>";
            dodati += "<th>Opis</th>";
            dodati += "<th>Editiraj</th>";
            dodati += "<th>Obriši</th>";
            dodati += "</tr>";
            dodati += "</thead>";
            dodati += "<tbody>";
            $.each(json, function (key, val)
            {
                dodati += "<tr>";
                dodati += "<td>" + val.naziv + "</td>";
                dodati += "<td>" + val.opis + "</td>";
                dodati += "<td><a href='editProductType.php?idType=" + val.id + "'><span class='glyphicon glyphicon-folder-open'></span></a></td>";
                if (val.id == 1 || val.id == 2 || val.id == 3 || val.id == 4 || val.id == 5)
                {
                    dodati += "<td><span style='cursor:not-allowed;' class='glyphicon glyphicon-remove'></span></td>";
                }
                else {
                    dodati += "<td><a href='javascript:deletee(" + val.id + ",productType)'><span class='glyphicon glyphicon-trash'></span></a></td>";
                }
                dodati += "</tr>";
            });
            dodati += "</tbody></table>";

            $("#tablica").html(dodati);
            $("#types").DataTable();
        },
        error: function () {
        }
    });
}
function deleteAJAX(userID, table, adminID, userType)
{
    $.ajax({
        url: "../r1504/apiAJAX/deleteAPI.php",
        context: document.body,
        dataType: "json",
        type: "POST",
        data:
                {
                    session_id: adminID,
                    session_tip: userType,
                    userIDDELETE: userID,
                    tableName: table
                },
        success: function (json) {
            location.reload();
        },
        error: function () {
        }
    });
}
/*
 * 
 * AJAX koji se koristi u formi za dodavanje kozmetike
 * 
 */
function getProductType2(idKor, idTip)
{
    $.ajax({
        url: "../r1504/apiAJAX/productTypeAPI.php",
        context: document.body,
        dataType: "json",
        type: "POST",
        data:
                {
                    session_id: idKor,
                    session_tip: idTip
                },
        success: function (json) {
            var dodati = "";
            dodati += "<option value='' selected>Odaberite...</option>";
            $.each(json, function (key, val)
            {
                dodati += "<option value='" + val.id + "'>" + val.naziv + "</option>";
            });

            $("#tip").html(dodati);
        },
        error: function () {
        }
    });
}
function getBrand2(idKor, idTip)
{
    $.ajax({
        url: "../r1504/apiAJAX/brandAPI.php",
        context: document.body,
        dataType: "json",
        type: "POST",
        data:
                {
                    session_id: idKor,
                    session_tip: idTip
                },
        success: function (json) {
            var dodati = "";
            $.each(json, function (key, val)
            {
                dodati += "<option value='" + val.id + "'>" + val.naziv + "</option>";
            });

            $("#brand").html(dodati);
        },
        error: function () {
        }
    });
}


/*
 * 
 * CRUD za kozmeticke proizvode admin
 * 
 */
function getReport(idKor,idTip){
     $.ajax({
        url: "../r1504/apiAJAX/reportAPI.php",
        context: document.body,
        dataType: "json",
        type: "POST",
        data:
                {
                    session_id: idKor,
                    session_tip: idTip
                },
        success: function (json) {
            var dodati = "";
            dodati += "<table class='table table-striped' id='report'>";
            dodati += "<thead>";
            dodati += "<tr>";
            dodati += "<th>E-mail</th>";
            dodati += "<th>Brand</th>";
            dodati += "<th>Cijena</th>";
            dodati += "<th>Kategorija</th>";
            dodati += "</tr>";
            dodati += "</thead>";
            dodati += "<tbody>";
            $.each(json, function ()
            {
             
                dodati += "<tr>";
                dodati += "<td>" + this.email + "</td>";
                dodati += "<td>" + this.nazivbrand + "</td>";
                dodati += "<td>" + this.cijena + "</td>";
                dodati += "<td>" + this.nazivtip + "</td>";
                dodati += "</tr>";
            });
            dodati += "</tbody></table>";

            $("#tablica").html(dodati);
            $("#report").DataTable();
        },
        error: function () {
        }
    });
}
function getProducts(idKor, idTip)
{
    $.ajax({
        url: "../r1504/apiAJAX/productsAPI.php",
        context: document.body,
        dataType: "json",
        type: "POST",
        data:
                {
                    session_id: idKor,
                    session_tip: idTip
                },
        success: function (json) {
            var dodati = "";
            dodati += "<table class='table table-striped' id='products'>";
            dodati += "<thead>";
            dodati += "<tr>";
            dodati += "<th>Slika</th>";
            dodati += "<th>Brand</th>";
            dodati += "<th>Tip</th>";
            dodati += "<th>Naziv</th>";
            dodati += "<th>Cijena</th>";
            dodati += "<th>Količina</th>";
            dodati += "<th>Trajnost</th>";
            dodati += "<th>Edit</th>";
            dodati += "<th>Delete</th>";
            dodati += "</tr>";
            dodati += "</thead>";
            dodati += "<tbody>";
            $.each(json, function (key, val)
            {
                dodati += "<tr>";
                if(val.urlSlika != "null")
                {
                    dodati += "<td><img style='height:150px;width:150px;' src='"+val.urlSlika+"' title='slika' alt='slika'/></td>";
                }
                else
                {
                    dodati += "<td>n/a</td>";
                }
                dodati += "<td>" + val.brand + "</td>";
                dodati += "<td >" + val.tip + "</td>";
                dodati += "<td>" + val.naziv + "</td>";
                dodati += "<td>" + val.cijena + "</td>";
                dodati += "<td>" + val.kolicina + "</td>";
                dodati += "<td>" + val.trajnost + "</td>";
                dodati += "<td><a href='detaljProizvoda.php?idproizvod=" + val.id + "&idtip="+ val.idtip +"'><span class='glyphicon glyphicon-folder-open'></span></a></td>";

                dodati += "<td><a href='javascript:deletee(" + val.id + ",product)'><span class='glyphicon glyphicon-trash'></span></a></td>";

                dodati += "</tr>";
            });
            dodati += "</tbody></table>";

            $("#tablica").html(dodati);
            $("#products").DataTable();
        },
        error: function () {
        }
    });
}