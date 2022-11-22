<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Calculo média</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Simple line icons-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.5.5/css/simple-line-icons.min.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Header-->
        <header class="masthead d-flex align-items-center">
            <div class="container px-4 px-lg-5 text-center">
                <form method="POST">
                    <div class="form-group">
                      <label for="formGroupExampleInput">Digite a primeira nota:</label> 
                      <input type="number" class="col-4" class="form-control" id="formGroupExampleInput" placeholder="Nota 1" name="n1"> <br> <br>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput2">Digite a segunda nota: </label>
                      <input type="number" class="col-4" class="form-control" id="formGroupExampleInput2" placeholder="Nota 2" name="n2"> <br><br> 
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput">Digite a terceira nota:</label> 
                      <input type="number" class="col-4" class="form-control" id="formGroupExampleInput" placeholder="Nota 3" name="n3"> <br> <br>
                      <button type="submit" class="btn btn-primary">Calcular</button> <br><br>
                    </div>
                  </form>
                  <?php
                        if ($_POST) {
                            $n1 = ($_POST['n1']);
                            $n2 = ($_POST['n2']);
                            $n3 = ($_POST['n3']);
                            $med = (($n1 + $n2 + $n3) / 3);
                         }
                    ?>
                     <?php 
                    if ($_POST):
                    ?>
                        <?php 
                        if ($med >= 7):
                        ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo "Sua media é  ".$med. " e você foi aprovado!" ?>
                            </div>
                        <?php
                        endif;
                        ?>
                        <?php 
                        if ($med < 7):
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo "Sua media é  ".$med. " e você foi reprovado" ?>
                            </div>
                        <?php
                        endif;
                        ?>
                       <?php
                    endif;
                    ?>
                  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
            </div>
        </header>
        
    </body>
</html>
