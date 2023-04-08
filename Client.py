from vidstream import *
import tkinter as  tk
import socket
import threading
import requests

#Getting the public ip address of the user
reponse = requests.get("https://api64.ipify.org?format=json")
ip = reponse.json()['ip']

server = StreamingServer(ip, 8888)
reciver = AudioReceiver(ip, 1111)

def start_Listening():
    t1 = threading.Thread(target=server.start_server)
    t2 = threading.Thread(target=reciver.start_server)
    t1.start()
    t2.start()


def Camera_screen():
    camC = CameraClient(text_target.get(1.0,'end-1c'),9999)
    t3 = threading.Thread(target=camC.start_stream)
    t3.start()

def Screen_sharing():
    Screenshar = ScreenShareClient(text_target.get(1.0,'end-1c'),9999)
    t4 = threading.Thread(target=Screenshar.start_stream)
    t4.start()

def Audio_StreaM():
    AudiS = Audio_StreaM(text_target.get(1.0,'end-1c'),9999)
    t5 = threading.Thread(target=AudiS.start_stream)
    t5.start()

# set up the window
window = tk.Tk()
window.title("Zenith Virtual Office v1.1")
window.geometry('3000x200')
window.configure(bg='black')

# set up the labels and buttons with red text
label_target = tk.Label(window, text="Target ip:", bg='black', fg='red')
label_target.pack()

text_target = Text1(window, height=1, bg='black', fg='red')
text_target.pack()

btn_listen = Button(window, text="Start Listening", width=50, bg='red', fg='black')
btn_listen.pack(anchor=CENTER, expand=True)

btn_camera = Button(window, text="Start Camera ", width=50, bg='red', fg='black')
btn_camera.pack(anchor=CENTER, expand=True)

btn_screen = Button(window, text="Start Screen share", width=50, bg='red', fg='black')
btn_screen.pack(anchor=CENTER, expand=True)

btn_audio= Button(window, text="Start Audio", width=50, bg='red', fg='black')
btn_audio.pack(anchor=CENTER, expand=True)

# run the main loop
window.mainloop()
