import socket
port =5050
hostname= socket.gethostname()
host_ip= socket.gethostbyname(hostname)
format= "uft-8"
buffer=16
disconnected_message="End"

server_socket_address= (host_ip, port)

client= socket.socket(socket.AF_INET, socket.SOCK_STREAM)
client.connect(server_socket_address)


def msg_to_send(msg):
    message= msg.encode(format)
    msg_length= len(message)

    msg_length=str(msg_length).encode(format)
    msg_length+=b" "*(buffer- len(msg_length))
    client.send(msg.length)

    print(client.recv(2048).decode(format))
msg_to_send(f"IP address of the client is {host_ip} and the device name is {hostname}")
msg_to_send(disconnected_message)
