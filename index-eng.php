<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>LE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php
      $db = mysql_connect("localhost", "root", "");
      mysql_select_db("lenews", $db);
      $index_cont = mysql_fetch_array(mysql_query("SELECT * FROM contacts WHERE id='2' ", $db));
      $index_about = mysql_fetch_array(mysql_query("SELECT * FROM about WHERE id='2' ", $db));
    ?>
        <div class="container-fluid">
           <div class="row">
            <div class="pre_header">
                <span class="glyphicon glyphicon-earphone" data-toggle="tooltip" data-placement="bottom" title="(067)167-79-15, (093)672-98-66"></span><p class="hidden-xs"><?php echo $index_cont['phone'];?><!--(067)167-79-15, (093)672-98-66!--></p>
                <span class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="bottom" title="reglviv@ukr.net"></span><p class="hidden-xs"><?php echo $index_cont['email'];?><!--reglviv@ukr.net!--></p>
                <div class="btn-group">
                    <a href="index.php"><button type="button" class="btn btn-default">ua</button></a>                    
                    <a href="index-pl.php"><button type="button" class="btn btn-default">pl</button></a>
                    <a href="#"><button type="button" class="btn btn-default">eng</button></a>
                </div>
            </div>
            <header>
                <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                        <a class="navbar-brand" href="#"><p>LvivExpert</p><p class="text-center">business services</p></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="nav_home"><a href="#"><i class="fa fa-home"></i> <span class="sr-only">(current)</span></a></li>
                        <li class="nav_service"><a href="#">Services</a></li>
                        <li class="nav_discusion"><a href="#">Hot topics</a></li>
                        <li class="nav_about"><a href="#">About</a></li>
                        <li class="nav_contact"><a href="#">Contact</a></li>        
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                        <li id="find"><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </header>
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div><!-- /input-group -->
                    <div class="carousel hidden-xs">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                          </ol>

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="images/1.jpg" alt="...">
                              <div class="carousel-caption">                                
                              </div>
                            </div>
                            <div class="item">
                              <img src="images/2.jpg" alt="...">
                              <div class="carousel-caption">                              
                              </div>
                            </div>
                            <div class="item">
                              <img src="images/3.jpg" alt="...">
                              <div class="carousel-caption">                                
                              </div>
                            </div>
                          </div>

                          <!-- Controls -->
                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                    <div class="col-md-12">
                         <div class="title">
                          <h4><p class="text-center">OUR SERVICES</p></h4>
                         </div> 
                    </div>
                    </div>
                       <div class="row row-eq-height">
                          <div class="col-sm-5">
                               <div class="service" data-lang="eng">
                                  <ul id="myTab">                              
                                  </ul>
                               </div>
                         </div>
                         <div class="col-sm-7 hidden-xs">
                              <div class="text tab-content" id="myTabContent" data-lang="eng">
                              </div>
                         </div>
                        </div>
                      <div id="pointer"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></div>    

                <div class="row">
                    <div class="news_wrapper">
                        <div class="col-md-12">
                           <div class="title2" id="news_offset">
                               <h4><p class="text-center">HOT TOPICS</p></h4>
                           </div>
                       </div>
                       <div class="col-sm-8">
                           <div class="actual">
                              <h5><b><p class="text-center">Most actual</p></b></h5>                   
                           </div>                           
                       </div>
                       <div class="col-sm-4">
                           <div class="archive">
                               <h5><b><p class="text-center">News archive</p></b></h5>
                               <ul>                                  
                               </ul>
                           </div>
                       </div>
                       <!--Modal!-->
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modal-title">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title">Modal title</h4>
                                      </div>
                                      <div class="modal-body">
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрити</button>
                                        <button type="button" class="btn btn-primary">Додати коментар</button>                                    
                                      </div>
                                    </div>
                                  </div>
                                </div>
                    </div>
                  </div>
                  <div class="row">
                        <div class="col-lg-12">
                           <div class="title2" id="about_offset">
                               <h4><p class="text-center">ABOUT US</p></h4>
                           </div>
                        </div>
                       <div class="about">
                           <p>
                                <?php echo $index_about['about'];?> 
                           </p>
                       </div>                          
                      </div>
                      <div class="row">
                    <div class="col-lg-12">
                           <div class="title2" id="contact_offset">
                               <h4><p class="text-center">CONTACT</p></h4>
                           </div>
                    </div>
                    <div class="container-fluid">
                        <div class="contact">
                        <div class="col-sm-5">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5149.5545394281535!2d24.0527728!3d49.8090549!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x473ae805cd0a91b1%3A0x25037c1a01cfdc7f!2z0LLRg9C7LiDQndCw0LLRgNC-0YbRjNC60L7Qs9C-LCAxMCwg0JvRjNCy0ZbQsiwg0JvRjNCy0ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1suk!2sua!4v1445351820919" width="100%" height="280px" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <p class="text-center">
                              <?php echo $index_cont['address'];?>
                            </p>
                        </div>
                        <div class="col-sm-7">
                            <form class="contact-form" data-lang='eng'>
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                              </div>
                              <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                              </div>
                              <div class="form-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your message for us here" rows="3"></textarea>
                              </div>
                              <button type="submit" class="btn btn-primary" name="submit">Send</button>
                            </form>
                            <div class="alert alert-success confirmation hidden"><span class="glyphicon glyphicon-star"></span>Thank you for messaging! We will reply as fast as we can.</div>
                        </div>  
                    </div>
                    </div>
                    
                </div>
                   <div class="row">
                        <footer>
                            <div class="logo">
                                <a class="navbar-brand" href="#"><p>LvivExpert</p><p class="text-center">business services</p></a>
                            </div>
                            <div class="list hidden-xs">
                                <ul>
                                    <li class="nav_home"><a href="#"><i class="fa fa-home"></i> <span class="sr-only">(current)</span></a></li>
                                    <li class="nav_service"><a href="#">Services</a></li>
                                    <li class="nav_discusion"><a href="#">Hot topics</a></li>
                                    <li class="nav_about"><a href="#">About</a></li>
                                    <li class="nav_contact"><a href="#">Contact</a></li>
                                </ul>
                            </div>
                            <div class="rights hidden-xs">
                                <p>
                                    All rights reserved ©2015
                                </p>
                            </div>
                            <div class="links hidden-xs">
                                 <span class="glyphicon glyphicon-earphone" data-toggle="tooltip" data-placement="bottom" title="(067)167-79-15, (093)672-98-66"></span><p class="hidden-xs"><?php echo $index_cont['phone'];?>6</p>
                                 <br>
                                 <span class="glyphicon glyphicon-envelope" data-toggle="tooltip" data-placement="bottom" title="reglviv@ukr.net"></span><p class="hidden-xs"><?php echo $index_cont['email'];?></p>
                                 <br>
                                 <p>
                                     <a href="#">
                                         <i class="fa fa-twitter-square"></i>
                                     </a>
                                     <a href="#">
                                         <i class="fa fa-facebook-square"></i>
                                     </a>
                                     <a href="#">
                                         <i class="fa fa-skype"></i>
                                     </a>                                   

                                 </p>

                            </div>
                        </footer>
                   </div>
                    
                       
                
         </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>    
    <script src="js/bootstrapValidator.min.js"></script>
    <script src="js/bootstrap-tabcollapse.js"></script>   
    <script src="js/customs.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
  </script>
  </body>
</html>