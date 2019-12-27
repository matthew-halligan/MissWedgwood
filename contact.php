<?php
if(isset($_POST["submit"])){
    // Checking For Blank Fields..
    if($_POST["name"]==""||$_POST["email"]==""||$_POST["phone"]==""||$_POST["custom_type"]==""){
    echo "Fill All Fields..";
}else{
    // Check if the "Sender's Email" input field is filled out
    $email=$_POST['email'];
    // Sanitize E-mail Address
    //$email =filter_var($email, FILTER_SANITIZE_EMAIL);
    // Validate E-mail Address
    //$email= filter_var($email, FILTER_VALIDATE_EMAIL);
    if (!$email){
    echo "Invalid Sender's Email";
}
else{
    $headers = 'From: '. $email . "\n"; // Sender's Email
    $headers .= 'Cc: '. $email . "\n"; // Carbon copy to Sender
    $subject = "New Website Contact";
    $message = "Name: " . $_POST["name"] . "\n"
              ."Email: " . $_POST["email"] . "\n"
              ."Phone: " . $_POST["phone"] . "\n"
              ."Comments: " . $_POST['custom_type'];


    // Message lines should not exceed 70 characters (PHP rule), so wrap it
    $message = wordwrap($message, 70);
    // Send Mail By PHP Mail Function
    mail("matt@halliganwebdevelopment.com", $subject, $message, $headers);
    echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>
<!DOCTYPE html>
<html lang="en" class="contact_page">

<head data-next-url="" data-this-url="home.html"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta content="utf-8" http-equiv="encoding">
<meta name="viewport" content="initial-scale=1">
<title>The Wedgwood Lady</title>
<meta name="description" class="metaTagTop" content="Replacement China and Giftware. The Wedgewood Lady both buys and sells Wedgwood China and Giftware.">
<meta name="keywords" class="metaTagTop" content="Wedgwood China, Buy Wedgwood China, Wedgwood China Replacement, Replace Wedgwood China, Find Replacement China, Wedgwood giftware">
<meta name="author" class="metaTagTop" content="The Wedgwood Lady">
<meta class="metaTagTop" id="social-image" content="" property="og:image">
<meta property="og:title" content="The Wedgwood Lady">
<meta property="og:description" content="Replacement China and Giftware. The Wedgewood Lady both buys and sells Wedgwood China and Giftware.">
<meta property="og:url" content="contact.php">
<meta property="og:type" content="website">
<link rel="stylesheet" media="screen" href="css/styleweb.css">
<link rel="stylesheet"  href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7COswald:400,700%7CDroid+Sans:400,700%7CRoboto:400,700%7CLato:400,700%7CPT+Sans:400,700%7CSource+Sans+Pro:400,700%7CNoto+Sans:400,700%7CPT+Sans:400,700%7CUbuntu:400,700%7CBitter:400,700%7CPT+Serif:400,700%7CRokkitt:400,700%7CDroid+Serif:400,700%7CRaleway:400,700%7CInconsolata:400,700" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/lander.js"></script>
<script src="file/5.txt"></script>
<link rel='icon' type='image/png' href='images/wl-logo.png'></link>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<div class="scrollig_header_section">
       <div class="mob_img">
         <div class="container">
              <img src="images/wedgwood-lady-intro-sign.png">
         </div>
    </div>
    
<div class="nav-bar">
 <div class="container">
   <div class="col-md-2">
      <a href="home.html">Home</a>
    </div>
       <div class="col-md-2">
           <a href="about.html">About</a>
    </div>
    	<div class="col-md-2 md"> </div>
		<div class="col-md-2 md"></div>
	<div class="col-md-2">
         <a href="gallery.html">Gallery</a>
    </div>

	 <div class="col-md-2">
           <a href="https://www.ebay.com/str/wedgwoodland">Shop Now</a>
    </div>
  
  </div>
</div>
</div>

<div class="contact_section_bottom">
    <div class="container">
 <h2>Looking For Something Specific? Want to Sell Your China? Have Question?</h2>  
 <div class="de elSeperator elMargin0 ui-droppable de-editable" id="tmp_divider-25050" data-de-type="divider" data-de-editing="false" data-title="Divider" data-ce="false" data-trigger="none" data-animate="fade" data-delay="500" style="margin-top: 5px; outline: none; cursor: pointer;" aria-disabled="false">
<div class="elDivider  elDividerStyle1 ">
<div class="elDividerInner"></div>
</div>
</div>
    </div>
</div>

<div class="contact-bottom">
    <div class="container">
    <div class="left">
        <form action="" method="post" >
<div class="de elInputWrapper" id="hen">
<input type="text" placeholder="Enter Your Name..." name="name" class="elInput elInput100">
</div>
<div class="de elInputWrapper" id="input-97721" >
<input type="text" placeholder="Your Email Address..." name="email" class="elInput elInput100">
</div>
<div class="de elInputWrapper" id="input-68587">
<input type="text" placeholder="Your Phone Number..." name="phone" class="elInput elInput100">
</div>
<div class="de elInputWrapper de-input-block elAlign_center elMargin0 ui-droppable de-editable" id="tmp_input-73712">
<textarea placeholder="Comments/Questions" name="custom_type" class="elInput elInput100">
</textarea>
</div>
<div class="de elBTN elMargin0" id="tmp_button-60283">
<input type="submit" name="submit" value="Submit Your Information">
</div>
</form>
        
    </div>
        <div class="right">
        <p>Fill out the form to the left if you have a specific request or question and I will be in contact at my earliest convenience. </p>
               <p>If you would prefer to call or email me directly please use the contact information at the bottom of this page. I am very responsive to my customers and will be happy to assist in any way I can. </p>
                      <p>You can even send me a Facebook Message if you'd prefer:</p>
        <a href="https://www.facebook.com/messages/t/wedgwoodlady" class="tri"> Send me a message on Facebook </a>
    </div>
      </div>
</div>
<!-- footer-section -->
<footer>
<div class="container">
<div class="col-md-4">
<h2>ABOUT </h2>
<div class="de sd elSeperator elMargin0 ui-droppable de-editable" id="divider-88003-139-112-101" aria-disabled="false" style="margin-top: 0px; cursor: pointer; outline: none;" data-trigger="none" data-de-type="divider" data-delay="500" data-animate="fade" data-title="Divider" data-ce="false" data-de-editing="false">
<div class="elDivider elDividerStyle1 elDividerColor4"><div class="elDividerInner"></div></div>
</div>
<p>Getting married? Need a vintage or antique set of china? How about some wonderful old cups and saucers for afternoon tea? </p>
<p>Shop now by clicking the "Shop My Ebay Store" Button in the section above to browse our wide selection of inventory!</p>	`
</div>
<div class="col-md-4 img">
<img src="images/cat-1.png">
</div>
<div class="col-md-4 las">
<h2>CONTACT </h2>
<div class="de sd elSeperator elMargin0 ui-droppable de-editable" id="divider-88003-139-112-101" aria-disabled="false" style="margin-top: 0px; cursor: pointer; outline: none;" data-trigger="none" data-de-type="divider" data-delay="500" data-animate="fade" data-title="Divider" data-ce="false" data-de-editing="false">
<div class="elDivider elDividerStyle1 elDividerColor4"><div class="elDividerInner"></div></div>
</div>
<p>The Wedgwood Lady<br>
Wallingford, CT 06492<br>
Ellen R. Rubell, Owner<br>
P: 203-284-9090<br>
E: Wdgwdlady@aol.com</p>

<div class="link_footer">
<a href="https://www.facebook.com/wedgwoodlady/"><i class="fa fa-facebook-f"></i> Facebook</a>
</div>

</div>

</div>
<div class="copyright_section">
<div class="container">
<p> Copyright © The Wedgwood Lady 2019  // All Rights Reserved. // Wallingford, CT // 203-284-9090</p>
</div>
</div>
<!-- copyright-section -->


</footer>
</body>
</html>