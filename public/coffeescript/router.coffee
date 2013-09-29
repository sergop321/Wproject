
pairs = {}

extractFragmentData = (queryString)->
	variables = queryString.split '&'
	@pairs = ([key, value] = pair.split '=' for pair in variables)


get_parm_from_query = (name) ->
		for [key, value] in @pairs
			return value if key is name  	

window.router = ->    
	if window.document.location.search != "" && window.document.location.search != undefined && window.document.location.search != null
		extractFragmentData(window.document.location.search?.substr 1)    
		

#jQuery ->
#	window.router()
#	window.onhashchange = window.router  	

