#!/usr/bin/env python

from socket import *
from time import ctime

HOST = '192.168.0.156'
PORT = 21567
BUFSIZ = 1024
ADDR = (HOST, PORT)

udpSerSock = socket(AF_INET, SOCK_DGRAM)
udpSerSock.bind(ADDR)

while True:
	print 'waiting for message...'
	data, addr = udpSerSock.recvfrom(BUFSIZ)
	print 'received \"%s\" from %s' % (data, addr)
	udpSerSock.sendto('[%s] %s' %(
		ctime(), data), addr)
	print '...received from and returned to:', addr

udpSerSock.close()
