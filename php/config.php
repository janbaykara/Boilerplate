<?
# ======================
# Global defines
# ======================

// Strings
$PUBLISHER      = "Boom";
$PROJECTNAME    = "Boilerplate";
$PAGETITLE      = $PROJECTNAME;
$DESCRIPTION    = "I'm Jan Baykara, a graphic and web designer & developer based in Leicestershire. This is where I keep my portfolio of work for clients and personal projects. Quirky personal fact here. Something something use the word awesome. There, now I'm a qualified for the creative industries, right?";
$COPYRIGHT      = $PUBLISHER." &copy; ".date("Y");

// URLs
$BASEURL        = "localhost";
$ASSETURL       = $BASEDIR."/boilerplate";
$CSSURL         = $ASSETURL."/css";
$JSURL          = $ASSETURL."/js";
$IMGURL         = $ASSETURL."/img";

$LOGO           = $IMGURL."/logo.png";

// Miscellaneous
$SCHEMAROOT     = "WebPage";

// Enable/Disable LESS
$LESS = false;

if($LESS == true) {
  $CSS = ' 
  <!-- Stylesheets -->
        <link  href="'.$ASSETURL.'/css/master.less" rel="stylesheet/less" type="text/css">

    <!-- Dependencies -->
        <script>less = { env: "development" };</script>
        <script src="//cdn.jsdelivr.net/less/1.7.1/less.min.js"></script>
  ';
} else {
  $CSS = '
  <!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="'.$ASSETURL.'/css/master.css">
    ';
}

# ======================
# Scaffold HTML
# ======================

$SCAFFOLD_HEAD = <<<HTML
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" itemscope itemtype="http://schema.org/$SCHEMAROOT" lang="en-gb"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" itemscope itemtype="http://schema.org/$SCHEMAROOT" lang="en-gb"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" itemscope itemtype="http://schema.org/$SCHEMAROOT" lang="en-gb"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" itemscope itemtype="http://schema.org/$SCHEMAROOT" lang="en-gb"> <!--<![endif]-->
<head>

    <!-- ####################################################### ---
    #
    #   Powered by cynicism and hayfever. 
    #
    ---- ####################################################### -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Mass of favicon data, courtesy of the http://faviconit.com/ generator -->
      <link rel="shortcut icon" href="$IMGURL/favicon.ico?v=1.0">
      <link rel="icon" sizes="16x16 32x32 64x64" href="$IMGURL/favicon.ico?v=1.0">
      <link rel="icon" type="image/png" sizes="196x196" href="$IMGURL/favicon-196.png?v=1.0">
      <link rel="icon" type="image/png" sizes="160x160" href="$IMGURL/favicon-160.png?v=1.0">
      <link rel="icon" type="image/png" sizes="96x96" href="$IMGURL/favicon-96.png?v=1.0">
      <link rel="icon" type="image/png" sizes="64x64" href="$IMGURL/favicon-64.png?v=1.0">
      <link rel="icon" type="image/png" sizes="32x32" href="$IMGURL/favicon-32.png?v=1.0">
      <link rel="icon" type="image/png" sizes="16x16" href="$IMGURL/favicon-16.png?v=1.0">
      <link rel="apple-touch-icon" sizes="152x152" href="$IMGURL/favicon-152.png?v=1.0">
      <link rel="apple-touch-icon" sizes="144x144" href="$IMGURL/favicon-144.png?v=1.0">
      <link rel="apple-touch-icon" sizes="120x120" href="$IMGURL/favicon-120.png?v=1.0">
      <link rel="apple-touch-icon" sizes="114x114" href="$IMGURL/favicon-114.png?v=1.0">
      <link rel="apple-touch-icon" sizes="76x76" href="$IMGURL/favicon-76.png?v=1.0">
      <link rel="apple-touch-icon" sizes="72x72" href="$IMGURL/favicon-72.png?v=1.0">
      <link rel="apple-touch-icon" href="$IMGURL/favicon-57.png?v=1.0">
      <meta name="msapplication-TileColor" content="#FFFFFF">
      <meta name="msapplication-TileImage" content="$IMGURL/favicon-144.png?v=1.0">
      <meta name="msapplication-config" content="$IMGURL/browserconfig.xml">

    <!-- Metadata -->
        <title>$PAGETITLE</title>
        <meta content="$PROJECTNAME" />
        <meta itemprop="description" content="$DESCRIPTION" name="description"/>
        <meta itemprop="image" content="$LOGO" />
        <!-- \\ TWITTER -->
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:site" content="$BASEURL">
            <meta name="twitter:title" content="$PAGETITLE">
            <meta name="twitter:description" content="$DESCRIPTION">
            <meta name="twitter:image:src" content="$LOGO">
        <!-- \\ FACEBOOK -->
            <meta property="og:title" content="$PAGETITLE" />
            <meta property="og:url" content="$BASEURL"/>
            <meta property="og:site_name" content="$PAGETITLE" />
            <meta property="og:description" content="$DESCRIPTION" />
            <meta property="og:type" content="website" />
            <meta property="og:image" content="$LOGO" />

    $CSS
    
        <script src="//cdn.jsdelivr.net/modernizr/2.8.2/modernizr.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="//cdn.jsdelivr.net/jquery.lazyload/1.9.3/jquery.lazyload.min.js"></script>
</head>
<body>
    <!-- ===============
    header.php
    ================ -->
HTML;

$SCAFFOLD_FOOT = <<<HTML
    <!-- ===============
    footer.php 
    ================ -->

    <div class='clearfix'></div>

    <!-- Footer JS -->
    <script src="$ASSETURL/js/main.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-47411407-1', 'baykara.co.uk');
      ga('send', 'pageview');

    </script>
</body>
</html>
HTML;
?>