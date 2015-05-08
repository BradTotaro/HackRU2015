import socket               # Import socket module
import threading
import time
import sys
import Queue



import SocketServer
from BaseHTTPServer import BaseHTTPRequestHandler

def webcont():
    httpd = SocketServer.TCPServer(("", 8080), MyHandler)
    httpd.serve_forever()

class MyHandler(BaseHTTPRequestHandler):
    def do_GET(self):
        if (self.path == '/feed'):
			send.put("feed")
			print "FEED TRIGGER"
        self.send_response(200)




send = Queue.Queue()
receive= Queue.Queue()
send.put("test")
print send.get()

server = socket.socket(socket.AF_INET,socket.SOCK_STREAM)         # Create a socket object
host = ''      		 			 # name to listen for 
port = 4826              		 # Port
server.bind((host, port))     	 # listen in
server.listen(5)                 #actually listen

s, addr = server.accept()     # Establish connection with client.

def conman():
	while True:
		try:
			s, addr = server.accept()
		except:
			print "failed "
def sender():
	while True:
		mail=send.get(Queue)
		print "MAIL OUT-->  "+ mail
		s.send(mail)


def receiver():
	while True:
		mail=s.recv(1024)
		print "MAIL IN <--"+ mail
		#receive.put(mail)

cm = threading.Thread(target=conman)
sm = threading.Thread(target=sender)
rm = threading.Thread(target=receiver)
hm = threading.Thread(target=webcont)
rm.daemon=True
cm.daemon=True
sm.daemon=True
hm.daemon=True
cm.start()
rm.start()
sm.start()
hm.start()

UI=""
while UI != "quit":
  UI=raw_input("Type a command or quit to exit:")
  send.put(UI)

