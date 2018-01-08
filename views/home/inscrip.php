	<div class="container">
		<div class="row main">
			<div class="main-login main-center">
				<h1>Inscrivez-vous ici</h1>
				<form  method="post" action="<? echo WEBROOT . "home/inscrip";?>">

					<div class="form-group">
						<label for="email" class="cols-sm-2 control-label">Your Email</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="username" class="cols-sm-2 control-label">Username</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
								<input type="text" class="form-control" name="login" id="username"  placeholder="Enter your Username"/>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label for="password" class="cols-sm-2 control-label">Password</label>
						<div class="cols-sm-10">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
								<input type="password" class="form-control" name="pwd" id="pwd"  placeholder="Enter your Password"/>
							</div>
						</div>
					</div>
					<div class="form-group ">
						<form action=" <? echo WEBROOT . "home/connex";?>" method="post">
							<button type="submit"  class="btn btn-default">Submit</button>
						</form>
					</div>
				</form>
			</div>
		</div>
	</div>
	<form action=" <? echo WEBROOT . "home/connex";?>" method="post">
		<input type="submit" value="Connectez-vous ici !" />
	</form>

	<p class="footer_p"> Copyright © U_bet. All right reserved. </p>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
