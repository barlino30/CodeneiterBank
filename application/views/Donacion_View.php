<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- icono -->
    <link rel="icon"  href="http://localhost/Proyecto/public/Imagenes/Logo.png">

    <title>Donacion</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/Proyecto/public/styleDonacion.css">
</head>
<body>
    <section class="imagenL">
        <img src="http://localhost/Proyecto/public/Imagenes/Logo.png" width="40" height="40">
    </section>

<!------------------------------Tabla-------------------------------------------------------------------------->
<section id="pantalla-dividida">
    <div class="izquierda">
    
<div class="container1">
        <div class="row">
            <div class="container-faq1">
                <div class="title-faq1">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">fundacion</th>
                            <th scope="col">metodopago</th>
                            <th scope="col">cantidad</th>
                            </tr>
                        </thead>
                        <?php foreach ($traer as $t) { ?>
                        <tbody>
                            <tr>
                            <th scope="row"><?= $t->id_donacion ?></th>
                            <td><?= $t->nameFunda ?></td>
                            <td><?= $t->nameMetodo ?></td>
                            <td><?= $t->cantidad ?></td>
                            </tr>
                        </tbody>
                        <?php  } ?>
                    </table>
                </div>
            </div>
        </div>
</div>    
</div>

<div class="derecha">
<!-------------------------------------------------------------------------------------------------------------->
<div class="container2">
        <div class="row">
            <div class="container-faq2">
                <div class="title-faq2">
                    <form action="<?= base_url() ?>HolaMundo/registroDonacion" method="POST"> 
                    <section class="form-Donacion">
<!----------------------fundacion------------------------------------------------------------------------------->
                    <center>
                        <select class="form-select" aria-label="Default select example" name="id_fundacion">
                            <option selected>fundacion</option>
                            <option value="1">Pies descalzos</option>
                            <option value="2">Gente que le pone el alma</option>
                            <option value="3">Nudillos Desnudos</option>
                            <option value="4">Venecos con hambre</option>
                            <option value="5">Patitas peludas</option>
                        </select>
                    </center>

<!-----------------------Metodo de pago------------------------------------------------------------------------>
                    <center>
                        <select class="form-select" aria-label="Default select example" name="id_metodopago">
                            <option selected>Metodo pago</option>
                            <option value="1">Baloto</option>
                            <option value="2">Tarjeta Credito</option>
                            <option value="3">Tarjeta Debito</option>
                            <option value="4">Tarjeta Ahorros</option>
                            <option value="5">Efecty</option>
                        </select>
                    </center>
                        <br>
                        <input class= "form-control form-control-sm" type="text" name="cantidad" id="cantidad" placeholder="Ingrese El valor">
                        <br>
                    <center>
                        <button type="submit" class="btn btn-primary">Donar</button>       
                    </center>
                    </section>
                    </form>
                    </div>
            </div>
        </div>
</div>
</div>    
</section>

    <section class="piese">
        2023 - Banco Venecos - Política de Privacidad
    </section>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>