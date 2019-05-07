$(document).ready(function() {

    $('#main-content').show();

    $(window).scroll(function() {

        var height = $('.navbar').height();
        var scrollTop = $(window).scrollTop();

        if (scrollTop >= height - 40) {
            $('.navbar').addClass('solid-nav');
        } else {
            $('.navbar').removeClass('solid-nav');
        }

    });

    var myRadio;
    var userType;

    $("#btn_next").click(function(){

      if($("#step1").hasClass("active"))
      {
         myRadio = $("input[name=type]");
         userType = myRadio.filter(":checked").val();


        if(userType === undefined){
          alert("Izaberite tip korisnika.");
          return false;
        }

        $("#step1").removeClass("active");

        if(userType === "izdavac"){
          panel_hideShow("#personalInformation", "#moreInformationIzdavac");

        }
        else if(userType === "student")
          panel_hideShow("#personalInformation", "#moreInformationStudent");



        $("#step2").addClass("active");
        $("#btn_previous").show();


      }
      else
        if($("#step2").hasClass("active")){

          $("#step2").removeClass("active");
          $("#step3").addClass("active");

          $("#btn_next").hide("show");
          $("#submit").show();

          if(userType === "izdavac"){
            panel_hideShow("#moreInformationIzdavac", "#logininformation");

          }
          else if(userType === "student")
            panel_hideShow("#moreInformationStudent", "#logininformation");

          $("#btn_previous").show();
        }

    })

    $("#btn_previous").click(function(){


      if($("#step2").hasClass("active")){

        if(userType === "izdavac"){
          panel_hideShow("#moreInformationIzdavac", "#personalInformation");

        }
        else if(userType === "student")
          panel_hideShow("#moreInformationStudent", "#personalInformation");

        $("#step2").removeClass("active");
        $("#step1").addClass("active");

        $("#btn_previous").hide();

      }
      else if($("#step3").hasClass("active")){

        $("#step2").addClass("active");
        $("#step3").removeClass("active");

        $("#btn_next").show("slow");
          $("#submit").hide("slow");

        if(userType === "izdavac"){
          panel_hideShow("#logininformation", "#moreInformationIzdavac");

        }
        else if(userType === "student")
          panel_hideShow("#logininformation", "#moreInformationStudent");

      }


    })


    function panel_hideShow(toHide, toShow)
    {
      $(toHide).hide("slow");
      $(toShow).show("slow");


    }



    });
