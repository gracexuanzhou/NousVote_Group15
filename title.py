from requests_html import HTMLSession
url = "http://13.38.249.239:8000/polls/3/results/"
session = HTMLSession()
r = session.get(url)
t = r.html.text.split("\n")[0]
print(t)