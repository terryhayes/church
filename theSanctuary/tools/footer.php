<?php

	$other_script="$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on('click','ul.nav li.parent > a > span.icon', function(){          
		        $(this).find('em:first').toggleClass('glyphicon-minus');      
		    }); 
		    $('.sidebar span.icon').find('em:first').addClass('glyphicon-plus');
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})";

	$modal_call = "<div class='modal fade row' id='largeModal' tabindex='-1' role='dialog' aria-labelledby='basicModal' aria-hidden='true'>
		    <div class='modal-dialog'>
		        <div class='modal-content'>
		    </div>
		</div>";
	?>