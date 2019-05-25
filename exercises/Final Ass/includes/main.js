$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) 
  var recipient = button.data('whatever')
  $.get('virus.php?v_num='+recipient,function(data){
    console.log(data)
    modal.find('.modal-body').html(data) 
  })
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
 
})