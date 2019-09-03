import requests
from bs4 import BeautifulSoup

url = 'https://tw.yahoo.com/'
resp = requests.get(url)
soup = BeautifulSoup(resp.text,'lxml')

stories = soup.find_all('a', class_='story-title')
#print(type(stories))

for s in stories:
    #print(type(s))
    # 新聞標題
    print("標題：" + s.text)
    # 新聞網址
    print("網址：" + s.get('href'))