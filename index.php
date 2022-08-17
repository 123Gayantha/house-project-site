<?php
    $pagename = 'index.php';
    include 'head.php';

    if(isset($_POST['sent'])){
        
        if(empty($_POST['user'])) 
        $user_empty = "<p class='error'>Please enter name</p>";

        if(empty($_POST['email']))
        $email_empty = "<p class = 'error'>plese enter email</p> ";

        if (empty($_POST['message']))
        $message_empty = "<p class = 'error'>please enter your message</p>";

        if (!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['message'])){
        
            header("location:index.php?ok=1");
        }
    }
     ?>  
    
    <title>Home page design</title>

    <?php include 'navi.php' ?>
    <!-- section 1 start -->

    <section id="section1">
        <div class="wrapper">
            <div id="maindiv">
                <div id="slidewrapper">
             <fingure id="slideshow">
                <img src="slides/living-room.jpg" alt="slides1" class="slideimage">
                <img src="slides/office-room.jpg" alt="slides1" class="slideimage">
                <img src="slides/seat-with-pillows.jpg" alt="slides1" class="slideimage">
                <img src="slides/living-room.jpg" alt="slides1" class="slideimage">
                
                
             </fingure>
            

             </div>
             <div id="right">
              <div id="righttop">
                  <h1>Home Interior Design</h1>
                  <p id="para1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div> 
              <div id="rightbottom">
                <img src="images/pillows.png" alt="pillows" class="image1">
                <img src="images/sea.png" alt="sea" class="image1">
                <img src="images/chair.png" alt="chair" class="image1">
              </div> 
            </div>   
        </div>
    </div>
         <!-- whiteboxes start -->
         <div class="wrapper" id="whiteboxes">
            <div class="whitebox">
                <img src="images/rocket.png" alt="rocket">
                <h2 class="heading2">Projects</h2>
                <p class="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <div class="whitebox">
                <img src="images/medal.png" alt="medal">
                <h2 class="heading2">Medals</h2>
                <p class="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
         </div>
         <div class="whitebox">
            <img src="images/network.png" alt="network">
            <h2 class="heading2">Network</h2>
            <p class="text1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    
        </div>
    </div>
    <!-- design ideas and houses plan  -->
     <div class="wrapper" id="fourboxes">
        <div id="box1" class="box0"></div>
        <div id="box2" class="box0">
            <h2 class="boxheading">Design Ideas</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div id="box3" class="box0">
            <h2 class="textwhite boxheading">Home plans</h2>
            <p class="textwhite">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
     </div>
      <div id="box4" class="box0"></div>
</section>
    <section id="section2">
        <div class="wrapper" id="parent">
            
            <h1>New ideas to life</h1>
            <p id="para2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </section>
         <section id="section3">
            <div class="wrapper">
                <h1 id="headingcenter">50+ Interior Ideas</h1>

            <div id="div5">
                <div id="left2"></div>
                <div id="right2">
                <div>
                    <p class="text2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div> 
                <div id="box5">
                    <img src="images/statues.png" alt="statues">
                </div>
                 <div id="box6">
                    <img src="images/wood-bed.png" alt="wood bed">
                 </div> 
                 <div id="box6">
                    <p class="text2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                 
                </div>
            </div>
        </div>
    </div>
         </section>
          <section id="section4">
            <div class="wrapper">
                <h1 id="heading4">Home & Apartment</h1>
                <p id="para2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <div id="imgdiv">
                <div id="slide1">
                    <figure id="figure1" class="slidewrapper">
                    <img src="images/living-area.png" alt="living area"class="slideimage">
                    <img src="slides/lobby.jpg" alt="lobby" class="slideimage">
                    <img src="slides/seat-with-pillows.jpg" alt="seat" class="slideimage">
                    <img src="images/living-area.png" alt="living area"class="slideimage">
                    
                </figure>
            </div>
                    <div id="slide2">
                    <figure class="slidewrapper">
                        <img src="slides/angle-chair.jpg" alt="chair" class="slideimage">
                        <img src="slides/table-with-chair.jpg" alt="table" class="slideimage">
                        <img src="slides/office-room.jpg" alt="office"class="slideimage" >
                        <img src="slides/angle-chair.jpg" alt="chair" class="slideimage">
                    </figure>
                </div>
            </div>
                   


                
           
        </div> 
             
          </section>
            <section id="section5">
                <div class="wrapper" id="div6">
                    <div>
                        <h1 id="title1">Awesome interior</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                <div>
                    <h1 id="title2">Fresh & Creative</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
    </section>
        <section id="section6">
            <div class="wrapper" id="div7">
            <form action="index.php" class="contact" id="form1" method="POST">
                    
                
                <?php 
                    if(isset($_GET['ok'])){
                        echo '<p id="okmsg">Email sent Successfully</p>';
                    }
                ?>
                
                <h1>Contact Us</h1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti eveniet excepturi numquam minima, impedit nemo ratione?</p>
                    <a href="#" id="mail">gayantham.prabodya@gmail.com</a>
                    <fieldset id="inputwrapper">
                    
                        <input type="text" placeholder="Name" name="user" value="<?php echo $_POST['user'] ?? ''; ?>">>

                        <?php echo $user_empty ?? ''; ?>
                        
                        
                        <input type="text" placeholder="email" name="email" value="<?php echo $_POST['email'] ?? ''; ?>">>

                        <?php echo $email_empty ?? ''; ?>

                        
                        <textarea class="input1" placeholder="Message" name="message"><?php echo $_POST['message'] ?? ''; ?></textarea>
                        
                        <?php echo $message_empty ?? ''; ?>

                        
                    
                        <input type="submit" id="submit" class="input1" value="submit" name="sent">  
                    </fieldset>
                </form>
                <iframe class="contact" id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31674.826743942747!2d80.00705014921883!3d7.084973530990117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2fc3dcbfb34c1%3A0x42d9038f296763ef!2sSanasa%20Building%2C%20Yakkala!5e0!3m2!1sen!2slk!4v1655360500007!5m2!1sen!2slk" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
        <?php include 'foot.php'; ?>.


    

