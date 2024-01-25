<!DOCTYPE html>
<html>
    <head>
        <title>Take a photo</title>
</head>
<body>
    <button
id="captureButton">capture
Photo</button>
<video id="video" autoplay></video>
<canvas id="canvas"
style="display: none;"></canvas>
<img id="photo" src=""alt="Your captured photo will appear here." />

<script>
    const captureButton = document.getElementById('captureButton');
    const video = document.getElementById('video');
    const canvas = document.getElementById('canvas');
    const photo = document.getElementById('photo');
    // Access the user's camera and stream the video

    captureButton.addEventListener('Click,' async () => {
        const stream = await navigator.mediaDevices.getUserMedia({ video: true});
        video.srcobject=stream;
    });
//Capture the current frame of the video and display it as a photo
captureButton.addEventListener('click',) => {
    canvas.width =video.videoWidth;
    canvas.height = video.videoHeight;

    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
photo.src = canvas.toDataURL('image/png');
};
</script>
</body>
</html>