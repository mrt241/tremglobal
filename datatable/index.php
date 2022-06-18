<?php require_once 'sistem/config.php';
      
?>

<!DOCTYPE html>
<html lang="en">
<head>

<title>Datatable Form Php - Ajax</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.17/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



</head>
<body>
<br>
<div class="container">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Customer insert
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <h2 align="center">Ajax Form İnsert Datatable</h2>
      <form id="ajaxForms" style="padding: 15px;" action="javascript:void(0)" method="post">
          <div class="form-group">
          <label for="fullname">Fullname:</label>
          <input type="fullname"  class="form-control" id="fname" placeholder="Enter Fullname" name="fname">
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input class="email-form__input form-control" id="contact_email" type="email" placeholder="email@example.com" name="email">
          
        </div>

        <div class="form-group">
          <label for="pnumber">Phone Number:</label>
          <input id="telefon" name="telefon" type="tel" class="form-control" value="+90" name="pnumber">

        </div>

        <div class="form-group">
          <label for="pnumber">Address:</label>
          <input type="textarea"  class="form-control" id="address" placeholder="Enter Address" name="address">
        </div>
      
        <button type="submit" id="submitAddForm" class="btn btn-primary">İnsert</button>
      </form>
    </div>
  </div>
</div>
</div>



  <div class="container">
 
</div><br><br>

<div class="container">
  <table id="tablom" style="width:100%">
        <thead>
            <tr>
                <th>Fullname</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>State</th>
            </tr>
        </thead>
        
    </table>
</div>


 
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.17/js/intlTelInput.min.js" integrity="sha512-1NlRc/n6l/Gl7K7u9g6Z9kxZsKqcJV5uWM/Tv/WCjxDBqUSlxlgHgQI4Z17RW7BdNJjgLj0l6x0kGd0DOvu4AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
var input = document.querySelector("#telefon");
window.intlTelInput(input,({
  initialCountry: "tr"
}));

$(document).ready(function() {
  $('.iti__flag-container').click(function() { 
    var countryCode = $('.iti__selected-flag').attr('title');
    var countryCode = countryCode.replace(/[^0-9]/g,'');

    $('#telefon').val("");
    $('#telefon').val("+"+countryCode+" "+ $('#telefon').val());
    


  });
});
</script>

<script>
$(document).ready(function () {
        
        $('#tablom').DataTable({
        'ajax': 'api.php?islem=get',
        'columns': [
            { "data": "fullname"},
            { "data": "email" },
            { "data": "phone" },
            { "data": "address" },
            { "data": "state" },
        ],
    });
});
</script>

<script type="text/javascript">
     $(document).ready(function(){
      $("#submitAddForm").click(function(e){
      e.preventDefault();

      var scode =  $('.iti__active').attr("data-dial-code");
      var fname   = $("#fname").val();
      var email   = $("#contact_email").val();
      var pnumber = $("#telefon").val();
      var address = $("#address").val();


      

      if (fname != "" && email != "" && pnumber != "" && address != "") {


        $.ajax({
        url    : "insert_process.php",
        type   : "post",
        data   : {fname:fname,email:email,pnumber:pnumber,address:address},
        success : function(data){
       
       if(data == 1){
        alert("işlem başarılı");
        $('#tablom').DataTable().ajax.reload();
        $("#fname").val("");
        $("#contact_email").val("");
        $("#telefon").val("");
        $("#address").val("");
      
        $("#exampleModal").modal("hide");
        

       }

         if(data == 2){
        alert("başarısız ekleme işlemii");
         }

         if (data == 3) {
          alert("bu mail daha önceden kaydedilmiş ya da mail formatınızı kontrol edin");
         }

         if(data == 4){
          alert("telefon numaranızı kontrol ediniz");
         }

        }

      });

      }


      else{
        alert("Verilerinizi Lütfen Doldurunuz");
      }
       

      });
    });

</script>


<script>
  $('#contact_email').on('input', function() {
  var input=$(this);
  var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  var is_email=re.test(input.val());
  if(is_email){input.removeClass("invalid").addClass("valid");}
});
</script>
</body>
</html>
