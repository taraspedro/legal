$(function() {
    // search engine toggle
    $('.input-group').hide();
    $('#find').click(function() {
    $('.input-group').toggle();
    });   
     
    // checking archive news bar height
    var archive = function() {
      if($('.pre_header p').is(':hidden')){
          $('.archive').css('height','auto');
      }
        else{
            var serv_height2 = $('.actual').height();
            $('.archive').height(serv_height2);
        }
    };
    setTimeout(function(){
                archive();
                },1500);
    $(window).resize(archive);   
    
    // 'go-to-top' button
    var ravenous = function() {
        if (window.matchMedia('(max-width: 767px)').matches)
        {
            $('#pointer').css('left','1em');
        }
        else {
            $('#pointer').css('right','1em').css('left','auto');
        }
    };
    $(window).resize(ravenous);
    ravenous();

    // show or hide 'go-to-top' button
    $(window).scroll(function() {    
    if($(window).scrollTop() >= 100){
        $('#pointer').show();
        }
       else{
           $('#pointer').hide();
        }
    });
    
    // animate 'go-to-top' button
    $('#pointer').click(function() {
       $('html,body').animate({ scrollTop: 0 }, 500); 
    });
    
    // animate footer logo (li go-to-top)
    $('footer .navbar-brand').click(function() {
        $('html,body').animate({ scrollTop: 0 }, 500);
    });
    
        // making anchors and animation menu bar
        jQuery(document).ready(function ($) {    
            var homeHeight, servHeight, newsHeight, aboutHeight, contactHeight;
            function getHeight() {
                homeHeight = 0;
                servHeight = $('.title').offset().top;
                newsHeight = $('#news_offset').offset().top;
                aboutHeight = $('#about_offset').offset().top;
                contactHeight = $('#contact_offset').offset().top;
            };
            setTimeout(function(){
                getHeight();
                },1500);
            $(window).resize(setTimeout(function(){
                getHeight();
                },1500));
            $('.navbar-header button').click(function() {
                setTimeout(function(){
                getHeight();
                },1500);
            });            
            
            $('.nav_home').click(function() {
                $('html,body').animate({scrollTop:homeHeight},500);
            });
            $('.nav_service').click(function() {
                $('html,body').animate({scrollTop:servHeight},500);            
            });
            $('.nav_discusion').click(function() {
                $('html,body').animate({scrollTop:newsHeight},500);
            });
            $('.nav_about').click(function() {
                $('html,body').animate({scrollTop:aboutHeight},500);
            });
            $('.nav_contact').click(function() {
                $('html,body').animate({scrollTop:contactHeight},500);
            });
    });
    
    // 

    
    // making comment adding possible
    $('.modal-footer button:last').click(function() {
        $('.modal-footer .contact-form').slideToggle('fast');
    });
    $('.contact-form').clone().insertAfter('.modal-footer button:last').hide();
    $('.confirmation').clone().insertAfter('.modal-footer .contact-form');     
    $('#myModal .modal-footer .form-group:nth-child(3)').append('<input type=text name="modal_info" id="modal_info" class="hidden">');
    $('*[data-item]').click(function() {
       var name_val = $(this).data('item');
       $('#modal_info').attr('value',name_val);
    });
    
    $('button[data-dismiss]').click(function() {
       $('.modal-footer .contact-form').trigger("reset");
        $('.modal-footer .contact-form').hide(); 
    });
    
    // mail sender
    $('.contact .contact-form').submit(function() {
        var form_data = $(this).serialize();
        $.post('/www/bin/contact.php',form_data);
    });
    
    // comments adder
    $('.modal-footer .contact-form').submit(function() {
        var com_data = $(this).serialize();
        $.post('/www/bin/comment.php',com_data);
        });
    
    // forms validator
        // for Ukrainian
    var validator_uk = $(".contact-form[data-lang='uk']").bootstrapValidator({
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove", 
				validating: "glyphicon glyphicon-refresh"
			}, 
			fields : {
				name :{
					message : "Будь ласка, введіть Ваше ім'я",
					validators : {
						notEmpty : {
							message : "Будь ласка, введіть Ваше ім'я"
						}
					}
				}, 
				email : {
					validators: {
						notEmpty : {
							message : "Посилання на поштову скриньку є обов'язковим"
						}
					}
				}, 
				message : {
					validators: {
						notEmpty : {
							message: "Введіть повідомлення сюди"
						}
					}
				}
			}
		});
	
		validator_uk.on("success.form.bv", function (e) {
			e.preventDefault();
			$(".contact-form[data-lang='uk']").addClass("hidden");
			$(".confirmation").removeClass("hidden");
            setTimeout(function(){
                $(".contact-form[data-lang='uk']").trigger('reset');
                window.location.reload();
            }, 5000);
		});
        
        // for Polish
        var validator_pl = $(".contact-form[data-lang='pl']").bootstrapValidator({
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove", 
				validating: "glyphicon glyphicon-refresh"
			}, 
			fields : {
				name :{
					message : "Proszę dodać imię",
					validators : {
						notEmpty : {
							message : "Proszę dodać imię"
						}
					}
				}, 
				email : {
					validators: {
						notEmpty : {
							message : "Proszę dodać email"
						}
					}
				}, 
				message : {
					validators: {
						notEmpty : {
							message: "Proszę dodać text"
						}
					}
				}
			}
		});
	
		validator_pl.on("success.form.bv", function (e) {
			e.preventDefault();
			$(".contact-form[data-lang='pl']").addClass("hidden");
			$(".confirmation").removeClass("hidden");
            setTimeout(function(){
                $(".contact-form[data-lang='pl']").trigger('reset');
                window.location.reload();
            }, 5000);
		});
    
        // for English
    var validator_eng = $(".contact-form[data-lang='eng']").bootstrapValidator({
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove", 
				validating: "glyphicon glyphicon-refresh"
			}, 
			fields : {
				name :{
					message : "Please enter your name",
					validators : {
						notEmpty : {
							message : "Please enter your name"
						}
					}
				}, 
				email : {
					validators: {
						notEmpty : {
							message : "Email is required"
						}
					}
				}, 
				message : {
					validators: {
						notEmpty : {
							message: "Message field is required"
						}
					}
				}
			}
		});
	
		validator_eng.on("success.form.bv", function (e) {
			e.preventDefault();
			$(".contact-form").addClass("hidden");
			$(".confirmation").removeClass("hidden");
            setTimeout(function(){
                $(".contact-form").trigger('reset');
                window.location.reload();
            }, 5000);
		});
        // start tab collapse  plugin
        $('#myTab').tabCollapse();

    });

        