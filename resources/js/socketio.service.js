import { io } from 'socket.io-client';
class SocketioService {
    socket;
    constructor() {}
  
    setupSocketConnection() {
      this.socket = io('http://10.169.140.58:4001');
    //   this.socket = io('http://10.169.142.18:5000');

      this.socket.on('getStart', async (data) => {
        console.log(data,"dataaa")

      })


    }
        setStart(){
            // console.log('emit')
            // return
            this.socket.emit('setStart', 'test');
        }
        disconnect() {
            if (this.socket) {
                this.socket.disconnect();
            }
        }
    }

export default new SocketioService();
