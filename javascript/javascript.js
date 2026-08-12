//  --------------------------------------------FAQ--------------------------------------------------
 const accordian = document.querySelectorAll(".accordian");
        accordian.forEach(accordian => {
            const icon = accordian.querySelector(".icon");
            const answer = accordian.querySelector(".answer");
            accordian.addEventListener('click', () => {
                if (icon.classList.contains('active')) {
                    icon.classList.remove('active');
                    answer.style.maxHeight = null;
                } else {
                    icon.classList.add('active');
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                }
            });
        });
 //--------------------------------------------- Slick JS---------------------------------------------- 
  $(document).ready(function(){
    $(".testimonial_slider").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: true,
      autoplay: true,
      autoplaySpeed: 3000,
      infinite: true,
      speed: 600,
      adaptiveHeight: true,
    });
  });
        // -------------------------------------Form Validation--------------------------------------------
$(document).ready(function() {

  $.validator.addMethod("fileType", function(value, element, param) {
    if (value === "") return true;
    var ext = value.split('.').pop().toLowerCase();
    return $.inArray(ext, param) !== -1;
  }, "Only PDF, DOC, or DOCX files are allowed.");

  $("#membershipForm").validate({
    rules: {
      member_name: { required: true, minlength: 3 },
      email: { required: true, email: true },
      year_program: { required: true, minlength: 3 },
      skills: { required: true, minlength: 5 },
      resume: { fileType: ["pdf","doc","docx"] },
      agree: { required: true }
    },
    messages: {
      member_name: "Please enter your full name (at least 3 characters)",
      email: "Enter a valid email address",
      year_program: "Enter your year and program",
      skills: "Enter at least one skill or interest",
      agree: "Please agree to the code of conduct"
    },
    errorElement: "div",
    errorClass: "ui-state-error-text",
    highlight: function(element) {
      $(element).addClass("ui-state-error");
    },
    unhighlight: function(element) {
      $(element).removeClass("ui-state-error");
    }
    // highlight: function(element) { $(element).addClass("ui-state-error"); },
    // unhighlight: function(element) { $(element).removeClass("ui-state-error"); },
    // submitHandler: function(form) {
    //   $("#dialog-success").dialog({
    //     modal: true,
    //     buttons: {
    //       OK: function() {
    //         $(this).dialog("close");
    //         form.reset();
    //       }
    //     }
    //   });
    // }
  });

});
