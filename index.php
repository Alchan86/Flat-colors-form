<!DOCTYPE html>
<html>
   <head>
      <title>Forma</title> 
      <meta http-equiv="content-type" content="text/html; charset=utf-8">
      <meta name="description" content="Testna forma za Frodx">
      <meta name="keywords" content="HTML, JS, CSS, PHP, MYSQL, LOCALHOST">
      <meta name="author" content="Alen O">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
      <script src="js/scripts.js"></script>
   </head>
   <body cz-shortcut-listen="true">
      <div class="left_red"></div>
      <div class="right_cian"></div>
      <div class="right_pattern" style="background:url('img/pattern.png');"></div>
      <div class="popup" id="popup">
         <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
               <div class="col-lg-10 p-5 content_box">
                  <div class="bottom_left_yellow"></div>
                  <div class="top_right_green"></div>
                  <div class="pattern_left" style="background:url('img/pattern.png');"></div>
                  <div class="pattern_right" style="background:url('img/pattern.png')"></div>
                  <div class="buttom-right_cian"></div>
                  <div class="container">
                     <div class="row p-5">
                        <div class="col-md-6 p-5">
                           <h1 class="intro_title font-weight-bold">Request<br>a Demo</h1>
                           <h3 class="sub_text">
                              Fill this form to get in front of an <span class="sub_text_bold">Expert.</span>
                           </h3>
                           <div class="have_question">
                              <span class="q_title text-uppercase py-3">Have a question?</span>
                              <span class="q_info">Try giving on a call at <span class="q_info_bold">880-903-4271</span> -
                              <span class="c_support"><a href="#">Contact Support</a></span></span>
                           </div>
                        </div>
                        <div class="col-md-6 col-md-6 p-5">
                           <form action="insert.php" id="restaurant_form" method="post" role="form" class="form_class">
                              <div id="user_div" class="form-group">
                                 <label for="user" class="text-uppercase label_class">Name</label>
                                 <input id="user" type="text" name="username" value="" class="form-control  form_input effect" required="required">
                                 <span class="focus-border"></span>
                                 
                              </div>
                              <div class="form-group">
                                 <label for="email " class="text-uppercase label_class">Email</label>
                                 <input id="email" type="email" name="email" value="" class="form-control  form_input effect mail_class" required="required">
                                 <span class="focus-border"></span>
                                 
                            
                              </div>
                              <div class="form-group">
                                 <label for="phone" class="text-uppercase label_class">Phone</label>
                                 <input id="phone" type="phone" name="phone" class="form-control form_input effect phone_class" required="required">
                                 <span class="focus-border"></span>
                                 
                              </div>
                              <div class="form-group">
                                 <label for="restaurant_name" class="text-uppercase label_class">Restaurant name</label>
                                 <input id="restaurant_name" type="text" name="restaurant_name" class="form-control form_input effect restaurant_class" required="required">
                                 <span class="focus-border"></span>
                                 
                              </div>
                              <div class="form-group">
                                 <label for="restaurant_zip" class="text-uppercase label_class">Restaurant zip code</label>
                                 <input id="restaurant_zip" type="text" name="restaurant_zip" pattern="[0-9]{4}" class="form-control form_input effect zip_class" required="required">
                                 <span class="focus-border"></span>
                              
                              </div>
                              <span class="required_text">All fileds are required</span>
                              <div class="form-group button_text">
                                 <button type="submit" name="submit-btn" value="submit" id="submit" disabled="disabled" class="btn btn-primary btn_submit">Submit</button>
                                 <span class="legal_terms_text">By tapping submit concede to our  Legal Terms</span>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   


   


</body></html>