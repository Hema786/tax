/**
* Template Name: Vesperr - v2.2.0
* Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
!(function($) {
  "use strict";

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 15;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Navigation active state on scroll
  var nav_sections = $('section');
  var main_nav = $('.nav-menu, #mobile-nav');

  $(window).on('scroll', function() {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function() {
      var top = $(this).offset().top,
        bottom = top + $(this).outerHeight();

      if (cur_pos >= top && cur_pos <= bottom) {
        if (cur_pos <= bottom) {
          main_nav.find('li').removeClass('active');
        }
        main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
      }
      if (cur_pos < 300) {
        $(".nav-menu ul:first li:first").addClass('active');
      }
    });
  });

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // jQuery counterUp
  $('[data-toggle="counter-up"]').counterUp({
    delay: 10,
    time: 1000
  });

  // Testimonials carousel (uses the Owl Carousel library)
  $(".testimonials-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      900: {
        items: 3
      }
    }
  });

  // Porfolio isotope and filter
  $(window).on('load', function() {
    var portfolioIsotope = $('.portfolio-container').isotope({
      itemSelector: '.portfolio-item',
      layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function() {
      $("#portfolio-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      portfolioIsotope.isotope({
        filter: $(this).data('filter')
      });
      aos_init();
    });

    // Initiate venobox (lightbox feature used in portofilo)
    $(document).ready(function() {
      $('.venobox').venobox();
    });
  });

  // Portfolio details carousel
  $(".portfolio-details-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    items: 1
  });

  // Init AOS
  function aos_init() {
    AOS.init({
      duration: 1000,
      easing: "ease-in-out",
      once: true,
      mirror: false
    });
  }
  $(window).on('load', function() {
    aos_init();
  });

})(jQuery);

//quizCalc
function calc_result(){
    var correct_count = 0;
    $('input:radio').each(function() {
        if($(this).is(':checked')) {
            if ($(this).attr("data-correct") == "true") {
                $(this).parent('div').addClass('green');
                correct_count++;
            } else {
                $(this).parent('div').addClass('red');
            }
        } else {
            if ($(this).attr("data-correct") == "true") {
                $(this).parent('div').addClass('green');
            }
        }
    });
    $("#correct_count").html(correct_count);
    $("#quiz_result").show();
    $('html, body').animate({
        scrollTop: $("#scrollhere").offset().top
    }, 2000);
}

//Emi Calc
    function calculateEMI(){
        var loanAmount = jQuery("#la_value").html();
        var numberOfMonths = jQuery("#nm_value").html();
        var rateOfInterest = jQuery("#roi_value").html();
        var monthlyInterestRatio = (rateOfInterest/100)/12;
        var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
        var bottom = top -1;
        var sp = top / bottom;
        var emi = ((loanAmount * monthlyInterestRatio) * sp);
        var full = numberOfMonths * emi;
        var interest = full - loanAmount;
        var int_pge =  (interest / full) * 100;
        jQuery("#tbl_int_pge").html(int_pge.toFixed(2)+" %");
        //$("#tbl_loan_pge").html((100-int_pge.toFixed(2))+" %");
        
        var emi_str = emi.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var loanAmount_str = loanAmount.toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var full_str = full.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        var int_str = interest.toFixed(2).toString().replace(/,/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        
        jQuery("#emi").html(emi_str);
        jQuery("#tbl_emi").html(emi_str);
        jQuery("#tbl_la").html(loanAmount_str);
        jQuery("#tbl_nm").html(numberOfMonths);
        jQuery("#tbl_roi").html(rateOfInterest);
        jQuery("#tbl_full").html(full_str);
        jQuery("#tbl_int").html(int_str);
        var detailDesc = "<thead><tr class='success'><th>Payment No.</th><th>Begining Balance</th><th>EMI</th><th>Principal</th><th>Interest</th><th>Ending Balance</th></thead><tbody>";
        var bb=parseInt(loanAmount);
        var int_dd =0;var pre_dd=0;var end_dd=0;
        for (var j=1;j<=numberOfMonths;j++){
        int_dd = bb * ((rateOfInterest/100)/12);
        pre_dd = emi.toFixed(2) - int_dd.toFixed(2);
        end_dd = bb - pre_dd.toFixed(2);
        detailDesc += "<tr><td>"+j+"</td><td>"+bb.toFixed(2)+"</td><td>"+emi.toFixed(2)+"</td><td>"+pre_dd.toFixed(2)+"</td><td>"+int_dd.toFixed(2)+"</td><td>"+end_dd.toFixed(2)+"</td></tr>";
        bb = bb - pre_dd.toFixed(2);
        }
        detailDesc += "</tbody>";
        jQuery("#illustrate").html(detailDesc);
        var chart = new Highcharts.Chart({
          chart: {
              plotBackgroundColor: null,
              plotBorderWidth: null,
              plotShadow: false,
              renderTo: 'container'
          },
          title: {
              text: 'EMI Calculator'
          },
          tooltip: {
              //pointFormat: '{series.name}: <b>{point.value}%</b>'
          },
          plotOptions: {
              pie: {
                  allowPointSelect: true,
                  cursor: 'pointer',
                  dataLabels: {
                  //	enabled: true,
                      color: '#000000',
                      connectorColor: '#000000',
                      format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                  }
              }
          },
          series: [{
              type: 'pie',
              name: 'Amount',
              data: [
                  ['Loan',   eval(loanAmount)],
                  ['Interest',       eval(interest.toFixed(2))]
              ]
          }]
        });	
    }

    jQuery("#la").bind(
        "slider:changed", function (event, data) {				
            jQuery("#la_value").html(data.value.toFixed(0)); 
            jQuery("#la_iden").val(data.value.toFixed(0))
            calculateEMI();
        }
    );

    jQuery("#nm").bind(
        "slider:changed", function (event, data) {				
            jQuery("#nm_value").html(data.value.toFixed(0));
            jQuery("#nm_iden").val(data.value.toFixed(0))
            calculateEMI();
        }
    );
      
    jQuery("#roi").bind(
        "slider:changed", function (event, data) {				
            jQuery("#roi_value").html(data.value.toFixed(2));
            jQuery("#roi_iden").val(data.value.toFixed(2))
            calculateEMI();
        }
    );
    
    jQuery("#la_iden").change(function(){
        var la_iden_value = jQuery(this).val();
        jQuery("#la").simpleSlider("setValue", la_iden_value);
        jQuery("#la_value").html(la_iden_value.toFixed(0));
        calculateEMI();
    });
    
    jQuery("#nm_iden").change(function(){
        var la_iden_value = jQuery(this).val();
        jQuery("#nm").simpleSlider("setValue", la_iden_value);
        jQuery("#nm_value").html(la_iden_value.toFixed(0));
        calculateEMI();
    });
    
    jQuery("#roi_iden").change(function(){
        var la_iden_value = jQuery(this).val();
        jQuery("#roi").simpleSlider("setValue", la_iden_value);
        jQuery("#roi_value").html(la_iden_value.toFixed(0));
        calculateEMI();
    });
    
    jQuery(document).ready(function(){
        calculateEMI();
    });