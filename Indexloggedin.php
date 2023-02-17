<?php include('include/header.php');?>

<?php include('include/navbarloggedin.php');?>

 <!-- Scroll Spy Main Content -->
 <main
      data-bs-spy="scroll"
      data-bs-target="#navbar-example2"
      data-bs-root-margin="0px 0px -40%"
      data-bs-smooth-scroll="true"
      class="scrollspy-example"
      tabindex="0"
    >
        <?php include('include/home.php');?>
        <?php include('include/about.php');?>
        <?php include('include/services.php');?>
        <?php include('include/skills.php');?>
        <?php include('include/comment.php');?>
        <?php include('include/contact.php');?>
        
    </main>

<?php include('include/footer.php');?>