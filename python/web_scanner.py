#获取网页源码
import urllib.request
import re
class GetHtml(object):
    def __init__(self,URL,HEAD):
        self.url = URL
        self.head = HEAD
        
    def get_index(self):
        self.request = urllib.request.Request(self.url)
        self.request.add_header("user-agent",self.head)
        self.response = urllib.request.urlopen(self.request)
        return self.response.read()

    def get_list(self):
        self.strimglist = []
        self.imglist = re.findall(b"istyle/\w[60].jpg",self.get_index())
        #print(self.imglist)
        for i in self.imglist:
            self.strimglist.append(self.url+str(i,encoding="utf8"))
        return self.strimglist

    def get_image(self):
        num = 0
        for self.url in self.get_list():
            num += 1
            with open(str(num)+".jpg","wb")  as f:
                f.write(self.get_index())
html = GetHtml("http://www.baidu.com/","Mozilla/5.0 (Windows NT 8.1; Win32; x32) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36")
html.get_image()
#Mozilla/5.0 (Windows NT 8.1; Win32; x32) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36
#https://t7.baidu.com/it/u=1699405232,65153941&fm=193&f=GIF
#https://review.chinabrands.cn/chinabrands_cn/seo/image/20190218/Bing%20-%20%E5%9B%BE%E7%89%87%E6%90%9C%E7%B4%A2%E5%BC%95%E6%93%8E.png
#http://10.22.1.120/style/xxxxxxxxxxxxxxxxxxx.jpg
