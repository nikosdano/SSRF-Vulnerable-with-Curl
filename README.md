# SSRF-Vulnerable-with-Curl
This is the vulnerable "proxy" I used on this article: http://resources.infosecinstitute.com/the-ssrf-vulnerability/ . A simple, non-validated Curl request. I will also create a Python script which will allow you to perform the HTTP port scan. Either way, I suggest using Burp Intruder for this action. 

The "awesome_script.php" file is the index page where the user specifies the URL he/she wishes to request.

The "curl.php" file is the Vulnerable code which requests - with Curl - the given input. 
