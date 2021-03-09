<!DOCTYPE html>
<html>
<head>
    <link href="/css/style.css" rel="stylesheet" type="text/css">

    <title><?php echo $pageTitlePrefix." - ".$pageTitle ?></title>
</head>
<body class="<?php echo $page ?>">
    <div class="menu">
        <a href="/<?php echo $menuLang1 ?>"><?php echo $menuLang1 ?></a>
        <a href="/<?php echo $menuLang2 ?>"><?php echo $menuLang2 ?></a>

        <a href="/<?php echo $lang ?>"><?php echo $menuItem1 ?></a>
        <a href="/<?php echo $lang ?>/test"><?php echo $menuItem2 ?></a>
    </div>

