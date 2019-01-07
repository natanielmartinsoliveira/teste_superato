

$(function() {
	var fixHelperModified = function(e, tr) {
		var $originals = tr.children();
			var $helper = tr.clone();


			$helper.children().each(function(index) {
				$(this).width($originals.eq(index).width())
			});
			return $helper;
		},
		updateIndex = function(e, ui) {
			$('td.index', ui.item.parent()).each(function (i) {
				console.log(e, ui.item,i + 1);
				//$(this).html(i + 1);
			});
		};

		$("#myTable tbody").sortable({
			helper: fixHelperModified,
			stop: updateIndex
		}).disableSelection();
		
		$("tbody").sortable({
			distance: 5,
			delay: 100,
			opacity: 0.6,
			cursor: 'move',
			axis: 'y',
			update: function() {},
			stop: function (event, ui) {
		        var data = $(this).sortable('serialize');
	            console.log('--',data);
	            //$('span').text(data);
	            /*$.ajax({
	                    data: oData,
	                type: 'POST',
	                url: '/your/url/here'
	            });*/
			}
		});
});

	