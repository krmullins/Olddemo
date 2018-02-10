<script>
	$j(function(){
		var tn = 'employees';

		/* data for selected record, or defaults if none is selected */
		var data = {
			ReportsTo: <?php echo json_encode(array('id' => $rdata['ReportsTo'], 'value' => $rdata['ReportsTo'], 'text' => $jdata['ReportsTo'])); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		cache.start();
	});
</script>

