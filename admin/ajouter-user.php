<?php
if(file_exists('./inc/protect.inc.php')){
    include('./inc/protect.inc.php');
}
?>
<!doctype html>
<html>
<head>
<?php
if(file_exists('./inc/head.inc.php')){
    include('./inc/head.inc.php');
}
?>
<script type="text/javascript" src="./js/forms.js"></script>
</head>
<body>
    <div class="container bg-white">
        <header class="row">ADMIN</header>
        <?php 
                if(file_exists('./inc/bande-log.inc.php')){
                    include('./inc/bande-log.inc.php');
                }
            ?>
        <div class="row">
            <div class="col-xs-3">
            <?php 
                if(file_exists('./inc/nav.inc.php')){
                    include('./inc/nav.inc.php');
                }
            ?>
            </div>
            <div class="col-xs-9">
            <?php
        //On vérifie s'il y a un message d'erreur stocké dans la session
        if(!empty($_SESSION['msg_error'])){
            //On écrit le message dans l'html de la page renvoyé à l'utilisateur
            echo '<div class="col-xs-12 bg-info">'.$_SESSION['msg_error'].'</div>';
            //
            //echo '<script type="text/javascript">alert("'.$_SESSION['msg_error'].'");</script>';
            //On supprime le message de la session
            unset($_SESSION['msg_error']);
        }
        ?>
                <h3>Ajouter un utilisateur :</h3>
               
                <form action="../core/libs/users-services.php" method="post" enctype="multipart/form-data" onsubmit="return checkAddUserForm();">
                <input type="hidden" name="action" value="add-user">
                <div class="form-group">
                    <label for="">Nom : </label>
                    <input type="text" name="lastname"  class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Prénom : </label>
                    <input type="text" name="prenom"  class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Identifiant : </label>
                    <input type="text" name="login"  class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Mot de passe (5 à 10 caractères) : </label>
                    <input pattern=".{5,10}" type="password" name="password" id="password"  class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Confirmation du mot de passe : </label>
                    <input pattern=".{5,10}" type="password" name="password-confirm" id="password-confirm" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Email : </label>
                    <input type="email" name="email"  class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Avatar (png, jpg) : </label>
                    <input type="file" name="avatar"  class="form-control" accept="image/jpg, image/jpeg, image/png, image/JPG, image/JPEG, image/PNG">
                </div>
                <div class="form-group">
                    <label for="">Statut : </label>
                    <select name="role" class="form-control">
                        <option value="0">Utilisateur simple</option>
                        <option value="1">Administrateur</option>
                </select>
                </div>
                <div class="form-group">
                    <input type="submit" value="Ajouter"  class="btn btn-danger">
                </div>
                </form>
            </div>
        </div>
     </div>
</body>
</html>