projectBranch = "master"
User = "equationtwo"

date = ""
GetFirstImage = (response) ->
	rep = response[0].download_url.split("/")[4]
	$.get 'createpost.php?rep=' + rep + '&img=' + response[0].download_url
	console.log response[0].download_url

Callback = (response) ->
	for rep in response when rep.name isnt "equationtwo.github.io"
		req = "https://api.github.com/repos/" + User + "/" + rep.name + "/contents/SCREENS?ref=master"
		$.get req, GetFirstImage, 'json'
		
$.get 'https://api.github.com/users/' + User + '/repos', Callback, 'json'

