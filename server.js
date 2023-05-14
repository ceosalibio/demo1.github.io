const express = require('express');
const app = express();
const server = app.listen(9191, function() {
    console.log('server running on port 9191');
});
const io = require('socket.io')(server);

io.on('connection', function(socket) {

    socket.on('sendMessage', function(data) {
        io.emit('passMessage', data);
    });

    socket.on('sendSocketData', function(data) {
        io.emit('receivedData', data);
    });

    // socket.on('sendSocketData', function(data){
    //     io.emit('receivedData', data);
    // });
});
