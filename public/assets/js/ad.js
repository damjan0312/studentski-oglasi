$(document).ready(function() {


    $(window).scroll(function() {

        var height = $('.navbar').height();
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= height - 40) {
            $('.navbar').addClass('solid-nav');
        } else {
            $('.navbar').removeClass('solid-nav');
        }

    });


    $("#btn_next").click(() => {

      if($("#step1").hasClass("active"))
      {
        $("#step1").removeClass("active");
        
          panel_hideShow("#basic-info", "#photo-part");
       
        
        $("#step2").addClass("active");
        $("#btn_previous").show();
      }
      else
        if($("#step2").hasClass("active")){

          $("#step2").removeClass("active");
          $("#step3").addClass("active");

          $("#btn_next").hide("show");
          $("#submit").show();

          panel_hideShow("#photo-part", "#final-part");


          $("#btn_previous").show();
        }

    })

    $("#btn_previous").click(function(){

      
      if($("#step2").hasClass("active")){

        panel_hideShow("#photo-part", "#basic-info");

        $("#step2").removeClass("active");
        $("#step1").addClass("active");

        $("#btn_previous").hide();

      }
      else if($("#step3").hasClass("active")){

        $("#step2").addClass("active");
        $("#step3").removeClass("active");

        $("#btn_next").show("slow");
          $("#submit").hide("slow");

          panel_hideShow("#final-part", "#photo-part");
       
      }


    })


    function panel_hideShow(toHide, toShow)
    {
      $(toHide).hide("slow");
      $(toShow).show("slow");


    }



    });
    
      
     