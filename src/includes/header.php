<?php
include_once __DIR__ . '/../helpers/redirect.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">

   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title> <?= isset($pageTitle) ? $pageTitle . ' | Hotel Jaraguá' : 'Hotel Jaraguá' ?></title>

   <!-- CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
   <link rel="icon" href="icons/favicon.png">
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>
<a href="https://reservas.desbravador.com.br/hotel-app/hotel-jaragua"
   class="btn-reserva"
   target="_blank">
   Faça já sua reserva
</a>
<body class="main-layout">

<!-- loader -->
<div class="loader_bg">
   <div class="loader"><img src="images/loading.gif" alt="#"/></div>
</div>

<header>
   <div class="header">
      <div class="container">
         <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 logo_section">
               <div class="logo">
                  <a href="<?= url('index') ?>">
                     <img width="150" src="images/logo.png" alt="Hotel Jaraguá">
                  </a>
               </div>
            </div>

            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
               <nav class="navigation navbar navbar-expand-md navbar-dark">
                  <button class="navbar-toggler" type="button" data-toggle="collapse"
                          data-target="#navbarsExample04">
                     <span class="navbar-toggler-icon"></span>
                  </button>

                  <div class="collapse navbar-collapse" id="navbarsExample04">
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= ($activeMenu ?? '') === 'index' ? 'active' : '' ?>">
                          <a class="nav-link" href="<?= url('index') ?>">Hotel</a>
                        </li>
                        <li class="nav-item <?= ($activeMenu ?? '') === 'about' ? 'active' : '' ?>">
                          <a class="nav-link" href="<?= url('about') ?>">Sobre nós</a>
                        </li>
                        <li class="nav-item <?= ($activeMenu ?? '') === 'room' ? 'active' : '' ?>">
                          <a class="nav-link" href="<?= url('room') ?>">Nossos Apartamentos</a>
                        </li>
                        <li class="nav-item <?= ($activeMenu ?? '') === 'gallery' ? 'active' : '' ?>">
                          <a class="nav-link" href="<?= url('gallery') ?>">Galeria</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link"
                              href="https://reservas.desbravador.com.br/hotel-app/hotel-jaragua"
                              target="_blank"
                              rel="noopener noreferrer">
                              Reservas 
                          </a>
                        </li>
                        <li class="nav-item <?= ($activeMenu ?? '') === 'contact' ? 'active' : '' ?>">
                          <a class="nav-link" href="<?= url('contact') ?>">Contato</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </div>
</header>
