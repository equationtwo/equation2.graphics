projectName = $("h1").html()
projectBranch = "master"
User = "equationtwo"

$(".glance-img").parent().toggle()





getcontent = (response) -> $( "#SCREENS").append "<img src = '"+img.download_url+"' />" for img in response

req = "https://api.github.com/repos/" + User + "/" + projectName + "/contents/SCREENS?ref=" + projectBranch
$.get req, getcontent, 'json'



getSharedLinks = (shared) ->
	$("ul.live-prototypes").append "<li><a target='_blank' href=" + link + "></a></li>" for link in shared.split("\n")
	$("ul.live-prototypes li a").html("Live Prototype")


getFolderContent = (folder) ->
	folderName = folder[0].path.split("/")[0]
	for file in folder
		if file.name is "shared.txt" then $.get file.download_url, getSharedLinks
		else $("." + folderName).append "<li><a href=" + file.download_url + ">"  + file.name + "</a></li>"

getScreenCast = (cast) ->
	$("#SCREENS").prepend "<video src=" + video.download_url + " controls></video>" for video in cast

getFolders = (folders) ->
	for folder in folders when folder.name isnt "SCREENS"
		req = "https://api.github.com/repos/" + User + "/" + projectName + "/contents/" + folder.name + "?ref=" + projectBranch		
		if folder.name isnt "SCREENCAST" 
			$("#INFO").append "<h5 >" + folder.name + "</h5>"
			$("#INFO").append "<ul class=" + folder.name + "></ul>"	
			$.get req, getFolderContent, 'json' 
		else $.get req, getScreenCast, 'json'

req = "https://api.github.com/repos/" + User + "/" + projectName + "/contents?ref=" + projectBranch
$.get req, getFolders, 'json'