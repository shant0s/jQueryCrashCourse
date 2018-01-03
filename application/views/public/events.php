<?php include_once 'public_header.php'; ?>
<header>
    <h1>Jquery Crash Course | Events</h1>
</header>
<div id="container">
    <h3>Mouse Events</h3>
    <button id="btn1" class="btnClass">Button 1</button>
    <button id="btn2">Button 2</button>
    <p class="para1">
        Great job, Santosh! In JavaScript, when we surround a word with quotes it's 
        called a string, and when we're done with a line of code we finish it with a semicolon.
        JavaScript also has built-in features, called functions. In order to call a function, 
        we simply write its name (this time without quotes) and end it with a set of parentheses. 
    </p>
    <h1 id="coords"></h1>

    <hr>
    <form id="form">
        <table cellpadding="5px">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" id="name" /></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="email" name="email" id="email" /></td>
            </tr>
            <tr>
                <td>Gender: </td>
                <td>
                    <select name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </td>
            </tr>
            <tr id="rowOther">
                <td>Other: </td>
                <td><input type="text" name="other" id="other" /></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="Submit"/></td>
            </tr>                
        </table>
    </form>
    <div id="myDiv"></div>
    <script>
        //    $('#btn1').click(function(){
        //        alert('Button Clicked');
        //    });
        $(document).ready(function () {
            /*
             $('#btn1').click(function(){
             alert('Button 1 clicked');
             })
             
             //does the same function as above
             $('#btn1').on('click', function(){
             alert('Button 1 Clicked');
             });
             
             
             $('#btn1').click(function(){
             //            $('.para1').hide();
             $('.para1').toggle();
             });
             
             $('#btn2').click(function(){
             $('.para1').show();
             });
             
             $('#btn1').dblclick(function(){
             $('.para1').toggle();
             });
             
             $('#btn1').hover(function(){
             $('.para1').toggle();
             });
             
             
             //hover is combination of both mouseenter and mouseleave
             $('#btn1').on('mouseenter', function(){
             $('.para1').toggle();
             });
             
             $('#btn1').on('mouseleave', function(){
             $('.para1').toggle();
             });
             
             $('#btn1').mousemove(function(){
             $('.para1').toggle();
             });
             
             
             $('#btn1').mousedown(function(){
             $('.para1').toggle();
             });
             
             $('#btn1').mouseup(function(){
             $('.para1').toggle();
             });
             
             
             $('#btn1').click(function(e){
             //            console.log(e);
             //            alert(e.currentTarget.id);
             //            alert(e.currentTarget.innerHTML);
             //            alert(e.currentTarget.outerHTML);
             alert(e.currentTarget.className);
             });
             
             //        $(document).mousemove(function(e){
             //           console.log('Coords:Y: '+e.clientY+' X: '+e.clientX);
             //        });
             
             $(document).mousemove(function(e){
             $('#coords').html('Coords: Y: '+e.clientY+' X: '+e.clientX);
             });
             
             
             $('input').focus(function(){
             //            alert('focus');
             $(this).css('background', 'pink');
             });
             $('input').blur(function(){
             $(this).css('background', 'white');
             });
             
             $('input').keyup(function(e){
             console.log(e.target.value) 
             });
             
             
             $('select#gender').change(function(e) {
             //              alert('Changed');
             alert(e.target.value);
             });
             */


            //        $('#form').submit(function(e){
            //            e.preventDefault();
            ////            console.log('Submitted');
            //            var name = $('input#name').val();
            //            console.log(name);
            //        });


            $('tr#rowOther').hide();

            $('select#gender').change(function () {
                if ($('#gender').val() == 'Other') {
                    $('tr#rowOther').show();
                } else {
                    $('tr#rowOther').hide();
                }
            });


            $('#form').submit(function () {
                var name = $('input#name').val();
                var email = $('input#email').val();
                var gender = $('select#gender').val();
                var other = $('input#other').val();
                $('#myDiv').html('Name: ' + name +
                        '<br /> Email: ' + email +
                        '<br />Gender: '+ gender +
                        '<br />Other: '+ other);
                return false;
            });

        });
    </script>
    <?php include_once 'public_footer.php'; ?>