<?php
/**
 * Created by Alexander Pshenisnuk aka Heddin.
 * @mail: temm.twilightwizard@gmsail.com
 * @github: https://github.com/Heddin
 *
 * Created with: PhpStorm
 *
 * Date: 18.11.2017 * Time: 15:21
 */
?>
<script type="text/javascript" src="{{asset("/js/jquery-3.2.1.min.js")}}"></script>
<script type="text/javascript" src="{{asset("/js/materialize.min.js")}}"></script>
<script>
  $(document).ready(function(){
      $('.carousel').carousel();
      $('.button-collapse').sideNav();
  });
</script>