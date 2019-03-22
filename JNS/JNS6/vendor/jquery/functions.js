$('.content-type').on('click',function() {
  $('.active').removeClass('active');
  $(this).addClass('active');
})

$('.optionlabel').on('click',function() {
  $(".optionlabel").removeClass('active');
  $(this).addClass('active');
})

$('.optionlabel1').on('click',function() {
  $(".optionlabel1").removeClass('active');
  $(this).addClass('active');
})

function calc() {
  var words = $('#words').val();
  var pages = $('#quantity').val();
  var turn = $("input[name='turnaround']:checked").val();
  var quality = $("input[name='quality']:checked").val();
  var type = $('#type_writting').val();
  var total = 0;
  if (words != '' && pages != '' && turn != '' && quality != '') {
    if(type == 1) {
      modifier = 2;
    } else if (type == 2) {
      modifier = 2;
    } else if (type == 3) {
      modifier = 3;
    } else if (type == 4) {
      modifier = 1.5;
    } else if (type == 5) {
      modifier = 2.5;
    } else if (type == 6) {
      modifier = 10;
    } else if (type == 7) {
      modifier = 8;
    } else if (type == 8) {
      modifier = 3.25;
    } else if (type == 9) {
      modifier = 3;
    } else if (type == 10) {
      modifier = 2;
    } else if (type == 11) {
      modifier = 1.5;
    } else if (type == 12) {
      modifier = 4;
    }
    total = modifier * (words/500) * pages * turn * quality;
    $('#total').val('$ '+total.toFixed(2));
  } else {
    $('#total').val(total);
  }
}
