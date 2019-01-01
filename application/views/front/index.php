<!DOCTYPE html>
<html lang="en">
  <head>
 <?php $this->load->view('front/layouts/head'); ?>
  </head>
  <body>
      <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
          <?php $this->load->view('front/layouts/nav'); ?>
      </nav>
      <header>
           <?php $this->load->view('front/layouts/header'); ?>
      </header>
      <?php  $this->load->view($frontsubview); ?>
      <footer class="footer">
      <?php $this->load->view('front/layouts/footer'); ?>
      </footer>
  </body>
</html>
