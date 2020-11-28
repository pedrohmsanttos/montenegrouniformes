jQuery(function($) {'use strict',

	//#main-slider
	$(function(){
		$('#main-slider.carousel').carousel({
			interval: 8000
		});
	});


	// accordian
	$('.accordion-toggle').on('click', function(){
		$(this).closest('.panel-group').children().each(function(){
		$(this).find('>.panel-heading').removeClass('active');
		 });

	 	$(this).closest('.panel-heading').toggleClass('active');
	});

	//Initiat WOW JS
	new WOW().init();

	// portfolio filter
	$(window).load(function(){'use strict';
		var $portfolio_selectors = $('.portfolio-filter >li>a');
		var $portfolio = $('.portfolio-items');
		$portfolio.isotope({
			itemSelector : '.portfolio-item',
			layoutMode : 'fitRows'
		});
		
		$portfolio_selectors.on('click', function(){
			$portfolio_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$portfolio.isotope({ filter: selector });
			return false;
		});
	});


	function validate(){
		var isValid = true;

		if(jQuery.trim( jQuery("#name").val() ) == "" ){
			alertify.notify('Nome é obrigatório', 'error', 5, function () {});
			isValid = false;
		}
		else  if(jQuery.trim( jQuery("#email").val() ) == "" ){
			alertify.notify('Email é obrigatório', 'error', 5, function () {});
			isValid = false;
		}
		else  if(jQuery.trim( jQuery("#phone").val() ) == "" ){
			alertify.notify('Telefone é obrigatório', 'error', 5, function () {});
			isValid = false;
		}
		else  if(jQuery.trim( jQuery("#subject").val()) == "" ){
			alertify.notify('Assunto é obrigatório', 'error', 5, function () {});
			isValid = false;
		}
		else  if(jQuery.trim( jQuery("#message").val() ) == "" ){
			alertify.notify('Mensagem é obrigatório', 'error', 5, function () {});
			isValid = false;
		}

		return isValid;
	}

	// Contact form
	var form = $('#main-contact-form');
	form.submit(function(event){
		event.preventDefault();

		if(validate()){
			$.ajax({
				type: "POST",
				url: $(this).attr('action'),
	            data: $(this).serialize(),

				beforeSend: function(){
					var load = isLoading({text: 'Aguarde...'});
	                load.loading();
				}
			}).done(function(data){
				if(data.type == "success"){
					$("#name").val('');
					$("#email").val('');
					$("#phone").val('');
					$("#company").val('');
					$("#subject").val('');
					$("#message").val('');
					isLoading().remove();
					alertify.notify('Mensagem enviada com sucesso!', 'success', 5, function () {});
				}else{
					isLoading().remove();
					alertify.notify('Erro ao enviar mensagem. Tente novamente em instantes', 'error', 5, function () {});
				}
			});
		}

	});

	
	//goto top
	$('.gototop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({
			scrollTop: $("body").offset().top
		}, 500);
	});	

	//Pretty Photo
	$("a[rel^='prettyPhoto']").prettyPhoto({
		social_tools: false
	});	
});