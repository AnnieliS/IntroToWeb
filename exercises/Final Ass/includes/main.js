$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever')
  $.get('test.php?reg_un='+recipient,function(data){
    modal.find('.modal-body').html(data) 
  })
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
 
})