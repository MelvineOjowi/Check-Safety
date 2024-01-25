<!doctype html>
<html lang="en">
    <head>
        <style>
            .screenshot-image {
                width: 150px;
                height: 90px;
                border-radius: 4px;
                border: 2px solid whitesmoke;
                box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0, 1);
                position: absolute;
                bottom: 5px;
                left: 10px;
                background: white;
            }

.display-cover {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 70%;
    margin: 5% auto;
    position: relative;
}

            video{
                width: 100%;
                background: rgba(0, 0, 0, 0, 2);
            }
            .video-options {
                position: absolute;
                left: 20px;
                top: 30px;
            }
            .controls{
                position: absolute;
                right: 20px;
                top: 20px;
                display: flex;
            }
            .controls > button {
                width: 45px;
                height: 45px;
                text-align: center;
                border radius: 100%;
                margin: 0 6px;
                background: transpaent;
            }
            .controls > button:hover svg {
            color: white !important;
            }
            @media (min-width: 3)
            </style>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="Mercedes-Benz_Tourismo,_Berlin_(20180910_131322).jpg">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        <div class="display-cover">
            <video autoplay></video>
            <canvas class="d-none"></canvas>

            <div class="video-options">
                <select name="" id="" class="custom-select">
                    <option value="">Select camera</option>
</select>
        </div>
        <img class="screenshot-image d-none" alt="">

        <div class="controls">
            <button class="btn btn-danger play" title="play"><i data-feather="pause"></i></button>
            <button class="btn btn-info pause d-none" title="Pause"><i data feather="pause"></i></button>
            <button class="btn btn-outline-success screanshot d-none" title="Screanshot"><i data-feather="image"></i></button>
        </div>
            <script src="https://unpkg.com/feather-icons"></script>
<script src="script.js"></script>
</body>
</html>