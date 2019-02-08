<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <link rel="stylesheet" href="./css/icon-font.css">
        <link rel="stylesheet" href="./css/about-style.css">
      
    <style>
    body{
        padding: 0rem;
    }


        /*MAIN NAVIGATION*/

        .main-nav{

list-style: none;
margin-top:0px;
margin-left: -10px;
padding: 17px;
z-index: 9999;
background:#9ec9ac;
}

.main-nav li{ /*site li elemnti vo main-nav*/
display: block;/*za da bidat edno do drugo*/
/* margin-left: 40px;*/
margin-bottom: 20px;
}
.main-nav li a:link,
.main-nav li a:visited{
padding: 8px 0;
text-decoration: none;
text-transform: uppercase;
color:white;
font-size: 140%;
border-bottom: 2px solid transparent;
-webkit-transition: border-bottom 0.3s;
transition: border-bottom 0.3s;
}
.main-nav li a:hover,
.main-nav li a:active{
border-bottom: 2px solid #fff;
}


    </style>
    
  
</head>
<body>

  

    <section class="section-book">
        
        <div class="alert alert-success" style="margin:6px 20%;" role="alert">
            <strong style="font-size:10pt;">Вашата порака е успешно испратена !! </strong>
    </div>
       
            <div style="text-align:center;margin-bottom:25px;margin-top:-80px; ">
                    <h2 class="heading-secondary" style="color:white;padding-bottom: 10px;">
                           Информации за контакт
                    </h2>
              </div>

        <div class="row" style="max-width:140rem;">
                
            <div class="col-md-2" style="margin-right: 0rem;">
                        <ul class="main-nav js--main-nav" >
                                <li><a href="index.html">Дома</a></li>
                                <li><a href="zanas.html">За нас</a></li>
                                <li><a href="ekokukji.html">Eко куќи</a></li>
                                <li><a href="brvnari.html">Брвнари</a></li>
                                <li><a href="nastresnici.html">Настрешници</a></li>
                                <li><a href="hot-hot-city.html">HOT-HOT CITY</a></li>
                                <li><a href="kontakt.html">Контакт</a></li>

                            </ul>
                </div>
          <div class="col-md-10" style="margin-left:0px;">
            <div class="book"style="margin-left:-18px;">
                <div class="book__form">
                    <form method="post" name="sentMessage" id="contactForm" action="contactengine.php" class="form">

                            <div style="marging-bottom:20px;">
                                    <h2 class="heading-secondary">
                                            Постави прашање
                                    </h2>
                              </div>

                        <div class="form__group">
                            <input type="text" name="Name" class="form__input" placeholder="Име и презиме" id="Name" required>
                            <label for="name" class="form__label">Вашето име</label>
                        </div>

                        <div class="form__group">
                            <input type="email" name="Email" class="form__input" placeholder="Вашата емаил адреса" id="Email" required>
                            <label for="email" class="form__label">Емаил</label>
                        </div>
                        <div class="form__group">
                            <textarea name="Message" class="form__input" placeholder="Вашата порака" id="Message"></textarea>
                            
                        </div>
                        
                       

                        <div class="form-group">
                            <button type="submit" name="submit" id="submit" class="btn btn--green">Испрати &rarr;</button>
                        </div>
                       

                    </form>
                </div>
            </div>
        </div>

    

        </div>

</section>
<section class="section-features">

       
        <div class="row">
            <div class="col-1-of-4">
                <div class="feature-box">
                   <i class="feature-box__icon icon-basic-world"></i>
                   <h3 class="heading-tertiary u-margin-bottom-2">АДРЕСА</h3>
                   <p class="feature-box__text">Момин Поток</p>
                   <p class="feature-box__text">1000 Скопје</p>
                </div>
            </div>

            <div class="col-1-of-4">
                    <div class="feature-box">
                       <i class="feature-box__icon icon-basic-smartphone"></i>
                       <h3 class="heading-tertiary u-margin-bottom-2">ТЕЛЕФОН</h3>
                       <p class="feature-box__text">+389 2 30 97 141
                            </p>
                            <p class="feature-box__text">+389 2 30 97 141
                                   </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                        <div class="feature-box">
                           <i class="feature-box__icon icon-basic-mail"></i>
                           <h3 class="heading-tertiary u-margin-bottom-2">Е-маил</h3>
                           <p class="feature-box__text">hot.hot_mk@yahoo.com</p>
                           <p class="feature-box__text">marketing@hot-hot.com.mk</p>
                        </div>
                    </div>

                    <div class="col-1-of-4">
                            <div class="feature-box">
                               <i class="feature-box__icon icon-basic-clock"></i>
                               <h3 class="heading-tertiary u-margin-bottom-2">РАБОТНО ВРЕМЕ</h3>
                               <p class="feature-box__text">од понделник до сабота
                                    </p>
                                    <p class="feature-box__text">
                                            од 7:00 до 16:00 часот</p>
                            </div>
                        </div>

        </div>

    <div class="row">
                <img src="./images/mapa-hot-hot.png" class="img img-responsive"style="z-index:999;width:100%;height:400px;border:2px solid grey">
 
            </div>

    </section>


        



</body>
</html>