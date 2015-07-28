$(document).ready( function () {
    $('#links_table').DataTable({

      "columnDefs": [
    {
      "data": null,
      "defaultContent": "<button class='deleteButton'>Delete</button>",
      "targets": -1
    },
    {
   "targets": 1,
   "render": function ( data, type, full, meta ) {
     return '<a href="'+data+'" target="_blank">'+data+'</a>';
   }}
  ],
	 "processing": true,
        "serverSide": true,
        "ajax": "server_side/server_processing.php"
	});

var table = $('#links_table').DataTable();
var $csrf_token = $('meta[name="csrf-token"]').attr('content');


$('body').on('click', '.deleteButton', function() {

$id = $(this).parent().parent().find('td:first-child').text();

   // ajax call to the API
   $.ajax({
       url: 'deleteLink',
       type: 'DELETE',
       data : {id:$id, _token:$csrf_token},
       success: function(result) {
           alert("post deleted from db!");
           table.draw();
       }
   });

 });


  window.setTimeout(function(){
  $('.alert-success').hide("slow",function(){});
  },3000);


} );
