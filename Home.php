<?php include('include/header.php');?>

<?php include('include/navbar.php');?>

 <!-- Scroll Spy Main Content -->
 <main
      data-bs-spy="scroll"
      data-bs-target="#navbar-example2"
      data-bs-root-margin="0px 0px -40%"
      data-bs-smooth-scroll="true"
      class="scrollspy-example"
      tabindex="0"
    >
          <!--home section-->
        <section class="home" id="home">
            <div class="max-width">
                <div class="home-content bs-danger-text">
                    <div class="text-1">Building You</div>
                    <div class="text-2">Great Website</div>
                    <div class="text-3">That Sell.</div>
                    <a href="#Contact">Learn More</a>
                </div>
            </div>
        </section>

        <?php include('include/about.php');?>
        <?php include('include/services.php');?>
        <?php include('include/skills.php');?>
        <?php include('include/comment.php');?>
        <?php include('include/contact.php');?>
        
    </main>

<?php include('include/footer.php');?>