<?php
        include 'common.php';

        if ($user->hasLogin()) {
            $response->redirect($options->adminUrl);
        }
        $rememberName = htmlspecialchars(Typecho_Cookie::get('__typecho_remember_name'));
        Typecho_Cookie::delete('__typecho_remember_name');

        $bodyClass = 'body-100';

        ?>
<!DOCTYPE html>
<html class="no-js" lang="zh">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Login</title>
    <link rel="stylesheet" href="./style/lgstyle.css">
</head>
<div class="container">
    <h1>LOGIN</h1>
    <form action="<?php $options->loginAction(); ?>" method="post" name="login" role="form">
        <div class="login_box">
            <div class="input_outer">
                <input name="name" class="text" type="text" required placeholder="">
                <div class="underline"></div>
                <label for="">Name/UID/Email</label>
            </div>
            <div class="input_outer">
                <input name="password" class="text" type="password" required placeholder="">
                <div class="underline"></div>
                <label for="">Password</label>
            </div>
        </div>
        <div class="remember" style="text-align:center;">
            <label for="remember" class="check_lable">
                <input type="checkbox" name="remember" class="checkbox" value="1" id="remember" />
                <span>记住我</span>
            </label><!--  <?php _e('记住我'); ?> -->
        </div>
        <div class="mb2">
            <button type="submit" class="act-but submit" style="color: #FFFFFF">登入</button>
            <p class="more-link">
                <a href="<?php $options->siteUrl(); ?>"><?php _e('返回'); ?></a>
                <?php if ($options->allowRegister) : ?>
                    &bull;
                    <a href="<?php $options->registerUrl(); ?>"><?php _e('注册'); ?></a>
                <?php endif; ?>
            </p>
        </div>
</div>
</form>
<script type="text/javascript" src="./style/linear.js"></script>
<?php
include 'common-js.php';
?>
<script>
    $(document).ready(function() {
        $('#name').focus();
    });
</script>
<?php
include 'footer.php';
?>