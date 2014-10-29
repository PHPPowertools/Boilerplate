<?php define("LOCAL_PATH_BOOTSTRAP", __DIR__); require LOCAL_PATH_BOOTSTRAP . DIRECTORY_SEPARATOR . 'bootstrap.php';

if(isset($_GET['output']) && strtolower($_GET['output']) == 'json') {
    header('Content-type: application/json');
    echo toJson(getUserConstants());
    exit(200);
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" media="all"  href="<?php echo REQUEST_PROTOCOL . HTTP_PATH_ASSET_CSS; ?>/cascade-full.min.css" />
        <link rel="stylesheet" type="text/css" media="all"  href="<?php echo REQUEST_PROTOCOL . HTTP_PATH_ASSET_CSS; ?>/site.css" />
        <title>PHP PowerTools Boilerplate</title>
        <meta name="description" content="Boilerplate for PHP PowerTools projects">
        <link rel="shortcut icon" href="<?php echo REQUEST_PROTOCOL . HTTP_PATH_ASSET_IMG; ?>/favicon.ico" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="site-header">
            <div class="site-center">
                <div class="cell">
                    <h1>PHP PowerTools Boilerplate</h1>
                </div>
            </div>
        </div>
        <div class="site-body">
            <div class="site-center">
                <div class="cell">
                    <span class="center icon icon-globe icon-64"></span>
                    <p>This is a list of user defined constants for the Boilerplate project.</p>
                    <pre><?php echo getDump(getUserConstants()); ?></pre>
                </div>
            </div>
        </div>
        <div class="site-footer">
            <div class="site-center" id="site-footer-content">
                <div class="col">
                    <div class="cell pipes">
                        <ul class="nav">
                            <li>Powered by <a target="_blank" href="http://www.johnslegers.com">Cascade Framework</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo REQUEST_PROTOCOL . HTTP_PATH_ASSET_JS; ?>/app.js"></script>
    </body>
</html>
