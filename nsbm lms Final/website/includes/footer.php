 <footer>
          <div class="subscribeBar row">
              <h1 class="col-sm-6">Subscribe to our newsletter</h1>
            <form action="#" method="post" class="col-sm-6">
                <input type="email" placeholder="Enter Email..." name="mail">
                <button type="submit" name="sub" onclick="alert('Thank You for subscribing ! ')" class="button_1">Subscribe</button>
            </form>
            <?php   
                if(isset($_POST['sub'])){
                    $mail=$_POST['mail'];
                    $query="insert into subscribers(sub_email) values ('{$mail}') ";
                        
                        $sub_query=mysqli_query($connection,$query);
                    
                        if(!$sub_query){
                            die('QUERY FAILED'.mysqli_error($connection));
                        }
                }
              ?>
          </div>
          <div class="container">
              <div class="col-sm-4 nsbmDesc">
                  <h1>NSBM LMS</h1>
                  <p>NSBM Green University Town is the first ever green university in South Asia and sets an example for the whole South Asia by paving the way for environmental sustainability. The university is open for both national and international student community and it has turned a new chapter in Sri Lankan higher education.</p>
              </div>
              <div class="col-sm-4 links">
                  <h1>Quick Links</h1>
                  <ul>
                      <li><a href="SOC.php">School of Computing</a></li>
                      <li><a href="SOB.php">School of business</a></li>
                      <li><a href="home.html#courses">School of Engineering</a></li>
                  </ul>
              </div>
              <div class="col-sm-4">
                  <i class="fa fa-phone" aria-hidden="true"></i>
<p>011 544 5000</p>
                  <p>inquiries@nsbm.lk</p>
                  <p>www.nsbm.lk</p>
                  <p>NSBM Green University,Pitipana,Homagama</p>
              </div>
          </div>
           <div class="copyrightFooter">
            <p>NSBM LMS , Copyright &copy; 2017</p>
            </div>
        </footer>



    <script src="./js/wow.min.js"></script>
    <script>
        new WOW().init();

    </script>
    <script src="./js/main.js"></script>


</body>

</html>
