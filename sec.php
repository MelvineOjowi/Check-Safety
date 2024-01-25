<!DOCTYPE html>
<html>
<head>
    <title>Take a Photo</title>
</head>
<body>
    <h1>Take a Photo</h1>
    <p>Click the button below to take a photo with your device's camera:</p>
    
    <button id="takePhotoButton">Take Photo</button>
    <img id="photoPreview" style="display: none;" alt="Preview">

    <script>
        const takePhotoButton = document.getElementById('takePhotoButton');
        const photoPreview = document.getElementById('photoPreview');

        takePhotoButton.addEventListener('click', async () => {
            try {
                const stream = await navigator.mediaDevices.getUserMedia({ video: true });

                const mediaStreamTrack = stream.getVideoTracks()[0];
                const imageCapture = new ImageCapture(mediaStreamTrack);

                const photoBlob = await imageCapture.takePhoto();
                const photoURL = URL.createObjectURL(photoBlob);

                photoPreview.src = photoURL;
                photoPreview.style.display = 'block';

                stream.getVideoTracks().forEach(track => track.stop());
            } catch (error) {
                console.error('Error accessing the camera:', error);
            }
        });
    </script>
</body>
</html>