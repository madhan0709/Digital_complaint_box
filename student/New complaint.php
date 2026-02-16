<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Complaint</title>
    <link rel="stylesheet" href="new_style.css">
</head>
<body>

<div class="page">

    <h1 class="main-title">New Complaint</h1>

    <div class="card">

        <div class="card-header">📢 Post Complaint</div>

        <form id="complaintForm">

            <label for="roll">Roll Number</label>
            <input type="text" id="roll" placeholder="Enter Roll Number" required name="roll_number">

            <label for="hostel">Hostel Name</label>
            <select id="hostel" required name="hostel_name">
                <option value="">Select Hostel</option>
                <option>Blue Sapphire</option>
                <option>Diamond</option>
                <option>Emerald</option>
                <option>Ruby</option>
                <option>Pearl</option>
            </select>

            <label for="room">Room Number</label>
            <input type="text" id="room" placeholder="Enter Room Number" required name="room_no">

            <label for="type">Complaint Type</label>
            <select id="type" required name="complaint_type">
                <option value="">Select Complaint Type</option>
                <option>Electricity</option>
                <option>Water</option>
                <option>Cleaning</option>
                <option>Other</option>
            </select>

            <label for="otherComplaint" id="otherLabel" class="hidden">
                Other Complaint
            </label>

            <textarea 
                id="otherComplaint"
                class="hidden"
                placeholder="Describe your complaint..."
                name="o_complaint"
            ></textarea>

            <label>Upload Image</label>

            <div class="upload-box">
                <input type="file" id="imageInput" hidden name="Image">

                <div class="upload-icon">📷</div>
                <p>Upload a photo (optional)</p>

                <button type="button" class="upload-btn"
                    onclick="document.getElementById('imageInput').click()">
                    + Choose Image
                </button>

                <img id="preview">
            </div>

            <button type="submit" class="submit-btn">
                Submit Complaint
            </button>

        </form>

    </div>

</div>

<script src="new_script.js"></script>
</body>
</html>