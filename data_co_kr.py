import requests
import xmltodict

key="e690d7da713b49ec94a12b231edfe528"
url="https://openapi.gg.go.kr/Tbggibllbrm={}".format(key)

content=requests.get(url).content
dic=xmltodict.parse(content)
print(dic)