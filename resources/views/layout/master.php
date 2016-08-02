<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="renderer" content="webkit">
        <meta name="viewport" content="user-scalable=no,initial-scale=1,maximum-scale=1,minimum-scale=1,width=device-width">
        <title><?php echo isset($title)? $title:'裴妍一生';?></title>
        <link href="/static/dist/main.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <!-- No header, and the drawer stays open on larger screens (fixed drawer). -->
        <div class="mdl-demo mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
            <div class="mdl-layout__drawer">
                <a href="/" class="mdl-layout-title">裴妍一生</a>
                <div class="mdl-demo-desc">
                    <h3>Peter's Blog</h3>
                    <p>一个快30岁什么都会一点的PHP程序员</p>
                    <div class="mdl-demo-icon">
                        <a target="_blank" href="http://weibo.com/2128726937" class="fa fa-weibo"></a>
                        <a target="_blank" href="https://github.com/PeterChenug" class="fa fa-github"></a>
                        <a target="_blank" href="https://twitter.com/PeterChenug" class="fa fa-twitter"></a>
                        <a target="_blank" href="https://www.facebook.com/peter.chenug.7" class="fa fa-facebook-official"></a>
                        <a target="_blank" href="mailto:peter.chenug@gmail.com" class="fa fa-envelope"></a>
                    </div>
                </div>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->
                    <?php echo view($view, $data);?>
                </div>
            </main>
        </div>
        <script type="text/javascript" src="/static/dist/main.js"></script>
    </body>
</html>
