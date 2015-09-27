	# <script type='text/coffeescript'>
		User = "equationtwo"
		
		GetFirstImage = (screens) ->
			rep = screens[0].download_url.split("/")[4]
			$("#" + rep).after "<figure class='first-screen'><img src='" + screens[0].download_url + "' /></figure>"
		
			
		
		$("h3").each (index, element) =>
			Rep = $(element).attr("id")
			req = "https://api.github.com/repos/" + User + "/" + Rep + "/contents/SCREENS?ref=master"
			$.get req, GetFirstImage, 'json'
			$(element).html $(element).html().replace(/-/g," ")
			$(element).lettering()
