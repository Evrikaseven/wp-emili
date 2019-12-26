<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title>responsive Email</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

   <?php wp_head(); ?>
</head>
<body>
   <header>
              <!-- <div class="container"> -->

            <nav style="border-bottom: 3px solid #007fbe;" class="navbar navbar-expand-lg navbar-light fixed-top" aria-label="Main navigation">
                            <div id="notify-container"></div>
               
               <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
            </button>
                <a class="navbar-brand text-dark p-0 text-center" href="<?php bloginfo('url') ?>">
                    <!-- <i class="far fa-bookmark p-2"></i> -->

                  <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.jpg" class="d-flex m-auto" alt="" height="42" width="42">
                  <span style="color: #073E66;">ЭМИЛИ ГРУПП</span>
                </a>

                <div class="collapse navbar-collapse" id="navbarNav">
                  <div class="nav-item">
                     <div class="">
                     <small>Пн. – Пт., с 8:00 до 17:00</small>
                     <p class="m-0">8 (800) 700-56-46</p>
                     </div>
                  </div>
                  <button type="button" class="btn btn-warning m-auto" data-toggle="modal" data-target="#exampleModal">Заказать звонок</button>
                  <ul class="navbar-nav align-items-lg-center pt-3 pt-lg-0 ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('/catalog', 'http');?>">Продукция</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('/about', 'http');?>">О компании</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('/news', 'http');?>">Новости</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo home_url('/contacts', 'http');?>">Контакты</a>
                        </li>
                    </ul>
                </div>
                            </div>
            </nav>

   </header>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ЗАКАЗАТЬ ЗВОНОК</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="Имя:">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="recipient-name" placeholder="Телефон">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm">Заказать</button>
      </div>
    </div>
  </div>
</div>
<div class="container">
      <!-- <div class="inner-panel rounded"> -->