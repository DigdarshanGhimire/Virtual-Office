from vidstream import *
import tkinter as tk
import threading
import socket

# Set up the server IP address and port
server_ip = 'YOUR_PUBLIC_IP_ADDRESS'  # Replace with your public IP address
server_port = 9999

# Create the server object
server = StreamingServer(server_ip, server_port)
receiver = AudioReceiver(server_ip, 8888)

def start_listening():
    t1 = threading.Thread(target=server.start_server)
    t2 = threading.Thread(target=receiver.start_server)
    t1.start()
    t2.start()

def camera_screen():
    # Get the target IP address from the text box
    target_ip = text_target.get(1.0, 'end-1c')
    cam_client = CameraClient(target_ip, 7777)
    t3 = threading.Thread(target=cam_client.start_stream)
    t3.start()

def screen_sharing():
    # Get the target IP address from the text box
    target_ip = text_target.get(1.0, 'end-1c')
    screen_client = ScreenShareClient(target_ip, 7777)
    t4 = threading.Thread(target=screen_client.start_stream)
    t4.start()

def audio_stream():
    # Get the target IP address from the text box
    target_ip = text_target.get(1.0, 'end-1c')
    audio_client = AudioSender(target_ip, 7777)
    t5 = threading.Thread(target=audio_client.start_stream)
    t5.start()

# Create the GUI window
window = tk.Tk()
window.title("Virtual Office")
window.geometry('300x200')

# Label for target IP address
label_target = tk.Label(window, text="Enter Recipient IP:")
label_target.pack()

# Text box for target IP address
text_target = tk.Text(window, height=1)
text_target.pack()

# Button to start listening
btn_listen = tk.Button(window, text="Start Listening", width=20, command=start_listening)
btn_listen.pack(pady=5)

# Button to start camera stream
btn_camera = tk.Button(window, text="Start Camera", width=20, command=camera_screen)
btn_camera.pack(pady=5)

# Button to start screen sharing
btn_screen = tk.Button(window, text="Start Screen Share", width=20, command=screen_sharing)
btn_screen.pack(pady=5)

# Button to start audio stream
btn_audio = tk.Button(window, text="Start Audio", width=20, command=audio_stream)
btn_audio.pack(pady=5)

# Run the GUI event loop
window.mainloop()
