<script src="agencyAssets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="agencyAssets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<script type="text/javascript">
var url = window.location;
// Will only work if string in href matches with location
$('ul.m-menu__nav a[href="'+ url +'"]').parent().addClass('m-menu__item--active');

// Will also work for relative and absolute hrefs
$('ul.m-menu__nav a').filter(function() {
    return this.href == url;
}).parent().addClass('m-menu__item--active');
</script>