$ ->
	
	$("#main_categories a").click (event)->
		event.preventDefault()
		if $(@).parent().hasClass "selected"
			$(@).parent().removeClass "selected"
		else
			$("#main_categories").find(".selected").removeClass("selected")
			$(@).parent().addClass "selected"


	#research button click event
	$("#research").click ->
		alert "not working yet, deal with it!"


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
	origin = get_parm_from_query("origin")
	available = get_parm_from_query("available")
	price_max = get_parm_from_query("price_max")
	price_min = get_parm_from_query("price_min")
	price_max = if price_max? then parseInt(price_max, 10) else 1000
	price_min = if price_min? then parseInt(price_min, 10) else 0

	if category?
		if $("##{category}").length > 0
			$("##{category}").find("ul.sub_categories").removeClass("hidden")
			$("##{category}").find("i.icon-chevron-left").transition({ rotate: '-90deg' })
			if $("##{sub_category}").length > 0
				$("##{sub_category}").addClass("selected")
			else
				$("##{category}").addClass("selected")
	if origin?
		if $("#region option[value=#{origin}]").length > 0
			$("#region option[value=#{origin}]").attr("selected", "selected")
	if available?
		if available == 1 || available == "1"
			$("#available").prop("checked", true)

	$("#slider-range").slider
		range: true
		min: 0
		max: 1000
		values: [price_min, price_max]
		slide: (event, ui) ->
			$("#product_price_range").val ui.values[0] + " - " + ui.values[1] + " שח "

	$("#product_price_range").val $("#slider-range").slider("values", 0) + " - " + $("#slider-range").slider("values", 1) + " שח "

		