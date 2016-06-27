
$(document).ready(function() {
		var currentLangCode = 'es';

		// build the language selector's options
		$.each($.fullCalendar.langs, function(langCode) {
			$('#lang-selector').append(
				$('<option/>')
					.attr('value', langCode)
					.prop('selected', langCode == currentLangCode)
					.text(langCode)
			);
		});

		// rerender the calendar when the selected option changes
		$('#lang-selector').on('change', function() {
			if (this.value) {
				currentLangCode = this.value;
				$('#calendar').fullCalendar('destroy');
				renderCalendar();
			}
		});

//		function renderCalendar() {
//			$('#calendar').fullCalendar({
//				header: {
//					left: 'prev,next today',
//					center: 'title',
//					right: 'month,agendaWeek,agendaDay'
//				},
//				defaultDate: '2016-06-12',
//				lang: currentLangCode,
//				buttonIcons: false, // show the prev/next text
//				weekNumbers: true,
//				editable: true,
//				eventLimit: true, // allow "more" link when too many events
//				
//			});
//		}

		renderCalendar();
	});


