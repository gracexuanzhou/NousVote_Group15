from requests_html import HTMLSession
from subprocess import check_output
import json

config = check_output(['php', '-r', 'echo json_encode(include "config.php");'])
config = json.loads(config)

url = config['RESULT']
session = HTMLSession()
r = session.get(url)
t = r.html.text.split("\n")[0]
print(t)