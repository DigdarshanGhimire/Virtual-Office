from vidstream import *
import tkinter as  tk
import socket
import threading
import requests

#Getting the local ip address
ip = socket.gethostbyname(socket.gethostname())

server = StreamingServer(ip, 9999)
reciver = AudioReceiver(ip, 8888)

def start_Listening():
    t1 = threading.Thread(target=server.start_server)
    t2 = threading.Thread(target=reciver.start_server)
    t1.start()
    t2.start()


def Camera_screen():
    camC = CameraClient(text_target.get(1.0,'end-1c'),7777)
    t3 = threading.Thread(target=camC.start_stream)
    t3.start()

def Screen_sharing():
    Screenshar = ScreenShareClient(text_target.get(1.0,'end-1c'),7777)
    t4 = threading.Thread(target=Screenshar.start_stream)
    t4.start()

def Audio_StreaM():
    AudiS = AudioSender(text_target.get(1.0,'end-1c'),7777)
    t5 = threading.Thread(target=AudiS.start_stream)
    t5.start()




#GUI
window = tk.Tk()
window.title("Zenith Virtual Office v1.1")
window.geometry('3000x200')

label_target = tk.Label(window,text="Enter Username:")
label_target.pack()

text_target = tk.Text(window, height=1)
text_target.pack()

btn_listen = tk.Button(window,text="Start Listening",width=50, command=start_Listening)
btn_listen.pack(anchor=tk.CENTER, expand=True)

btn_camera = tk.Button(window,text="Start Camera ",width=50, command=Camera_screen)
btn_camera.pack(anchor=tk.CENTER, expand=True)

btn_screen = tk.Button(window,text="Start Screen share",width=50, command=Screen_sharing)
btn_screen.pack(anchor=tk.CENTER, expand=True)

btn_audio= tk.Button(window,text="Start Audio",width=50, command=Audio_StreaM)
btn_audio.pack(anchor=tk.CENTER, expand=True)

window.mainloop()
