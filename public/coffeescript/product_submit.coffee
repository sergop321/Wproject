$ ->
	window.product = {
		product: {
			prod_name: "אייפון 5",
			prod_category: "electronic_products",
			prod_sub_category: "phones",
			prod_adress: "השוקן 18, תל אביב",
			prod_phone: "05477712383",
			prod_price: "70",
			prod_deposit: "20",
			prod_details: "מעוניין להשכיר רק לאזור המרכז",
		}
		is_show_phone: 1,
		extra_details: {
			power: {
				name: "הספק",
				val: "200 wat"
			},
			operation_system: {
				name: "מערכת הפעלה",
				val: "ios7"
			}
		}
	}

	window.categories = {
		electric_products: {
			washing_machines: "מכונות כביסה",
			ovens: "תנורים",
			mixers: "מיקסרים"
		},
		electronic_products: {
			phones: "פאלפונים",
			tvs: "טלוויזיות"
		}
		clothes: {
			women_clothes: "בגדי נשים",
			men_clothes: "בגדי גברים",
			wedding_dresses: "שמלאות כלה"
		}
	}

	counter = 0

	
	load_sub_categories = (category) ->
		if categories == null || typeof categories == 'undefined' || _.isEmpty(categories) || _.isEmpty(categories[category])
			print_error("קטגוריה לא מזוהה")
		else
			$("#prod_sub_category").html '<option value="" style="display:none;"></option>'
			$("#prod_sub_category").removeAttr("disabled")
			_(categories[category]).each((category_name,category_val) ->
				$("#prod_sub_category").append("<option value='#{category_val}'>#{category_name}</option>")
			)
	#print errors for user.
	print_error = (error_text) ->
		error = '''
			<div class="alert alert-error">
				''' + error_text + '''	
				<button type="button" class="close" data-dismiss="alert">&times;</button>
			</div>'''
		$("#errors").append(error)



	#add technical details
	$("#technical_details").change ->
		#checks that you don't pick the empty option
		if $(this).val() != null && $(this).val() != ""	&& $(this).val() != " "
			#check if this property already in use.
			if $("#prod_detail_#{$(this).val()}").length > 0
				print_error("כבר בחרת את האפשרות הזאת")
			else
				text = '''
					<div class="tech_detail" id="detail_''' + counter + '''" style="display:none">
						<label class="control-label" for="prod_detail_''' + $(this).val() + '''">''' + $("#technical_details option:selected").text() + '''</label>
						<input type="text" name="prod_detail_''' + $(this).val() + '''" id="prod_detail_''' + $(this).val() + '''" class="span2"/>
						<i class="icon-remove"></i>
						<div  class="clear"></div>
					</div>'''
				
				$("#tech_details").append(text)
				#animation
				$("#detail_#{counter}").show("slow")
				counter++

	#submit
	$("#submit_product").click ->
		$(@).button('loading')
		#TODO: validation
		data = $("form").serialize()
		#TODO: submitaion
		$(@).button('complete')



	#remove technical details
	$('#tech_details').on("click", ".icon-remove", ->
		$(@).parent().hide("slow", ->
			$(@).remove()
		)
	)

	#change sub categories acording to the main category
	$('#prod_category').change ->
		if $(@).val() != ""
			load_sub_categories($(@).val())
		else 
			$("#prod_sub_category").attr("disabled", "disabled")

	#check if it is editing of an existing product and update fields accordingly.
	if product? && !_.isEmpty(product)
		if product.product?
			_(product.product).each((product_name, product_val) ->
				if product_val == "prod_category" || product_val == "prod_sub_category"
					$("##{product_val} option[value=#{product_name}]").attr("selected", "selected")
					if product_val == "prod_category"
						load_sub_categories(product_name)
				else
					$("##{product_val}").val(product_name)
			)
		if product.is_show_phone?
			if product.is_show_phone == 1 || product.is_show_phone == "1"			
				$("#show_phone").prop("checked", true)
		if product.extra_details? && !_.isEmpty(product.extra_details)
			_(product.extra_details).each((product_prop, product_val) ->
				text = '''
					<div class="tech_detail" id="detail_''' + counter + '''" style="display:none">
						<label class="control-label" for="prod_detail_''' + product_val + '''">''' + product_prop.name + '''</label>
						<input type="text" name="prod_detail_''' + product_val + '''" id="prod_detail_''' + product_val + '''" class="span2" value="''' + product_prop.val + '''"/>
						<i class="icon-remove"></i>
						<div  class="clear"></div>
					</div>'''
				
				$("#tech_details").append(text)
				#animation
				$("#detail_#{counter}").show("slow")
				counter++
			)

	#GOOGLE MAPS AUTO COMPLETE
	# list of points to create the preferred bounds. 
	defaultBounds = new google.maps.LatLngBounds(new google.maps.LatLng(32.066158, 34.777819))
	input = document.getElementById("prod_adress")
	options = bounds: defaultBounds
	autocomplete = new google.maps.places.Autocomplete(input, options)
				

	


