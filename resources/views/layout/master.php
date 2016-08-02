<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="renderer" content="webkit">
        <title><?php echo isset($title)? $title:'裴妍一生';?></title>
        <link href="/static/dist/main.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <!-- No header, and the drawer stays open on larger screens (fixed drawer). -->
        <div class="mdl-demo mdl-layout mdl-js-layout mdl-layout--fixed-drawer">
            <div class="mdl-layout__drawer">
                <span class="mdl-layout-title">裴妍一生</span>
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
