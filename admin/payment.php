<?php

if(isset($_POST['fm16_pay_btn'])){
 // require "config.php";

  $name = $_POST['billing_address_first_name'];
  $email = $_POST['customer_email'];
  $phoneno = $_POST['customer_phone'];
  $orgname = $_POST['Field_72942'];
  $food_prefs = $_POST['Field_52247'];
  $tshirts = $_POST['Field_65157'];
  $amount = $_POST['total_amount'];
  $tshirtspec = $_POST['TSHIRT_SPEC'];

?>
<style>
      body {
        font-family: 'Open Sans', Lucida Grande, Lucida Sans, Tahoma, sans-serif;
      }
      h1 {
        text-align: center;
      }
        h1 span {
          display: block;
        }
        h1 .green {
          font-size: 5em;
        }
        h1 .blue {
          font-size: 1em;
        }
      .green {
        color: #00b6a5;
      }
      .blue, a {
        color: #1b75bb;
      }

      p, ul {
        line-height: 1.6em;
        max-width: 600px;
        margin: 0 auto 20px auto;
      }

      ul {
        list-style-type: square;
        list-style-position: inside;
        text-align: left;
      }

      blockquote {
        color: #999;
        max-width: 550px;
        line-height: 1.6em;
        margin: 0 auto;
        text-align: left;
      }
    </style>
<div style="max-width: 800px; margin: 2em auto;">
      <h1><span class="green">404</span><span class="blue">Page Not Found</span></h1>
      <p>One of the following things could have happened:</p>
      <ul>
        <li>The URL is wrong.</li>
        <li>The page you're looking for never existed, doesn't exist or is having an existential crisis.</li>
        <li>If you're looking for an offer: it might have been deleted, archived or might be under moderation.</li>
        <li>Smeagol took it away. Gollum! Gollum!</li>
      </ul>
      <p><a href="/">&larr; Go back to FOSSMeet '16</a></p>
      <blockquote>
        <strong>"But I don't want to go among 404 pages,"</strong> Alice remarked.<br/>
        <strong>"Oh, you can't help that,"</strong> said the Cat: <strong>"we're all 404 here. I'm a 404. You're a 404."</strong><br/>
        <strong>"How do you know I'm a 404?"</strong> said Alice.<br/>
        <strong>"You must be,"</strong> said the Cat, <strong>"or you wouldn't have come here."</strong>
      </blockquote>
    </div>
<?php



}
else{
	?>
<style>
      body {
        font-family: 'Open Sans', Lucida Grande, Lucida Sans, Tahoma, sans-serif;
      }
      h1 {
        text-align: center;
      }
        h1 span {
          display: block;
        }
        h1 .green {
          font-size: 5em;
        }
        h1 .blue {
          font-size: 1em;
        }
      .green {
        color: #00b6a5;
      }
      .blue, a {
        color: #1b75bb;
      }

      p, ul {
        line-height: 1.6em;
        max-width: 600px;
        margin: 0 auto 20px auto;
      }

      ul {
        list-style-type: square;
        list-style-position: inside;
        text-align: left;
      }

      blockquote {
        color: #999;
        max-width: 550px;
        line-height: 1.6em;
        margin: 0 auto;
        text-align: left;
      }
    </style>
<div style="max-width: 800px; margin: 2em auto;">
      <h1><span class="green">404</span><span class="blue">Page Not Found</span></h1>
      <p>One of the following things could have happened:</p>
      <ul>
        <li>The URL is wrong.</li>
        <li>The page you're looking for never existed, doesn't exist or is having an existential crisis.</li>
        <li>If you're looking for an offer: it might have been deleted, archived or might be under moderation.</li>
        <li>Smeagol took it away. Gollum! Gollum!</li>
      </ul>
      <p><a href="/">&larr; Go back to FOSSMeet '16</a></p>
      <blockquote>
        <strong>"But I don't want to go among 404 pages,"</strong> Alice remarked.<br/>
        <strong>"Oh, you can't help that,"</strong> said the Cat: <strong>"we're all 404 here. I'm a 404. You're a 404."</strong><br/>
        <strong>"How do you know I'm a 404?"</strong> said Alice.<br/>
        <strong>"You must be,"</strong> said the Cat, <strong>"or you wouldn't have come here."</strong>
      </blockquote>
    </div>
<?php
}
?>
