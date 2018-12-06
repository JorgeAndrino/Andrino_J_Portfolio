var photoTh = $('.pics'),
    overlay = $('.overlay');

photoTh.on('click', function() {    
    var dataPhoto = $(this).attr('src'),
        dataTitle = $(this).data('title');
  
    overlay.show();
    
    $('.pictureBig').attr("src", dataPhoto);
    $('.photoTitle').text(dataTitle);
  }
);

overlay.on('click', function() {
  $(this).hide();
});








