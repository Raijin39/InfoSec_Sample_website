<?php $page_title = "Home";
include('include/header.php');
include('include/navbar.php');?>

 <!-- Scroll Spy Main Content -->
 <main
      data-bs-spy="scroll"
      data-bs-target="#navbar-example2"
      data-bs-root-margin="0px 0px -40%"
      data-bs-smooth-scroll="true"
      class="scrollspy-example"
      tabindex="0"
    >
        <?php include('include/home.php'); 
        include('include/about.php'); 
        include('include/services.php'); 
        include('include/skills.php');
        include('include/contact.php');?>
        
    </main>

<?php include('include/footer.php');?>