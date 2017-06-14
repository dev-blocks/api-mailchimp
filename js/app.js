(function($){
	$newsletter = $('#form');

	app = {
		init: function(){
			/* F O R M
			$newsletter.submit(function(event) {
				event.preventDefault();
				var  form = $(this);

				$.ajax({
					url: form.attr('action'),
					data: form.serialize(),
					type: form.attr('method'),
					success: function(response){
						if (response.status == true) {
							//Clean input
							$newsletter.each (function(){
								this.reset();
								//Message True
							});
							console.log('Enviado...');
						} else {
							//Message False
							console.log('No Enviado...');
						}
					}
				});
			});
			*/
		}
	};

	// R U N
	app.init();
})(jQuery);