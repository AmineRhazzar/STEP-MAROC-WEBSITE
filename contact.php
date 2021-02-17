<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STEP - Contact</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        <?php include "./css/form.css" ?>
        label{
            margin-left:2rem;
        }
    </style>
</head>

<body>
    <nav></nav>
    <div class="container">
        <div class="row" style="width:100%">
            <div class="col-md-8 col-md-offset-2">
                <div class="contact-form">
                    <h1>Contactez-Nous !</h1>
                    <?php 
                        $Msg = "";
                        if(isset($_GET['error']))
                        {
                            $Msg = " Veuillez remplir tous les champs ";
                            echo '<div class="alert alert-danger">'.$Msg.'</div>';
                        }

                        if(isset($_GET['success']))
                        {
                            $Msg = " Votre message a été envoyé ";
                            echo '<div class="alert alert-success">'.$Msg.'</div>';
                        }
                    ?>
                    <form action="./process.php" method="post">
                        <div class="form-group">
                            <label for="inputName">Nom Complet</label>
                            <input type="text" class="form-control" id="inputName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="inputSubject">Objet</label>
                            <input type="text" class="form-control" id="inputSubject" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="inputMessage">Message</label>
                            <textarea class="form-control" id="inputMessage" name="msg" rows="5" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" name="btn-send"><i class="fa fa-paper-plane"></i>
                                Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>