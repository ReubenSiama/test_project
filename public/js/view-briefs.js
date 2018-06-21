//== Class definition

var DatatableRecordSelectionDemo = function () {
	//== Private functions

	// basic demo
	var demo = function () {

		var datatable = $('#invitations').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: '/briefs',
					}
				},
				pageSize: 5,
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: true,
				serverFiltering: true,
				serverSorting: true
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: true, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: 550, // datatable's body's fixed height
				footer: false // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: false,

			search: {
				input: $('#BriefSearch')
			},

			// columns definition
			columns: [ {
				field: "Actions",
				width: 110,
				title: "Actions",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : '';
					return '\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View Full Brief" data-toggle="modal" data-target="#brief" >\
							<i class="la la-eye"></i>\
						</a>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Accept Invite" data-toggle="modal" data-target="#questions" >\
							<i class="la la-check-circle"></i>\
						</a>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Decline" data-toggle="modal" data-target="#refusal" >\
							<i class="la la-times-circle"></i>\
						</a>\
					';
				}
			},{
				field: "Date",
				title: "Date",
				// sortable: 'asc', // default sort
				sortable: true
			},{
				field: "Client",
				title: "Client",
				// sortable: 'asc', // default sort
				filterable: false, // disable or enable filtering
			},{
				field: "BriefTitle",
				title: "Brief Title",
				// sortable: 'asc', // default sort
				filterable: false // disable or enable filtering
			}, {
				field: "Amount",
				title: "Budget",
				sortable: true
			}, {
				field: "Location",
				title: "Location",
				sortable: true
			}]
		});
		var query = datatable.getDataSourceQuery();
		$('#m_form_status').on('change', function () {
			// shortcode to datatable.getDataSourceParam('query');
			var query = datatable.getDataSourceQuery();
			query.Status = $(this).val().toLowerCase();
			// shortcode to datatable.setDataSourceParam('query', query);
			datatable.setDataSourceQuery(query);
			datatable.load();
		}).val(typeof query.Status !== 'undefined' ? query.Status : '');
		$('#m_form_type').on('change', function () {
			// shortcode to datatable.getDataSourceParam('query');
			var query = datatable.getDataSourceQuery();
			query.Type = $(this).val().toLowerCase();
			// shortcode to datatable.setDataSourceParam('query', query);
			datatable.setDataSourceQuery(query);
			datatable.load();
		}).val(typeof query.Type !== 'undefined' ? query.Type : '');
		$('#m_form_status, #m_form_type').selectpicker();
		// on checkbox checked event
		$('.m_datatable')
			.on('m-datatable--on-check', function (e, args) {
				var count = datatable.getSelectedRecords().length;
				$('#m_datatable_selected_number').html(count);
				if (count > 0) {
					$('#m_datatable_group_action_form').collapse('show');
				}
			})
			.on('m-datatable--on-uncheck m-datatable--on-layout-updated', function (e, args) {
				var count = datatable.getSelectedRecords().length;
				$('#m_datatable_selected_number').html(count);
				if (count === 0) {
					$('#m_datatable_group_action_form').collapse('hide');
				}
			});
	};
	return {
		// public functions
		init: function () {
			demo();
		}
	};
}();

jQuery(document).ready(function () {
	DatatableRecordSelectionDemo.init();
});