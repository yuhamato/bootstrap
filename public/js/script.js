$(function(){

  $('#submit-btn').click(function() {
    var formData = $('form').serializeArray();
    $.each(formData,function(index,val){
      console.log(val.value);
    })
  });

  $('#temp-btn').click(function(){
    $('input[name="familyName"]').val('gizumo');
    $('input[name="firstName"]').val('華子');
    $('input[name="e-mail"]').val('gizumo@gmail.com');
    $('#female').prop('checked',true);
    $('[name="age"]').val('20~29');
    $('textarea[name="note"]').val('hondaに勤めている');
  });

  $('#disabled-btn').click(function(){
    if ($('#submit-btn').prop('disabled')) {
      $('input, select, textarea, button').not(this).prop('disabled', false);
      $(this).toggleClass('btn-danger btn-info');
      $(this).text('操作不能');
    } else {
      $('input, select, textarea, button').not(this).prop('disabled', true);
      $(this).toggleClass('btn-danger btn-info');
      $(this).text('解除');
    }
  });

  });