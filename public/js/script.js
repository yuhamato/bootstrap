$(function(){
  $('#submit-btn').click(function(){
    var familyName = $('input[name="familyName"]').val();
    var firstName = $('input[name="firstName"]').val();
    var email = $('input[name="e-mail"]').val();
    var sex = $('input[name="sex"]:checked').attr('id');
    var age = $('[name="age"] option:selected').val();
    var note = $('textarea[name="note"]').val();

    console.log( familyName );
    console.log( firstName );
    console.log( email );
    console.log( sex );
    console.log( age );
    console.log( note );
  })

  $('#temp-btn').click(function(){
    $('input[name="familyName"]').val('gizumo');
    $('input[name="firstName"]').val('華子');
    $('input[name="e-mail"]').val('gizumo@gmail.com');
    $('#female').prop('checked',true);
    $('[name="age"] option[value="20~29"]').prop('selected',true);
    $('textarea[name="note"]').val('hondaに勤めている');
  })

  $('#disabled-btn').click(function(){
    var prop = $('#submit-btn').prop('disabled');
    if (prop) {
      $('input[name="familyName"]').prop('disabled', false);
      $('input[name="firstName"]').prop('disabled', false);
      $('input[name="e-mail"]').prop('disabled', false);
      $('input[name="sex"]').prop('disabled', false);
      $('[name="age"]').prop('disabled', false);
      $('textarea[name="note"]').prop('disabled', false);
      $('#submit-btn').prop('disabled', false);
      $('#clear-btn').prop('disabled', false);
      $('#temp-btn').prop('disabled', false);
      $('#disabled-btn').removeClass('btn-info');
      $('#disabled-btn').addClass('btn-danger');
      $('#disabled-btn').text('操作不能');
    } else {
      $('input[name="familyName"]').prop('disabled', true);
      $('input[name="firstName"]').prop('disabled', true);
      $('input[name="e-mail"]').prop('disabled', true);
      $('input[name="sex"]').prop('disabled', true);
      $('[name="age"]').prop('disabled', true);
      $('textarea[name="note"]').prop('disabled', true);
      $('#submit-btn').prop('disabled', true);
      $('#clear-btn').prop('disabled', true);
      $('#temp-btn').prop('disabled', true);
      $('#disabled-btn').removeClass('btn-danger');
      $('#disabled-btn').addClass('btn-info');
      $('#disabled-btn').text('解除');
    }
  })

  });