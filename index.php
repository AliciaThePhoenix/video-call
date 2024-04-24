<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Call</title>
</head>
<body>
    <!-- Video elements for local and remote streams -->
    <div id="video-container">
        <video id="localVideo" autoplay muted></video>
        <video id="remoteVideo" autoplay></video>
    </div>
    
    <!-- Buttons for joining/leaving call, and mute/unmute -->
    <div id="button-container">
        <button id="joinButton">Join Call</button>
        <button id="leaveButton" style="display:none;">Leave Call</button>
        <button id="muteButton">Mute</button>
        <button id="unmuteButton">Unmute</button>
    </div>

    <script>
        // JavaScript code to access media devices
        const localVideo = document.getElementById('localVideo');

        // Function to handle errors
        function handleGetUserMediaError(e) {
            console.log('getUserMedia() error: ', e);
        }

        // Request access to the camera and microphone
        navigator.mediaDevices.getUserMedia({ video: true, audio: true })
            .then((stream) => {
                // Display the local video stream in the video element
                localVideo.srcObject = stream;
            })
            .catch(handleGetUserMediaError);
    </script>
</body>
</html>
