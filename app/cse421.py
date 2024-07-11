import socket
port =5050
hostname= socket.gethostname()
host_ip= socket.gethostbyname(hostname)
format="uft-8"
buffer= 16
server_socket_address= (host_ip, port)
disconnected_message= "End"

server= socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server.bind(server_socket_address)

server.listen()
print("Server is listening ")

while True:
    conn, adrr=server.accept()
    print("Connected to", adrr)
    connected= True
    while connected:
        message_length=conn.recv(buffer).decode(format)

        print("length pf the message is ", message_length)
        if message_length:
            message_length= int(message_length)
            msg= conn.recv(message_length).decode(format)

            if msg==disconnected_message:
                conn.send("abc".encode(format))
                print("terminneted")
                connected=False
            else:
                print(msg)
                conn.send("Recieved your msg".encode(format))
conn.close()
