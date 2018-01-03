<?php include_once 'public_header.php'; ?>
<header>
    <h1>jQuery Crash Course | Effects & Animation</h1>
</header>
<div id="container">
    <button id="btnFadeOut">Fade Out</button>
    <button id="btnFadeIn">Fade In</button>
    <button id="btnFadeTog">Fade Toggle</button>
    
    <hr>
    
    <div id="box"><h1>Hello World</h1></div>
</div>
<script>
    $(document).ready(function(){
       
       $('#btnFadeOut').click(function(){
//           $('#box').fadeOut();
//           $('#box').fadeOut('fast');
//           $('#box').fadeOut('slow');
//           $('#box').fadeOut(3000);
            $('#box').fadeOut(3000, function(){
                $('#btnFadeOut').text('It\'s Gone');
            });
       });
       
       $('#btnFadeIn').click(function(){
          $('#box').fadeIn(3000);
       });
       
       $('#btnFadeTog').click(function(){
           $('#box').fadeToggle(1000);
       });
    });
</script>
<?php include_once 'public_footer.php'; ?>