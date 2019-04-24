$(document).ready(function () {
  var base_url= $('#baseurl').val();
  $('#schoolTable').DataTable({
    columnDefs: [{
      targets: 1,
      render: function (data, type, row) {
        return type === 'display' && data.length > 10 ?
          data.substr(0, 50) + '…' :
          data;
      }
    }]
  });
  $('.selectpicker').selectpicker();
  $('[data-toggle="tooltip"]').tooltip();

  var school = '';
  $.ajax({
    url: base_url+"search",
    dataType: "json",
    type: "GET",
    success: function (data) {
      school = data;
    }
  });
  setTimeout(function () {
    $('input#search_collage').typeahead({
      source: school,
      displayField: 'school_name',
      onSelect: function (item) {
        window.location.href = base_url+'/info-school/'+item.value;
      }
    });
  }, 2000);

});