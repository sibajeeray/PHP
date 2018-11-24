<?php
    ob_start(); 
    include("includes/php/retriveUser.php");
    include("includes/php/wishAppHeader.php");
    if(!($user && $user['title']))
    {
        $message = 'Wish Page with name '.$uri.' is not found. <br/>Create New App here';
        $location = "http://localhost/PhpTest/WishApp/durgapuja/";
        header("Location:".$location."?message=".$message);
        exit();
    }
    else {
        session_start();
        if(isset($_SESSION['user']) && $_SESSION['user']==$user['uri']){
            $owner = true;
        }
        else{
            $owner =false;
        }
    }
?>
    

<!-- STRAT PAGE FROM HERE -->
<div class="bodycontainer">
    <div style="position:relative">
        <p id="timer"></p>
    </div>
    <marquee class="left" behavior="scroll" direction="up" scrolldelay="1"> <br>
        <?php 
            for ($x = 0; $x <= 15; $x++) {
                echo "<img src='resources/images/border.png' height='129px' width='20px' /><br>";
            } 
        ?>
    </marquee>
    <marquee class="right" behavior="scroll" direction="down" scrolldelay="1"><br>
        <?php 
            for ($x = 0; $x <= 15; $x++) {
                echo "<img src='resources/images/border.png' height='129px' width='20px' /><br>";
            } 
        ?>
    </marquee>
            

    <h1 id="nameAni"><?php echo $user['title'] ?></h1>
    <h2 id="wishing">Wishing You</h2>

    <svg width="10cm" height="3cm" viewBox="0 0 1320 400">
        <!-- Symbol -->
        <symbol id="s-text">
            <text text-anchor="middle"
                    x="650" y="75"  font-size="90">
                Happy Navratri & Durga Puja
            </text>
        </symbol>  
        <!-- Duplicate symbols -->
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
        <use xlink:href="#s-text" class="text"></use>
    </svg>
    <div id="maindiv" style="padding-top: 18%;padding-bottom: 18%;">
        <div class="content">
            <img class="devipic responsiveImg" src="resources/images/devi.png" >
        </div>
    </div>
            
    <p class="hindi-text" aling="center" style="color:#F9D5D5;padding-top:50px;margin-left:25px; margin-right:25px;">
        ॐ जयन्ती, मङ्गला, काली, भद्रकाली, कपालिनी। <br/>
        दुर्गा, शिवा, क्षमा, धात्री, स्वाहा, स्वधा नमोऽस्तु ते॥ <br/> 
        एष सचन्दन गन्ध पुष्प बिल्व पत्राञ्जली ॐ ह्रीं दुर्गायै नमः॥ <br/>
    </p>

    <div class="mainContainer" style="transform: scale(0.7, 0.7);">
        <div class="lightcontainer">
            <div class="red flame"></div>
            <div class="orange flame"></div>
            <div class="yellow flame"></div>
            <div class="white flame"></div>
        </div>
        <div class="triangle"></div>
        <div class="circleCandle"></div>
        <div class="circleCandleOutside"></div>
        <div class="diyaContainer"></div>
        <div class="batti"></div>
        <div class="stand"></div>
    </div>
    <marquee behavior="scroll" direction="left" style="margin-left:25px; margin-right:25px;"><p class="hindi-text" aling="center" style="color:white; text-shadow: 1px 1px white;font-size: 22px;animation: colorchanging 6s infinite reverse ease-in-out;">या देवी सर्वभूतेषु शक्तिरुपेण संस्थितः । नमस्तस्यैः नमस्तस्यैः नमस्तस्यैः नमो नमः ।</p></marquee>

    <div id="maindiv" style="padding-top: 18%;padding-bottom: 18%;">
        <div class="content">
            <img class="devipic responsiveImg" src="resources/images/sherawali.png" >
        </div>
    </div>
    
    <p id="quote" style="color:green"><strong>May Maa light up the hope of happy times and your year become full of smiles.<br/>Happy Navratri & Durga Puja!<br/><span style="color:white;">-By <?php echo $user['title']; ?><span></strong></p>
    
    <div style="margin: 40px 0px 40px 0px"></div>
    
    <center>
        <?php     
            if($owner){
                $washarelink = "whatsapp://send?text=*".$user['title']."* sent You a gift on this Navratri and Durga Puja. मेरी तरफ से नवरात्री और दुर्गा पूजा का ए सरप्राइज गिफ्ट. *Click to open it* - ".$current_page;
        ?>
                <div class='socialsharebar'>
                    <a href="https://twitter.com/intent/tweet?text= This is a gift from my side on this Navratri and Durga Puja. मेरी तरफ से नवरात्री और दुर्गा पूजा का ए सरप्राइज गिफ्ट. - <?php echo $current_page ?>" target="_blank">
                        <i class='sharebutton fab fa-twitter'></i>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_page ?>&quote=This is a gift from my side on this Navratri and Durga Puja. मेरी तरफ से नवरात्री और दुर्गा पूजा का ए सरप्राइज गिफ्ट." target="_blank">
                        <i class='sharebutton fab fa-facebook'></i>
                    </a>
                    <a href="fb-messenger://share/?link=<?php echo $user['title'] ?> sent You a gift on this Navratri and Durga Puja. मेरी तरफ से नवरात्री और दुर्गा पूजा का ए सरप्राइज गिफ्ट. Click to open it- <?php echo $current_page ?>&app_id=201663530467263" >
                        <i class='sharebutton fab fa-facebook-messenger'></i>
                    </a>
                    <a href='<?php echo $washarelink ?>'>
                        <i class='sharebutton fab fa-whatsapp'></i>
                    </a>
                </div>
                

                <a class='footerbtn' href='http://localhost/PhpTest/WishApp/durgapuja'>
                    <p style='font-size: 15px;'>OR create wish with Another name</p>
                </a>
        <?php 
                // unset($_SESSION['user']);
            }
            else {
        ?>
                <a class='footerbtn' style='animation: footer infinite linear 1s;' href='http://localhost/PhpTest/WishApp/durgapuja'>
                    <p style='font-size: 18px; animation: scaling 4000ms reverse infinite; '> <b>Create your own wish Page</b></p>
                </a>
        <?php 
                } 
        ?>        
    </center>


    <!-- SLIDES -->
    <div class="slide-container">
        <img class="slideimg img-responsive" src="resources/images/slide1.png"/>
        <img class="slideimg img-responsive" src="resources/images/slide2.png"/>
        <img class="slideimg img-responsive" src="resources/images/slide3.png" />
        <img class="slideimg img-responsive" src="resources/images/slide4.png" />
        <img class="slideimg img-responsive" src="resources/images/slide5.png" />
    </div>
    <div style="text-align:center;">
        <span class="slideholder"></span> 
        <span class="slideholder"></span> 
        <span class="slideholder"></span> 
        <span class="slideholder"></span> 
        <span class="slideholder"></span> 
    </div>
    <hr style="color:green; margin : 40px 25px 20px 25px;" />
    <center>
        <?php 
            if($owner){ ?>
                <p style="color:yellow;font-size: 17px; margin : 0px 25px 10px 25px;">
                    Hey <?php echo $user['title']; ?>..Don't enjoy this alone. Click on the round buttons and
                    send this page with your name to your Friends & Family to wish them with this special gift.
                </p>
                <img src="resources/gif/clickhere.gif">
                <div style="margin: 0 25px 100px 25px"></div>

        <?php }
            else { ?>
                <p style="color:yellow;font-size: 17px; margin : 0px 25px 10px 25px;">
                    Hey...Click on the Create button below and create wish page with your name also, just like
                    <?php echo $user['title'] ?> has created.
                </p>
                <img src="resources/gif/clickhere.gif">
                <div style="margin: 0 25px 50px 25px"></div>
        <?php } ?>
        
    </center>
</div>
<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.5.1/parsley.min.js"></script>
<script src="includes/js/slides.min.js"></script>
<script src="includes/js/timer.min.js"></script>

<script src='includes/js/snowfall.jquery.min.js'></script>
<script type='text/javascript'>     
    jQuery(document).ready(function(){
        //Start the snow default options you can also make it snow in certain elements, etc.
        jQuery(".bodycontainer").snowfall({image :"resources/images/flower-01.png", minSize: 5, maxSize:20, minSpeed : 1, maxSpeed : 3});
        // jQuery(".bodycontainer").snowfall({image :"resources/images/flower-02.png", minSize: 5, maxSize:20, minSpeed : 1, maxSpeed : 3});
        // jQuery(".bodycontainer").snowfall({image :"resources/images/flower-03.png", minSize: 5, maxSize:20, minSpeed : 1, maxSpeed : 3});
        jQuery(".bodycontainer").snowfall({image :"resources/images/flower-04.png", minSize: 5, maxSize:20, minSpeed : 1, maxSpeed : 3});
        jQuery(document).snowfall({collection : '.collectonme', flakeCount : 500});
    });
</script>

<?php include("includes/php/footer.php") ?>