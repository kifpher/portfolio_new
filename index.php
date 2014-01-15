<html DOCTYPE!>
<html lang="en">
<head>
  <title>Momotofu: Web Design</title>

  <script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="layout.css">
  <script type="text/javascript" src="//use.typekit.net/gtr1cik.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

</head>
<body>
<div class="hbg">
  <div class="container grid_full">
    <nav class="mobile">  
      <h3><a href="#">momotofu</a></h3>
      <span class="button"></span>
      <ul>
        <li><a href="#">home</a></li>
        <li><a href="#">about</a></li>
        <li><a href="#">examples</a></li>
        <li><a href="#">resume</a></li>
        <li><a href="#">blog</a></li>
        <li><a href="#">contact</a></li>      
      </ul>
    </nav>
  </div>
</div>
<div>
  <h1 class="heading obj1">We make websites delicious!</h1>
  <div class="hero obj2"></div>
</div>

<div class="container grid_full graph">
  <h2 class="heading">Get Positive Results</h2>
  <span class="base_grid">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </span>
  <span class="moving_grid">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </span>     
</div>
<div class="container grid_full main_content">
  <p class="main_text">People prefer good design. In a study at Duke University, just showing students the Apple logo proved to increase creativity and productivity. Imagine what kind of results good design could accomplish for you.</p>
</div>
<div class="container grid_full main_content"> 
  <h2 class="heading">Work With a Professional</h2>
  <img src="imgs/desk.png">
  <p class="main_text">Why am I a designer? People have ideas that need to come alive. I’ve come to realize that the world is forged from the human mind and its ideas. As a designer I have the privilege of working with poeple to both create and maintain delicious ideas.</p>
  <p class="main_text">As far back as I can remeber I’ve had a curious mind. Taking things apart, analysing, and then creating something even better has always been my passion. Speaking of curious, if your interested, I’ve visually charted a graph of my talents below. Otherwise I have a more formal representation on the resume page. </p>
</div>
<div class="container grid_full main_content group">
  <div class="grid_3rd">
    <h2>Web Products</h2>
    <img src="imgs/pong.png">
    <p>By adding a touch of interactivty and 
    well placed design you'll be reving up your 
    user's experience to a whole new level. </p>
  </div>
  <div class="grid_3rd">
    <h2>Animation</h2>
    <img src="imgs/pong.png">
    <p>Bring your web product to life with an
    animated user interface, a flashy hook for your site,
    or with a compelling call to action.</p>
  </div>
  <div class="grid_3rd">
    <h2>Illustration</h2>
    <img src="imgs/pong.png">
    <p>Build company culture by desiging your web 
    products with style. Ensure that your design is
    consistent and user friendly.</p>
  </div>
</div>  

<div class="contact">
  <form id="contact" name="contact" method="post">  
    <fieldset>  
      <label for="name" id="name">Name<span class="required">*</span></label>
      <input type="text" name="name" id="name" size="30" value="" required/>
   
      <label for="email" id="email">Email<span class="required">*</span></label>
      <input type="text" name="email" id="email" size="30" value="" required/>
   
      <label for="phone" id="phone">Phone</label>
      <input type="text" name="phone" id="phone" size="30" value="" />
   
      <label for="Message" id="message">Message<span class="required">*</span></label>
      <textarea name="message" id="message" required></textarea>
   
      <input id="submit" type="submit" name="submit" value="Send" />  
    </fieldset>  
  </form>
   
  <div id="success">
    <span>
      <p>Your message was sent succssfully! I will be in touch as soon as I can.</p>
    </span>
  </div>
   
  <div id="error">
    <span>
      <p>Something went wrong, try refreshing and submitting the form again.</p>
    </span>
  </div>
</div>

<div class="container grid_full footer">
  <ul>
    <li><a href="twitter.com/momotofutweet">twitter</a></li>
    <li><a href="dribble.come/momotofu">dribbble</a></li>
    <li><a href="twitter.com/momotofutweet">behance</a></li>
    <li><a href="twitter.com/momotofutweet">instagram</a></li>
    <li><a href="twitter.com/momotofutweet">linkedin</a></li>
    <li><a href="twitter.com/momotofutweet">tumblr</a></li>
  </ul>
</div>
<script type="text/javascript">
$('#contact').validate({
    rules: {
        name: {
            required: true,
            minlength: 2
        },
        email: {
            required: true,
            email: true
        },
        message: {
            required: true
        }
    },
    messages: {
        name: {
            required: "come on, you have a name don't you?",
            minlength: "your name must consist of at least 2 characters"
        },
        email: {
            required: "no email, no message"
        },
        message: {
            required: "um...yea, you have to write something to send this form.",
            minlength: "thats all? really?"
        }
    },
    submitHandler: function(form) {
        $(form).ajaxSubmit({
            type:"POST",
            data: $(form).serialize(),
            url:"process.php",
            success: function() {
                $('#contact').fadeOut( "fast", function() {
                    $('#success').fadeIn();
                });
            },
            error: function() {
                $('#contact').fadeOut( "fast", function() {
                    $('#error').fadeIn();
                });
            }
        });
    }
});
</script>
</body>
</html>