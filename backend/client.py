import socket               # Import socket module
import threading
import time
import sys
import Queue
import serial

send = Queue.Queue() 
receive= Queue.Queue()

client = socket.socket(socket.AF_INET,socket.SOCK_STREAM)         # Create a socket object
host = 'fishbowl.yepps.net'      		 # remote comp
port = 4826              		 # Port
client.connect((host, port))     # connect out
#print (client.recv(1024))
#client.send('Thank you for connecting')
#client.close()
ser=serial.Serial('/dev/ttyUSB0',115200)

def sender():
	while True:
		mail=send.get(Queue)
		print "MAIL OUT-->  "+ mail
		client.send(mail)


def receiver():
	while True:
		mail=client.recv(1024)
		print "MAIL IN <--"+ mail
		if ("feed" in mail):
			ser.write("""G91
G0 X20.2
G0 X-3
G0 X3
G0 X-3
G0 X3
G0 X-3
G0 X3
G0 X-3
G0 X3
G0 X-3
G0 X3
G0 X-3
G0 X3
G0 X-3
G0 X20.6
G0 X-2
G0 X2
G0 X-2
G0 X2
G0 X-2
G0 X2
G0 X-2
G0 X2
G0 X-2
G0 X2
G0 X-2
G0 X2
G0 X-2
G0 X2
G0 X-2
""")
		



sm = threading.Thread(target=sender)
rm = threading.Thread(target=receiver)
rm.daemon=True
sm.daemon=True
rm.start()
sm.start()

UI=""
while UI != "quit":
  UI=raw_input("Type a command or quit to exit:")
  send.put(UI)
