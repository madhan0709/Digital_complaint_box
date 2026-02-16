document.addEventListener("DOMContentLoaded", function () {

    const imageInput = document.getElementById("imageInput");
    const preview = document.getElementById("preview");
    const typeSelect = document.getElementById("type");
    const otherComplaint = document.getElementById("otherComplaint");
    const otherLabel = document.getElementById("otherLabel");
    const form = document.getElementById("complaintForm");

    typeSelect.addEventListener("change", function () {

        if (this.value === "Other") {
            otherComplaint.classList.remove("hidden");
            otherLabel.classList.remove("hidden");
        } else {
            otherComplaint.classList.add("hidden");
            otherLabel.classList.add("hidden");
            otherComplaint.value = "";
        }
    });

    imageInput.addEventListener("change", function () {

        const file = this.files[0];

        if (file) {

            if (!file.type.startsWith("image/")) {
                alert("Please upload a valid image!");
                this.value = "";
                return;
            }

            if (file.size > 2 * 1024 * 1024) {
                alert("Image must be less than 2MB!");
                this.value = "";
                return;
            }

            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
                preview.style.display = "block";
            };

            reader.readAsDataURL(file);
        }
    });

    form.addEventListener("submit", function (e) {

        e.preventDefault();

        const roll = document.getElementById("roll").value.trim();
        const hostel = document.getElementById("hostel").value;
        const room = document.getElementById("room").value.trim();
        const type = typeSelect.value;

        if (!roll || !hostel || !room || !type) {
            alert("Please fill all required fields!");
            return;
        }

        if (type === "Other" && otherComplaint.value.trim() === "") {
            alert("Please describe your complaint!");
            return;
        }

        alert("Complaint Submitted Successfully ✅");

        form.reset();
        preview.style.display = "none";
        otherComplaint.classList.add("hidden");
        otherLabel.classList.add("hidden");
    });

});