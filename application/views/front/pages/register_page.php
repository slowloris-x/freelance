<div class="container text-center">
    <div class="col-md-5 offset-md-4 mt-5 loginpanel">
    <form class="form-signin">
      <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Register and get to work</h1>
      <label for="inputuser" class="sr-only">Username</label>
      <input type="text" id="inputuser" class="form-control" placeholder="Username" required="" autofocus=""><br>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus=""><br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required=""><br>
      <label for="inputConfPassword" class="sr-only">Confirmation Password</label>
      <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirmation Password" required=""><br>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>

    </form>
    
    </div>
    
    <div class="col-md-5 offset-md-4 mt-0 loginpanel loginpanelfooter">
        
        New to Freelancer?<hr>
        <a class="btn btn-success" href="<?= base_url('user/register'); ?>">Sign Up</a>

    </div>
    
    
    </div>
