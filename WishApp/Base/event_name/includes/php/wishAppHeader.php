
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebSite">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="True" />
        <meta name="robots" content="index,follow" />
        <?php $current_page = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        echo '<link rel="canonical" href="'.$current_page.'" itemprop="url"/>'; ?>

        <!-- Edit the Meta Tags Add your Own Meta Contents  -->
        <!-- Seo Meta Tags -->
        <title><?php echo $user['title']; ?> Wishing your happy independence day</title>
        <meta name="description" content="<?php echo $user['title']; ?> Wish you a happy independence day Here is your happy independence day Greeting Wishes."/>
        <link href='YOUR FAVICON URL' rel='icon' type='image/x-icon'/>

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?php echo $user['title']; ?> Wishing your happy independence day" />
        <meta name="twitter:description" content="<?php echo $user['title']; ?> Wish you a happy independence day Here is your happy independence day Greeting Wishes." />
        <meta name="twitter:image" content="THUMBNAIL URL IMAGE FOR TWITTER SHARE" />
        <meta name="twitter:site" content="@yourtwitterusername" />
        <meta name="twitter:creator" content="@yourtwitterusername" />

        <!-- Facebook Open Graph data -->
        <meta property="og:title" content="<?php echo $user['title']; ?> Wishing you a Happy New year 2018" />
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="<?php echo $current_page; ?>" />
        <meta property="og:image" content="FB OG THUMBNAIL URL" />
        <meta property="og:image:alt" content="Happy New year" />
        <meta property="og:description" content="<?php echo $user['title']; ?> Wishing you a Happy New Year - Here is your Happy New Year 2018 Greeting Wishes." /> 
        <meta property="og:site_name" content="Happy New Year 2018" />
        <meta property="fb:app_id" content="YOUR FB APP ID" />
        <meta property="article:publisher" content="YOUR FB PROFILE URL" />
        <meta property="article:author" content="YOUR FB PAGE URL" />

        <!-- Google+ Meta Tags. -->
        <meta itemprop="name" content="<?php echo $user['title']; ?> Wishing your happy independence day">
        <meta itemprop="description" content="<?php echo $user['title']; ?> Wish you a happy independence day Here is your happy independence day Greeting Wishes.">
        <meta itemprop="image" content="THUMBNAIL IMAGE URL FOR GOOGLE+ SHARE">


        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='includes/style/style.css' rel='stylesheet' type='text/css'>
    </head>
    <body>