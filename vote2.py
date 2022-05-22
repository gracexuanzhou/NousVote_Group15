from requests_html import HTMLSession
from subprocess import check_output
import json

config = check_output(['php', '-r', 'echo json_encode(include "config.php");'])
config = json.loads(config)

url = config['RESULT']
session = HTMLSession()
r = session.get(url)
a = r.html.text.split(" -- ")
r1 = int(a[1].split("vote")[0])
r2 = int(a[2].split("vote")[0])
print(r2)