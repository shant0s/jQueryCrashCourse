<?php include_once 'public_header.php'; ?>
<header>
    <h1>Jquery Crash Course | DOM Manipulation</h1>
</header>
<div id="container">
    <button id="btn1">Button</button>
    <p class="para1">This is a paragraph.</p>
    <p class="para2">This is another paragraph.</p>
    <div id="myDiv"></div>
    <ul id="list">
        <li>Item 1</li>
        <li>Item 2</li>
        <li>Item 3</li>
        <li>Item 4</li>
        <li>Item 5</li>
        <li>Item 6</li>
    </ul>

    <input type="text" name="item" id="item" />
    <button id="btn2">Add List</button><br />
    
    <ul id="myList"></ul>

    <a href="http://google.com">Google</a>
    <a href="http://gmail.com">Gmail</a>
    <form id="form">
        <table cellpadding="5px">
            <tr>
                <td>Name: </td>
                <td><input type="text" name="name" id="name" /></td>
                <td><div id="errorName"></div></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><input type="text" name="address" id="address" /></td>
                <td><div id="errorAddress"></div></td>
            </tr>
            <tr>
                <td>Email: </td>
                <td><input type="text" name="email" id="email" /></td>
                <td><div id="errorEmail"></div></td>
            </tr>
            <tr>
                <td><button id="submit">Submit</button></td>
            </tr>
        </table>
    </form>
    <div id="myInfo"></div>
</div>
<script>
    $(document).ready(function () {

        $('#form').submit(function () {
            var a = $('#name').val();
            var b = $('#address').val();
            var c = $('#email').val();



            if (a == '' || a.split(' ').length == 1) {
                $('#errorName').html('Fullname is required');
            } else {
                $('#errorName').html('');
            }
            if (b == '') {
                $('#errorAddress').html('Address is required');
            } else {
                $('#errorAddress').html('');
            }
            if (c == '') {
                $('#errorEmail').html('Email is required');
            } else {
                $('#errorEmail').html('');
            }

            $('#myInfo').html('Name: ' + a + '<br /> Address: ' + b + '<br />Email: ' + c);
            return false;

        });

        $('input').focus(function () {
            $(this).css('background', 'pink');
        });

        $('input').blur(function () {
            $(this).css('background', 'white');
        });

        /*
         //        $('p.para1').css('color', 'red');
         $('p.para1').css({color: 'red', background: '#005'});
         //        $('p.para2').addClass('myClass');
         //        $('p.para2').removeClass('myClass');
         
         $('#btn1').click(function(){
         $('p.para2').toggleClass('myClass'); 
         });
         
         $('p.para2').hover(function(){
         $('p.para2').toggleClass('myClass');
         });
         
         //        $('#myDiv').text('Hello World');
         $('#myDiv').html('<h3>Hello World</h3>');
         alert($('#myDiv').text());
         
         
         $('ul').append('<li>This is append</li>');
         $('ul').prepend('<li>This is prepend</li>');
         
         $('.para1').appendTo('.para2');
         $('.para1').prependTo('.para2');
         
         $('ul').before('<h3>Hello</h3>');
         $('ul').after('<h3>World</h3>');
         
         $('ul').empty();
         $('ul').detach();
         
         $('a').attr('target', '_blank');
         //         alert($('a').attr('href'));
         $('a').removeAttr('target');  
         
         
         $('p').wrap('<h1>');
         
         
         //        $('#btn2').click(function(){
         //           var addList = $('#item').val();
         //           
         //           $('ul').append('<li>'+addList+'</li>');
         //        });
         
         // The above jquery function can also be done as below.
         $('#item').keyup(function(e){
         var code = e.which; //which gets the key code
         
         //code 13 means enter
         if(code == 13){
         $('ul').append('<li>'+e.target.value+'</li>');
         }
         });
         */
        
        /* $('p').wrap('<h3>'); */
         
       /*
        var myArray = ['Santosh', 'Sujan', 'Vikram', 'Sanjeev', 'Ukesh'];
        
        $.each(myArray, function(i, val){
//           console.log(val); 
            $('#myList').append('<li>'+val+'</li>');
        });
        
        */
       
       /*
       var newArray = $('ul#list li').toArray();
//       console.log(newArray);

        $.each(newArray, function(i, val){
           console.log(val.innerHTML); 
        });
        */
      
       
    });
</script>
<?php include_once 'public_footer.php'; ?>