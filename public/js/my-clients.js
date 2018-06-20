//== Class definition

var DatatableColumnRenderingDemo = function () {
  //== Private functions

  // basic demo
  var demo = function() {

    var datatable = $('#my_clients').mDatatable({
      // datasource definition
      data: {
        type: 'remote',
        source: {
          read: {
            url: 'data/my-clients.php',
          }
        },
        pageSize: 5, // display 20 records per page
        saveState: {
          cookie: true,
          webstorage: true
        }, // save datatable state(pagination, filtering, sorting, etc) in cookie or browser webstorage
        serverPaging: true,
        serverFiltering: true,
        serverSorting: true
      },

      // layout definition
      layout: {
        theme: 'default', // datatable theme
        class: '', // custom wrapper class
        scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
        height: 600, // datatable's body's fixed height
        footer: false // display/hide footer
      },

      // column sorting
      sortable: true,

      pagination: false,

      search: {
        input: $('#liveBriefsSearch')
      },


      // columns definition
      columns: [ {
          field: 'Actions',
          width: 110,
          title: 'Actions',
          sortable: false,
          overflow: 'visible',
          template: function(data) {
            var dropup = (data.getDatatable().getPageSize() -
                data.getIndex()) <=
            4 ? 'dropup' : '';
            return '\
						<a href="/briefmatch/dash/agency/messages.php" class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill" title="Message">\
							<i class="la la-comments"></i>\
						</a>\
					';
          }
        },
         {
          field: 'Company',
          title: 'Client',
          width: 200,
			template: function(data) {
            var number = mUtil.getRandomInt(1, 14);
            var user_img = '100_' + number + '.jpg';

            if (number > 8) {
              output = '<div class="m-card-user m-card-user--sm">\
								<div class="m-card-user__pic">\
									<img src="assets/app/media/img/users/' + user_img + '" class="m--img-rounded m--marginless" alt="photo">\
								</div>\
								<div class="m-card-user__details">\
									<span class="m-card-user__name">' + data.Company + '</span>\
								</div>\
							</div>';
            } else {
              var stateNo = mUtil.getRandomInt(0, 7);
              var states = [
                'success',
                'brand',
                'danger',
                'accent',
                'warning',
                'metal',
                'primary',
                'info'];
              var state = states[stateNo];

              output = '<div class="m-card-user m-card-user--sm">\
								<div class="m-card-user__pic">\
									<div class="m-card-user__no-photo m--bg-fill-' + state +
                  '"><span>' + data.Company.substring(0, 1) + '</span></div>\
								</div>\
<div class="m-card-user__details">\
									<span class="m-card-user__name">' + data.Company + '</span>\
								</div>\
							</div>';
            }

            return output;
          }
        }, {
          field: 'Contact',
          title: 'Contact',
          width: 150
        },{
          field: 'Email',
          title: 'Email',
          width: 150,
          template: function(data) {
            return '<a class="m-link" href="mailto:' + data.Email +
                '">' +
                data.Email + '</a>';
          },
        }, {
          field: 'Phone',
          title: 'Phone'
        }],
    });

    var query = datatable.getDataSourceQuery();

    $('#m_form_status').on('change', function() {
      // shortcode to datatable.getDataSourceParam('query');
      var query = datatable.getDataSourceQuery();
      query.Status = $(this).val().toLowerCase();
      // shortcode to datatable.setDataSourceParam('query', query);
      datatable.setDataSourceQuery(query);
      datatable.load();
    }).val(typeof query.Status !== 'undefined' ? query.Status : '');

    $('#m_form_type').on('change', function() {
      // shortcode to datatable.getDataSourceParam('query');
      var query = datatable.getDataSourceQuery();
      query.Type = $(this).val().toLowerCase();
      // shortcode to datatable.setDataSourceParam('query', query);
      datatable.setDataSourceQuery(query);
      datatable.load();
    }).val(typeof query.Type !== 'undefined' ? query.Type : '');

    $('#m_form_status, #m_form_type').selectpicker();
  };

  return {
    // public functions
    init: function() {
      demo();
    },
  };
}();

jQuery(document).ready(function() {
  DatatableColumnRenderingDemo.init();
});