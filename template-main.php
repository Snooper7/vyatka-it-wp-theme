<?php
// Template Name: Главная

$posts = Timber::get_posts();
$context['products'] = $posts;
$context['assets'] = ASSETS;

Timber::render('layouts/main.twig', $context);