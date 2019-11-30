# Pornhub-Video-Streaming
EDIT: Pornhub changed video protection methods. The pornhub streaming script no longer works.
You can still grab 720p sources from "youporn".
Login to pornhub using PHP. Grabs direct mp4 up to 1080p

This works only for regular pornhub accounts. 

If you want to use the older version that logs into premium accounts you can find it at https://github.com/Zebraslive/Pornhub-Premium-Video-Streaming/blob/3be7ed25ca169b666305405693bcfc17ef57bdeb/api.php

to use just add your username and pass to the loginx() function.

example
https://chilltaco.000webhostapp.com/ph/api.php?u=https://www.pornhub.com/view_video.php?viewkey=ph5d357df3389ce

or using just the key 
https://chilltaco.000webhostapp.com/ph/api.php?u=ph5d357df3389ce

links are cached based on ttl/validTo timestamp from the pornhub urls I think it's around 2-3hrs.


This is still a very basic version that was rushed so code is messy at the moment.
