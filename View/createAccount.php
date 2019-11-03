<?php ob_start(); ?>

    <h1>Création de votre compte</h1>
    <form action="index.php?action=newUser" method="post">
        <div class="form-group">
            <label for="nickname">Username</label>
            <input type="text" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Submit</button>
    </form>

    <span id="formStatus">
    <p><?php if(isset($info)){
            echo $info;
        }?></p>
  </span>


<?php $content = ob_get_clean(); ?>

<?php require('View/home.php'); ?>