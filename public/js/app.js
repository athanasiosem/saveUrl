$(document).ready( function () {

var table = $('#links_table').DataTable({
      "dom": 'T<"clear">lfrtip',
        "tableTools": {
            "sSwfPath": "swf/copy_csv_xls_pdf.swf"
        },
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
        "scrollX": true,
        "oLanguage": {
         "sInfoFiltered": "",
       }
	});

var $csrf_token = $('meta[name="csrf-token"]').attr('content');

$('#links_table tbody').on('click','button.deleteButton', function() {

$id = $(this).parent().parent().find('td:first-child').text();

if(confirm("Are you sure you want to delete this?")){
  var thisVariable = $(this);
  /*table.row($(this).parents('tr')).remove().draw();*/

   // ajax call to the API
   $.ajax({
       url: 'deleteLink',
       type: 'DELETE',
       data : {id:$id, _token:$csrf_token}

   }).done(function(result) {
       table.row(thisVariable.parents('tr')).remove().draw();
       toastr.success("post deleted from db!");

   }).fail(function(jqXHR, textStatus, errorThrown) {
     toastr.error("Request failed. Textstatus: "+textStatus);
   });
}
});

  window.setTimeout(function(){
  $('.alert-success').hide("slow",function(){});
  },3000);

} );
