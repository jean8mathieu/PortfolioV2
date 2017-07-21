<?php
/**
 * Created by IntelliJ IDEA.
 * User: Jean-Mathieu
 * Date: 1/17/2016
 * Time: 3:02 PM
 */

include("head.php");
?>
<h1>Contact Me</h1>
<hr>
<p>You can contact me by email at : <a href="mailto:jean-mathieu.emond@jmdev.ca">jean-mathieu.emond@jmdev.ca</a> and if
 you wish to have my phone number, let me know in the email. I will get back to you as soon as possible.</p>

<p>If you're looking for someone to build a website or an application for you. Please write a descriptive email with an offer
and I'll get back to you with future information.</p>

<br>
    <p>Last Updated On <?=date ("F d Y H:i:s.", filemtime("contact.php"))?></p>
<hr>

<?php
include("foot.php");