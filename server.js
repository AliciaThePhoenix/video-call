// server.js

const express = require('express');
const http = require('http');
const socketIo = require('socket.io');

const app = express();
const server = http.createServer(app);
const io = socketIo(server);

// Handle WebSocket connections
io.on('connection', (socket) => {
    // Handle signaling messages
    socket.on('signal', (data) => {
        // Broadcast signaling messages to other clients
        socket.broadcast.emit('signal', data);
    });
});

server.listen(3000, () => {
    console.log('Server running on port 3000');
});
