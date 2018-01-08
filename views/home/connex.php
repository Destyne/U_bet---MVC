<div class = "container">
	<div class="wrapper">
		<form action="<? echo WEBROOT . "home/connex";?>" method="post"  class="form-signin">       
			<h1 class="form-signin-heading">Connectez-vous ici !</h1>
			<hr class="colorgraph"><br>

			<input type="text" class="form-control" name="login" placeholder="Username" required="" autofocus="" />

			<input type="password" class="form-control" name="pwd" placeholder="Password" required=""/>            

			<button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" action="<? echo WEBROOT . "default/index";?>" type="Submit">Login</button>            
		</form>         
	</div>
</div>
<form action="<? echo WEBROOT . "home/inscrip";?>">
	<input type="submit" value="Inscrivez-vous ici !" />
</form>

<p class="footer_p"> Copyright © U_bet. All right reserved. </p>