$ ->

	$("#slider-range").slider
		range: true
		min: 0
		max: 1000
		values: [75, 300]
		slide: (event, ui) ->
			$("#amount").val ui.values[0] + " - " + ui.values[1] + " שח "

	$("#amount").val $("#slider-range").slider("values", 0) + " - " + $("#slider-range").slider("values", 1) + " שח "

	
	$("#main_categories a").click (event)->
		event.preventDefault()
		if $(@).parent().hasClass "selected"
			$(@).parent().removeClass "selected"
		else
			$(@).parent().addClass "selected"




	#toggle open/close sub-categories
	$(".categories #main_categories i").click (event) ->
		event.preventDefault()
		sub_category = $(@).parent().find("ul.sub_categories")
		if ($(sub_category).hasClass "hidden")
			$(@).transition({ rotate: '-90deg' })
			$(sub_category).slideDown("slow")
			$(sub_category).removeClass("hidden")
		else
			$(@).transition({ rotate: '0deg' })
			$(sub_category).slideUp(400, ->
				$(sub_category).addClass("hidden")
			)
		
	#turn on the router
	window.router()
	window.onhashchange = window.router

	category = get_parm_from_query("category")
	sub_category = get_parm_from_query("sub_category")

	if category?
		if $("##{category}").length > 0
			$("##{category}").find("ul.sub_categories").removeClass("hidden")
			$("##{category}").find("i.icon-chevron-left").transition({ rotate: '-90deg' })
			if $("##{sub_category}").length > 0
				$("##{sub_category}").addClass("selected")
			else
				$("##{category}").addClass("selected")
		