$(document).ready(function () {
    
  //-------- Modal------------//
  $(".modal-btn").click(function () {
    $(".modal").css("transform", "scale(1)");
    $(".modal").css("transition", "0.2s");
  });

  $(".close-btn").click(function () {
    $(".modal").css("transform", "translateY(-200%)");
    $(".modal").css("transition", "0.8s");
  });  
  
  // Formulaire creation utilisaeur 
  $('.filiere_id').hide();
  $("#type").change(function () {

    var type = $(this).val();
    if (type=="internaute") {
      $('.filiere_id').show();
    }else{
      $('.filiere_id').hide();
    }
  });

 

});

(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
 
        form.classList.add('was-validated')
      }, false)
    })
})()

 /*------------- Confirm alert ---------------*/
function confirmalert(id,value) {
  if (!confirm("Etes vous sûre de continuer ?")) {
    return false;
  }else{

    if (value!=="") {
      document.querySelector('.destroy-form-'+value+'-'+id).submit();
    }else{ 
      document.querySelector('.destroy-form-'+id).submit();
    }
  }
}


  /*------------- Logout form ---------------*/
  $(".logout-btn").click(function () {
    if (!confirm("Etes vous sûre de vouloir quitter ?")) {
      return false;
    }else{
      document.getElementById('logout-form-back').submit();
    }
  });
