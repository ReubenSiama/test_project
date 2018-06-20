//== Class definition

var DatatableColumnWidthDemo = function () {
	//== Private functions

	// basic demo
	var demo = function () {

		var datatable = $('#LiveBriefs').mDatatable({
			// datasource definition
			data: {
				type: 'remote',
				source: {
					read: {
						url: '../data/live-briefs.php'
					}
				},
				pageSize: 5,
				saveState: {
					cookie: true,
					webstorage: true
				},
				serverPaging: true,
				serverFiltering: false,
				serverSorting: true
			},

			// layout definition
			layout: {
				theme: 'default', // datatable theme
				class: '', // custom wrapper class
				scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
				height: null, // datatable's body's fixed height
				footer: false // display/hide footer
			},

			// column sorting
			sortable: true,

			pagination: true,

			search: {
				input: $('#generalSearch')
			},

			// columns definition
			columns: [{
				field: "Actions",
				width: 110,
				title: "Actions",
				sortable: false,
				overflow: 'visible',
				template: function (row) {
					var dropup = (row.getDatatable().getPageSize() - row.getIndex()) <= 4 ? 'dropup' : '';
					return '<span>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="View details">\
							<i class="la la-ellipsis-h"></i>\
						</a>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					</span>';
				}
			}, {
				field: "RecordID",
				title: "#",
				sortable: false, // disable sort for this column
				width: 40,
				textAlign: 'center',
				selector: {class: 'm-checkbox--solid m-checkbox--brand'}
			}, {
				field: "BriefTitle",
				title: "Brief Title",
				sortable: 'asc', // default sort
				filterable: false, // disable or enable filtering
				width: 150
			}, {
				field: "BriefDetails",
				title: "Details",
				width: 700
			},  {
				field: "BriefDeadline",
				title: "Deadline"
			}]
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
	DatatableColumnWidthDemo.init();
});