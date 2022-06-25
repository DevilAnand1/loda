import asyncio
import random
import aiohttp
import time
import ssl

Token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2NTYxMjc4MzgsImlzcyI6Ind3dy5tY29udGVudC5uZXQiLCJuYmYiOjE2NTYxMjc4MzgsImV4cCI6MTY1NjEzMTQzOCwidXNlck5hbWUiOiJhbmFuZDEyMzQ1NiIsInNlcnZlck5hbWUiOiJ3d3cubWNvbnRlbnQubmV0Iiwib3RwIjowLCJtYWlsIjoiYWpheXJhbWlvcEBnbWFpbC5jb20iLCJ1c2VyaWQiOiI2MmI1YmY1ZWMyZDIyYTQ4NWU3OTJmZTIiLCJnZW5kZXIiOiJNYWxlIiwibW9iaWxlIjoiKzkxNzI1NjgyMDAyNCJ9.eCnkVphSu54WPunke9FNO8XnlPV_ZrpyJtCE_i5n5yQ"

url_list = ['https://api.mcontent.net/system/api/insertviews',
            'https://api.mcontent.net/system/api/insertviews']*50


async def fetch(session, url):
    async with session.post(url, json={"userid": None,"video_id": "62a3de6bed"+str(random.randint(10000000000000,99999999999999)),"views": "1","video_userid": "629ea78d95376255826b31f3","video_type": "mbrowse","transaction_type": "view","apikey":"7fbfdf5f-884f-4386-bf65-15f6592d9b69","countrycode":"IN"}, headers={'Host': 'api.mcontent.net','accept': 'application/json, text/plain, */*','authorization': 'Bearer '+ Token,'content-type': 'application/json','content-length': '238','accept-encoding': 'gzip','user-agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64; Trident/7.0; rv:11.0) like Gecko'}, ssl=ssl.SSLContext()) as response:
        return await response.text


async def fetch_all(urls, loop):
    async with aiohttp.ClientSession(loop=loop) as session:
        results = await asyncio.gather(*[fetch(session, url) for url in urls], return_exceptions=True)

def main():
    start = time.time()
    loop = asyncio.get_event_loop()
    urls = url_list
    htmls = loop.run_until_complete(fetch_all(urls, loop))
    print("total time", time.time()-start)

if __name__ == '__main__':
	while True:
		main()
