from requests_html import HTMLSession
url = "http://13.38.249.239:8000/polls/3/results/"
session = HTMLSession()
r = session.get(url)
a = r.html.text.split(" -- ")
r1 = int(a[1].split("vote")[0])
r2 = int(a[2].split("vote")[0])
print(r2)