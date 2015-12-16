$(function() {
	$('.access').on('click',function(e) {
    e.preventDefault();
    var login = $("input[name='login']").val();
    var  password = $("input[name='password']").val();
    if (login ==  'taraspedro' && password == 't1608p89'){
      $('#content').removeClass('hidden');
      $('#authorization').addClass('hidden');
    }
    else{
      alert('Get the hell out of here, you fucking idiot!');
    }
    $('#authorizationForm').trigger('reset');
  });
    $('button[data-type="load"]').click(function(e) {
      e.preventDefault();
      var count = 0;
      $(this).parent().find('.form-control').each(function() {
        if($(this).val() == ""){
          count++;
          }
        });
      if(count>0){
        alert('All fields are required!');
      }
      else{
          var updates = $(this).parent().serialize();
          console.log(updates);
          $.post('updata.php',updates);
          alert('Data uploaded successfully!');
          $(this).parent().trigger('reset');
      }          
      });
    });
