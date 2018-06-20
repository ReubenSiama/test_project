//== Class definition

var DatatableRecordSelectionDemo = function () {
	//== Private functions

	// basic demo
	var demo = function () {

		var datatable = $('#view_briefs').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: 'data/briefs-list.php'
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
				field: "RecordID",
				title: "#",
				sortable: false, // disable sort for this column
				width: 40,
				textAlign: 'center',
				selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			},
					  {
				field: "Actions",
				width: 110,
				title: "Actions",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : '';
					return '\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill" title="View Brief"  data-toggle="modal" data-target="#sitebrief">\
							<i class="la la-eye"></i>\
						</a>\
						<a href="invite-agencies.php" class="m-portlet__nav-link btn m-btn m-btn--hover-primary m-btn--icon m-btn--icon-only m-btn--pill" title="Invite Agencies">\
							<i class="flaticon-users"></i>\
						</a>\
					';
				}
			}, {
				field: "Date",
				title: "Date",
				// sortable: 'asc', // default sort
				filterable: false, // disable or enable filtering
				width: 100
			}, {
				field: "BriefTitle",
				title: "Title",
				width: 250
			}, {
				field: "Invited",
				title: "Invited",
				sortable: false // disable sort for this column
			}, {
				field: "Responded",
				title: "Responded"
			}, {
				field: "Shortlisted",
				title: "Shortlisted"
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