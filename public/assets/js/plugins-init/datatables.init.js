

(function($) {
     "use strict"
	 
		
	// table row
	var table = $('.data-table').DataTable({
		pageLength:15,
		fixedHeader: {
			header: true,
			headerOffset: $('.navbar').height(),
			footer: true
		},
		search: {
			return: true
		},		
		lengthMenu: [ [10, 15, 25, 50, -1], [10, 15, 25, 50, "All"] ],
		language: {
			paginate: {
			  next: '<i class="fa-solid fa-angle-right"></i>',
			  previous: '<i class="fa-solid fa-angle-left"></i>' 
			}
		  }
	});	

	$(window).resize(function(){
		table.fixedHeader.disable(),
		table.fixedHeader.enable();
	});
   
	
})(jQuery);
