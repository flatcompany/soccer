<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/media.css">
    <?php
                include_once('lib/parser-tbl.php');
                include_once('lib/function.php');
                include_once('lib/database.php');
                $club = get_match();
    ?>
    
    <title>Яблонец</title>
</head>
<body>

<div id="preloader">
  <div id="loader"></div>
</div>

    <!-- Навигация -->
            <?php
                include_once('page/nav.php')
            ?>
    <!-- Навигация -->

    <!-- Главный экран -->

    <div class="parallax-container">
        <div class="header-img parallax">
          <img src="img/bg.jpg" alt="">
        </div>
        <div class="layout">  
         <div class="preview fadeInUp">
            <div class="container">
                 <div class="row">

                     <div class="col xl7 l12 s12">
                        <div class="preview-bg">
                            <div class="preview-date">
                            </div>
                            <div class="preview-time">
                                <p>
                                    <time>
                                        <?php echo $date;?>
                                    </time>
                                </p>
                            </div>
                            <div class="preview-team">
                                <div class="team-left">
                                    <p class="lt-name">Яблонец</p>
                                </div>
                                <div class="team-right">
                                    <p class="rt-name"><?php echo $te; ?></p>
                                </div>
                            </div>
                            <div class="preview-location">
                                <div class="location-court">
                                    <p>Дворец спорта "Прибой"</p>
                                </div>
                                <div class="location-city">
                                    <p>г.Таганрог, ул.Большая Бульварная,13</p>
                                </div>
                            </div>
                        </div>
                    </div>

                        
                        <div class="col xl4 l12 s12">

                            <div class="wrapper-table">
                            <?php  
                                    echo $tbl;
                             ?>
                            </div>                        
                       </div>                          

                        
                        
                    </div>
                </div>
            </div>    

            
            

        </div>
      </div>

<!-- Главный экран -->


<!-- Прошедшие матчи -->


    <div class="section-game">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <ul>
                        <?php foreach($club as $clubs): ?>
                        <li class="game-wrapper">


                            <div class="past_date_time">
                                <div class="past-time"><?=$clubs['time_match']?></div>
                                <div class="past-date"><?=$clubs['date_match']?></div>
                            </div>

                            <div class="lt-img-team">
                                <div class="lt-past-img"><img src="<?=$clubs['img_1']?>" alt=""></div>
                                <div class="lt-past-team"><h5><?=$clubs['team_1']?></h5></div>
                            </div>

                            
                            <div class="past-score">
                                <div class="lt-past-score"><strong><?=$clubs['score_1']?></strong></div>
                                <div class="delimeter"><strong>:</strong></div>
                                <div class="rt-past-score"><strong><?=$clubs['score_2']?></strong></div>
                            </div>
                           
                            
                            <div class="rt-img-team">
                                <div class="rt-past-team"><h5><?=$clubs['team_2']?></h5></div>
                                <div class="rt-past-img"><img src="<?=$clubs['img_2']?>" alt=""></div>
                            </div>




                            <!-- <div class="past_date_time">
                                <div class="past-time"><?=$clubs['time_match']?></div>
                                <div class="past-date"><?=$clubs['date_match']?></div>
                            </div>

                            <div class="lt-img-team">
                                <div class="lt-one">
                                    <div class="lt-past-img"><img src="<?=$clubs['img_1']?>" alt=""></div>
                                    <div class="lt-past-team"><h5><?=$clubs['team_1']?></h5></div>
                                </div>
                                
                                <div class="lt-two">
                                    <div class="lt-past-img"><img src="<?=$clubs['img_2']?>" alt=""></div>                                    
                                    <div class="lt-past-team"><h5><?=$clubs['team_2']?></h5></div>
                                </div>
                                                                
                            </div>

                            
                            <div class="past-score">
                                <div class="lt-past-score"><strong><?=$clubs['score_1']?></strong></div>
                                <div class="delimeter"><strong>:</strong></div>
                                <div class="rt-past-score"><strong><?=$clubs['score_2']?></strong></div>
                            </div> -->
                           
                            
                            <!-- <div class="rt-img-team">
                                <div class="rt-past-team"><h5><?=$clubs['team_2']?></h5></div>
                                <div class="rt-past-img"><img src="<?=$clubs['img_2']?>" alt=""></div>
                            </div> -->
                            
                                                        
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<!-- Прошедшие матчи -->

    



    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>