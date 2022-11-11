    <!-- php for admin page  -->

    <?php
    $username = 'WeCare';
    $password = 'WeCare123';

    $msg="";    
    if (isset($_POST['submit'])) {
        $u = $_POST['aname'];
        $p = $_POST['apass'];

        if($u==$username && $p==$password)
        {
            $msg= "You are logged in ";   
            header("Location: ./admin_page.html");  
        }
        else
        {
            $msg="I know you are not admin";    
        }
    }

    ?>

    <!-- php end here  -->