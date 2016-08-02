<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="renderer" content="webkit">
        <title><?php echo isset($title)? $title:'裴妍一生';?></title>
        <link href="static/dist/main.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <!--头部Layout-->
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-drawer">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title">Title</span>
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <!--
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                    </nav>
                    -->
                    <button id="demo-menu-lower-left"
                            class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>

                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                        for="demo-menu-lower-left">
                        <li class="mdl-menu__item">
                            <a href="/backend-article-create">添加文章</a>
                        </li>
                    </ul>
                </div>
            </header>
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">裴妍一生</span>
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="/backend">Home</a>
                    <a class="mdl-navigation__link" href="/backend-article">Article</a>
                    <a class="mdl-navigation__link" href="">Tag</a>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content"><!-- Your content goes here -->
                    <?php echo view($view, $data);?>
                </div>
            </main>
        </div>
        <script type="text/javascript" src="static/dist/main.js"></script>
    </body>
</html>
