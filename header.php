<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title>Democratic Developers & Designers of Chicago</title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link rel="stylesheet" type="text/css" href="<?= get_theme_file_uri("css/styles.css") ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_theme_file_uri("images/apple-touch-icon.png") ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_theme_file_uri("images/favicon-32x32.png") ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_theme_file_uri("images/favicon-16x16.png") ?>">
    <link rel="manifest" href="<?= get_theme_file_uri("images/site.webmanifest") ?>">
    <link rel="mask-icon" href="<?= get_theme_file_uri("images/safari-pinned-tab.svg") ?>" color="#4ea1d3">
    <link rel="shortcut icon" href="<?= get_theme_file_uri("images/favicon.ico") ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-config" content="<?= get_theme_file_uri("images/browserconfig.xml") ?>">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <main>
        <header>
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container nav-wrap">
                    <a href="/" class="navbar-brand">
                        <img src="<?= get_theme_file_uri("images/logo.svg") ?>" alt="dddc logo">
                    </a>
                    <button class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarToggle"
                            aria-controls="navbarToggle"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarToggle">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="/our-purpose/">Our Purpose</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Events</a>
                            </li>
                            <li class="nav-item">
                                <a
                                    class="nav-link"
                                    href="#"
                                    data-toggle="modal"
                                    data-target="#ContactModal"
                                    >Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    	</header>
