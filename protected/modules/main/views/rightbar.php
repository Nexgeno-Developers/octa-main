<script language="javascript">
window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};
</script>

<form role="form" method="post" class="quickcontact" action="<?php echo Yii::app()->createUrl("main/forms/quickcontact"); ?>" name="quick-contact">

<table width="99%" border="0" cellspacing="0" cellpadding="0">
 <!-- <tr>
    <td><h4>Octa CCIE’s</h4></td>
  </tr>
 < <tr>
    <td><img src="<?=Yii::app()->request->getBaseUrl(true)?>/img/octa-ccie.gif" class="img-responsive" alt="Co Founder Octa Networks" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>-->
  <tr>
    <td><h4>Quick Contact</h4></td>
  </tr>
  <tr>
    <td height="50"><input type="text" name="name" id="name" class="form-control" required="required" placeholder="Your Name*" /></td>
  </tr>
  <tr>
    <td height="50"><input type="email" name="email" id="email" class="form-control" required="required" placeholder="Your Mail*" /></td>
  </tr>
  <tr>
    <td height="50"><input type="text" name="subject" id="subject" class="form-control" required="required" placeholder="Subject*" /></td>
  </tr>
  <tr>
    <td height="85"><textarea name="message" class="form-control" placeholder="Message"></textarea>
		<input type="hidden" name="type" value="Quick Contact" />
	</td>
  </tr>
  <tr>
    <td height="85"><div class="g-recaptcha" data-sitekey="<?=Yii::app()->params['siteKey']?>"></div></td>
  </tr>
  <tr>
    <td height="50"><button type="submit" class="quickform-btn" />Send</button></td>
  </tr>
</table>

</form>
