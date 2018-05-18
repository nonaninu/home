<meta charset="utf-8">
<div class="container">

      <form class="form-signin" role="form">
        <h3 class="form-signin-heading">სისტემაში შესვლა</h3>
        <input type="email" class="form-control" placeholder="შეიყვანეთ Email" required autofocus>
        <input type="password" class="form-control" placeholder="შეიყვანეთ პაროლი" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> დამიმახსოვრე
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit">შესვლა</button>
      </form>

   
    <?php
        if(isset($_POST['signup'])) {
        require('signup.php');
        }
        if(isset($_POST['signin'])) {
            require('login.php');
        }
    ?>
    <form class="form-signin" role="form">
        <h3 class="form-signup-heading"> დარეგისტრირდით </h3>
        <input class="form-control" name="mail" placeholder="შეიყვანეთ E-mail" />
        <input class="form-control" name="username" placeholder="შეიყვანეთ Username"/>
        <input class="form-control" name="password" type="password" placeholder="პაროლი"/>
     	<input class="form-control" name="rePassword" type="password" placeholder="გაიმეორეთ პაროლი"/>
        <input class="btn btn-success" name="signUp" type="submit" value="დარეგისტრირება"/>
    </form>
</div>