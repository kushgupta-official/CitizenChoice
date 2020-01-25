var maxLength = 10;
$('textarea').keyup(function() {
  var length = $(this).val().length;
  var length = maxLength-length;

    if(length<0)
        {
            document.getElementById("length").style.color="red";
            $('#chars').text(length);
        }
     else
         {
            document.getElementById("length").style.color="Green";
            $('#chars').text(length); 
         }
});