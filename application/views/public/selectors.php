<?php include_once 'public_header.php'; ?>
        <header>
            <h1>Jquery Crash Course</h1>
        </header>
        <div id="container">
            <h1 id="heading1">Heading One</h1>
            <p id="para1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an <span>unknown</span> printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only five centuries, but also the leap into electronic typesetting, 
                remaining essentially unchanged. 
            </p>
            <h1 class="heading2">Heading One</h1>
            <p class="para2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                It has survived not only <span>five centuries</span>, but also the leap into electronic typesetting, 
                remaining essentially unchanged.
            </p>

            <ul id="list">
                <li>First item</li>
                <li>Second item</li>
                <li>Third item</li>
                <li>Fourth item</li>
                <li>Fifth item</li>
                <li>Sixth item</li>
            </ul>

            <input type="button" value="Button"/>
            <input type="submit" value="Submit"/>
            <input type="text" />

            <a href="http://google.com">Google</a>
            <a href="http://gmail.com">Gmail</a>
        </div>

        <script>
//            $('h1#heading1').hide();
//            $('#heading1').hide();
//            $('h1.heading2').hide();
//            $('p span').css('color', 'red');

            $('ul#list li:first').css('color', 'red');
            $('ul#list li:last').css('color', 'yellow');
            $('ul#list li:nth-child(3n)').css('list-style', 'none');
            $('ul#list li:even').css('background', '#008');
            $('ul#list li:odd').css('background', '#060');

//            $(':button').hide();
//            $(':submit').hide();
//            $(':text').hide();

            $('[href]').css('color', 'red');
            $('a[href="http://gmail.com"]').css('color', 'blue');

        </script>
  <?php include_once 'public_footer.php'; ?>