<?php include "navbar.html"; ?>
<style>
        /* Your CSS styles here */
     

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .download {
            background-color: #4CAF50;
            color: white;
        }

        .upload {
            background-color: #008CBA;
            color: white;
        }
    </style>
    <div style=" font-family: 'Arial', sans-serif;
            
            color: #333;
            margin: 20px;
            text-align: center;">
     <button class="button download">Download File 1</button>
    <button class="button download">Download File 2</button>
    <button class="button download">Download File 3</button>

    <!-- Upload Buttons -->
    <button class="button upload">Upload File 1</button>
    <button class="button upload">Upload File 2</button>
    <button class="button upload">Upload File 3</button>
    </div>